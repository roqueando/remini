<?php

namespace Remini\Services;

use League\Event\Emitter;
use Remini\Core\Messager;

$emitter = new Emitter();
abstract class BaseService extends Messager
{
  protected $baseEventName;
  protected $queueId;


  public function addListener(string $eventName, $listener)
  {
    $emitter->addListener($this->baseEventName . $eventName, $listener);
  }
  protected function watch()
  {
    while (msg_receive($queue, 1, $msg_type, 512,  $message, true, MSG_IPC_NOWAIT, $error_code)) {
      echo "\nINFO: Received a new message on ID: {$message->id} and data: {$message->data} \n";
    }
  }
}
