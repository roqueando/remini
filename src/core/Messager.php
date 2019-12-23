<?php

namespace Remini\Core;

class Messager
{
  protected $queues = [];

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


  public function run()
  {
    $results = [];
    foreach ($this->queues as $key => $value) {
      $queue = msg_get_queue($value);
      $rcv = msg_receive($queue, 1, $msg_type, 1024, $message, true, MSG_IPC_NOWAIT, $error_code);
      if ($rcv) {
        array_push($results, $message);
        echo "rodou";
      }
    }
    // return $thisresult;
  }
}
