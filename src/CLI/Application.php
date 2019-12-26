<?php

namespace Remini\CLI;

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Remini\Services\HelloService;

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
      $this->success('Running Remini\Services\HelloService');
      (new HelloService)->run();
      return;
    }
  }
}
