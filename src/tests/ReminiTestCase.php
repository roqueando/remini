<?php

namespace Remini\Tests;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\throwException;

class ReminiTestCase extends TestCase
{
    protected $managerPid;
    protected $servicesPID = [];

    const LOG_PATH = 'src/tests/.output/manager.log';

    public function setUp(): void
    {
        parent::setUp();
    }
  
    public function tearDown(): void
    {
        file_put_contents(self::LOG_PATH, "");
        $this->stopManager();
        //$this->stopServices();
    }
    protected function runServer()
    {
        $this->upManager();
        $this->upServices();
    }

    protected function upServices()
    {
        $files = glob("src/services/*Services.php");
        $notFound = 0;
        $msg = '';
        
        foreach ($files as $file) {
            if (!file_exists($file)) {
                $notFound++;
            }
            $msg = 'Service found';
        }
        if ($notFound <= 0) {
            $msg = 'No services found';
        }

        file_put_contents(self::LOG_PATH, $msg);
    }

    protected function upManager(): void
    {
        $this->managerPid = exec(
            'php remini -u > src/tests/.output/manager.log 2>&1 & echo $!',
            $output
        );
        sleep(1);
    }

    protected function stopManager()
    {
        exec("kill {$this->managerPid} > /dev/null 2>&1");
    }
}
