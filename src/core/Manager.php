<?php

namespace Remini\Core;

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use React\Socket\ConnectionInterface;
use React\Socket\TcpServer;
use Remini\Core\Messager;
use Remini\Services\HelloService;
/*
  Concept.
    The manager is a normal service which use React\EventLoop too.
*/

class Manager
{
  private $loop;
  private $outStream;
  private $inStream;
  private $port;
  protected $messager;
  public function __construct(Messager $messager)
  {
    $this->loop = Factory::create();
    $this->messager = $messager;
  }

  public function run(int $port = 8000, string $host = '127.0.0.1')
  {
    $uri = $host . ':' . $port;
    $socket = new TcpServer($port, $this->loop);

    $socket->on('connection', function (ConnectionInterface $conn) {
      $conn->write('A service [' . $conn->getRemoteAddress() . '] was connected');
      echo "A service [{$conn->getRemoteAddress()}] was connected \n";

      $conn->on('data', function ($data) {
        echo "a data [$data] was received";
      });
    });

    $this->upQueues();
    $this->runServices();
    $this->loop->run();
    return $this;
  }


  private function upQueues(): void
  {
    foreach (glob('src/services/*.php') as $file) {
      $name = strtolower(basename($file, 'Service.php'));
      $this->messager->createQueue($name);
      echo "Created $name queue \n";
    }
  }
  private function runServices(): void
  {

    foreach (glob('src/services/*.php') as $file) {
      require_once $file;

      $class = 'Remini\\Services\\' . basename($file, '.php');

      if (class_exists($class)) {
        echo "spawning $class \n";
        (new $class($this->messager))->run();
      }
    }
  }
}
