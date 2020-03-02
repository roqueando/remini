<?php
namespace Remini\Tests\Features;

use Remini\Tests\ReminiTestCase;

class ManagerTest extends ReminiTestCase
{
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

        $log = file_get_contents(self::LOG_PATH);
        $this->assertNotEmpty($log);

        $service_log = file_get_contents(self::SERVICE_LOG_PATH);

        $this->assertGreaterThan(0, count($this->servicesPID));
        $this->assertStringContainsString("Initializing service HomeTest", $service_log);
    }
}
