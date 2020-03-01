<?php

namespace Remini\CLI;

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Remini\Core\Manager;

class Application extends CLI
{
    protected function setup(Options $options)
    {
        $options->setHelp('A distributed application called Remini');
        $options->registerOption('version', 'Show the application version', 'v');
        $options->registerOption('up', 'Up manager', 'u');
        $options->registerOption('init', 'Initialize a service', 'i');
        $options->registerArgument('service', 'Service name');
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
            (new Manager('127.0.0.1'))
                ->setType('node')
                ->run(8000);
            return;
        }

        if ($options->getOpt('init')) {
            $result = $options->getArgs()[0];
            $this->info("Initializing service $result");
            
            if (!file_exists("src/services/{$result}Service.php")) {
                $this->error("Service $result not found!");
                return;
            }
            $file = require_once("src/services/{$result}Service.php");
            (new $file('127.0.0.1'))
                ->setType('node')
                ->run();
            return;
        }
    }
}
