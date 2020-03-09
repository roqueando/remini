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

        foreach($this->serviceNames as $service) {
            $this->assertStringContainsString("Initializing service $service", $service_log);
        }
    }

    public function should_manage_messages() {
        $this->runServer();
        sleep(1);
        $data = [
            'service' => 'HomeTest',
            'action' => 'say',
            'data' => 'John'
        ];

        $this->createSocketAndSendData($data); 
        $managerLog = file_get_contents(self::LOG_PATH);
        $this->assertStringContainsString("Sending message to {$data['service']}", $managerLog);
    }

    private function createSocketAndSendData($data): void {
        $client = stream_socket_client($this->host);
        stream_socket_sendto($client, json_encode($data));
    }
}
