<?php

namespace Remini\Tests;

use PHPUnit\Framework\TestCase;

class ReminiTestCase extends TestCase
{
    protected $managerPid;
    protected $servicesPID = [];
    protected $serviceNames = [];

    const LOG_PATH = 'src/tests/.output/manager.log';
    const SERVICE_FILE = "src/services/HomeTestService.php";
    const SERVICE_LOG_PATH = "src/tests/.output/service.log";

    public function setUp(): void
    {
        parent::setUp();
    }
  
    public function tearDown(): void
    {
        file_put_contents(self::LOG_PATH, "");
        //file_put_contents(self::SERVICE_LOG_PATH, "");
        $this->stopManager();
        $this->stopServices();
    }
    protected function runServer()
    {
        $this->upManager();
        $this->upServices();
    }

    protected function upServices()
    {
        $this->createService();
        $files = glob("src/services/*.php");
        $msg = '';

        foreach ($files as $file) {
            if (file_exists($file)) {
                [$root, $folder, $filename] = explode("/", $file);
                $service = preg_replace(["/Service.php/"], '', $filename);
            
                $this->serviceNames[] = $service;
                $this->servicesPID[] = exec(
                    "php remini --init $service > src/tests/.output/service.log 2>&1 & echo $!",
                    $output
                );
            }
        }

       // file_put_contents(self::SERVICE_LOG_PATH, $msg);
        var_dump(file_get_contents(self::SERVICE_LOG_PATH));
        sleep(1);
        $this->removeService();
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
    protected function stopServices()
    {
        foreach ($this->servicesPID as $PID) {
            exec("kill $PID");
        }
    }

    protected function createService(): void
    {
        $serviceClass = "<?php namespace Remini\Services;use Remini\Core\Service;class HomeTestService extends Service {}";
        file_put_contents(self::SERVICE_FILE, $serviceClass);
    }
    protected function removeService(): void
    {
        if (file_exists(self::SERVICE_FILE)) {
            unlink(self::SERVICE_FILE);
        }
    }
}
