<?php

namespace Remini\Core;

use Exception;

final class Messager
{
  protected $queues = [];
  protected $results = [];

  public function createQueue($name)
  {
    try {
      $this->queues[$name] = random_int(1, 100);
      return msg_get_queue($this->queues[$name]);
    } catch (\Exception $err) {
      return json_encode([
        'error' => [
          $err->getMessage()
        ]
      ]);
    }
  }

  private function getQueueByName(string $name)
  {
    return $this->queues[$name];
  }

  private function setResults($message, string $queueName)
  {
    if (!isset($this->results[$queueName]) && empty($this->results[$queueName])) {
      $this->results[$queueName] = [];
    }
    // return $this->results[$queueName] = $message;
    return array_push($this->results[$queueName], $message);
  }

  public function getResults(string $queue): array
  {
    return $this->results;
  }
  public function getQueues()
  {
    return implode(", ", array_keys($this->queues));
  }

  public function send(string $queue, $message)
  {
    try {
      $currentQueue = msg_get_queue($this->getQueueByName($queue));
      return msg_send($currentQueue, 1, $message, true, false, $error_code);
    } catch (\Exception $err) {
      return json_encode([
        'error' => [
          $err->getMessage()
        ]
      ]);
    }
  }

  public function listen(string $queue)
  {
    $currentQueue = msg_get_queue($this->getQueueByName($queue));
    while (msg_receive($currentQueue, 1, $msg_type, 1024, $message, true, MSG_IPC_NOWAIT, $error_code)) {
      $this->setResults($message, $queue);
    }
    return $this;
  }
}
