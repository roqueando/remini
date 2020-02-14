<?php

namespace Remini\Core;

use Exception;
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

  public function run(int $port = 8000, string $host = '127.0.0.1'): Manager
  {
    $socket = stream_socket_server("tcp://$host:$port", $errno, $errstr);

    if(!$socket) {
      throw new Exception("[$errno]: $errstr");
    }
    while($conn = stream_socket_accept($socket)) {
      fwrite($conn, "Running Manager on tcp://$host:$port");
      var_dump(stream_socket_recvfrom($conn, 1500, STREAM_OOB));
    }
    //$this->upQueues();
    //$this->runServices();
    //$this->loop->run();
    return $this;
  }


  private function upQueues(): void
  {
    foreach (glob('src/services/*.php') as $file) {
      $name = strtolower(basename($file, 'Service.php'));
      $this->messager->createQueue($name);
      echo "\e[35mCreated $name queue \n";
    }
  }
  private function runServices(): void
  {

    foreach (glob('src/services/*.php') as $file) {
      require_once $file;

      $class = 'Remini\\Services\\' . basename($file, '.php');

      if (class_exists($class)) {
        echo "\e[32mspawning $class \n";
        (new $class($this->messager))->run();
      }
    }
  }
}
