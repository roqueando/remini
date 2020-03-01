<?php
namespace Remini\Tests\Features;

use Remini\Tests\ReminiTestCase;

class ManagerTest extends ReminiTestCase
{
    const LOG_FILE = "src/tests/.output/manager.log";
    public function setUp(): void
    {
        parent::setUp();
        $this->host = "tcp://127.0.0.1:8000";
    }
    /** @test **/
    public function should_init_manager()
    {
        $this->runServer();
        sleep(1);

        $log = file_get_contents(self::LOG_FILE);
        $this->assertNotEmpty($log);
        $this->assertStringContainsString("Service found", $log);
    }
}
