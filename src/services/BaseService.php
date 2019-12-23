<?php

namespace Remini\Services;

use League\Event\Emitter;
use Remini\Core\Messager;

$emitter = new Emitter();
abstract class BaseService extends Messager
{
  protected $queue;

  protected function setQueue()
  {
    $this->queue = $queue;
  }
}
