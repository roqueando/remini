<?php

namespace Remini\Core;

use Evenement\EventEmitter;
use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;
use React\Socket\Server;

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

  public function run(string $host = '127.0.0.1', int $port = 8000)
  {
    global $_serviceLoop;
    global $_service;

    $this->id = uniqid();
    $this->eventEmitter = new EventEmitter();
    $this->loop = $_serviceLoop = Factory::create();
    $_service = $this;

    $url = $host . ':' . $port;
    $socket = new Server($host . ':' . $port, $this->loop);

    $socket->on('connection', function ($connection) {
      $connection->write("Hello fella");
    });
    $this->loop->run();
  }

  public function serve(LoopInterface $loop)
  {
  }
}
