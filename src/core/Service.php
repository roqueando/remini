<?php

namespace Remini\Core;

use Evenement\EventEmitter;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use React\Socket\ConnectionInterface;
use React\Socket\Server;
use React\Socket\TcpConnector;
use Remini\Core\Messager;

abstract class Service
{
  /**
   * Unique identifier
   * @var string
   */
  private $id;

  /**
   * ReactPHP loop
   * @var LoopInterface
   */
  private $loop;

  /**
   * Service event emitter
   * @var EventEmitter
   */
  private $eventEmitter;

  public $messager;

  protected $queueName;
  /**
   * Controls the mail while loop of event loop
   * @var integer
   */
  private $exit = null;

  public function getLoop(): LoopInterface
  {
    return $this->loop;
  }

  public function getEventEmitter(): EventEmitter
  {
    return $this->eventEmitter;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function __construct(Messager $messager = null)
  {
    $this->messager = $messager;
  }

  public function run(string $host = '127.0.0.1', int $port = 8000)
  {
    global $_serviceLoop;
    global $_service;

    $this->id = uniqid();
    $this->eventEmitter = new EventEmitter();
    $this->loop = $_serviceLoop = Factory::create();
    $_service = $this;

    // that service must connect to the Manager
    $connector = new TcpConnector($this->loop);
    $connector->connect('127.0.0.1:8000')
      ->then(function (ConnectionInterface $conn) {
        $conn->on('data', function ($data) {
          echo $data;
        });
      });

    // $this->loop->run();


    // exit($this->exit);
    return $this;
  }

  public function serve(LoopInterface $loop)
  {
  }

  public function sendMessage(string $queue, $message)
  {
    $this->messager->send($queue, $message);
  }

  public function listenQueue(string $queue)
  {
    $this->messager->listen($queue);
    return $this;
  }
}
