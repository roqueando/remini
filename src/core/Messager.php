<?php

namespace Remini\Core;

abstract class Messager
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


  public function send($queue, $message)
  {
    try {
      return msg_send($queue, 1, $message, true, false, $error_code);
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
    foreach ($this->queues as $key => $value) {
      $queue = msg_get_queue($value);
      msg_receive($queue, 1, $msg_type, 1024, $message, true, MSG_IPC_NOWAIT, $error_code);
      var_dump($message);
    }
  }
}
