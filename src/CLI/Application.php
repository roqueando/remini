<?php

namespace Remini\CLI;

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Remini\Services\HelloService;
use Remini\Core\Manager;
use Remini\Services\WorldService;
use Remini\Core\Messager;

class Application extends CLI
{
  protected function setup(Options $options)
  {
    $options->setHelp('A distributed application called Remini');
    $options->registerOption('version', 'show the application version', 'v');
    $options->registerOption('up', 'Up all services', 'u');
  }

  protected function main(Options $options)
  {

    if ($options->getOpt('version')) {
      $this->info('0.0.1');
      return;
    }

    if ($options->getOpt('up')) {
      // initiate the messager
      $this->info('Running Manager on tcp://127.0.0.1:8000');
      (new Manager((new Messager)))->run();
      return;
    }
  }
}
