<?php
namespace Remini\Tests\Features;

use Remini\Tests\ReminiTestCase;

class ManagerTest extends ReminiTestCase {
  
  public function setUp(): void {
    parent::setUp();
    $this->host = "tcp://127.0.0.1:8000";
    $this->log = file_get_contents("src/tests/.output/manager.log");
  }
  /** @test **/
  public function should_init_manager() {
    $this->runServer();
    sleep(1);

    $log = file_get_contents("src/tests/.output/manager.log");
    $this->assertNotEmpty($log);
    $this->assertStringContainsString("Running Manager on {$this->host}", $log);
  }

  public function should_connect_into_manager() {
    $this->runServer();
    sleep(1);
    // TODO: create a Server class to 
    // create a socket by socket php functions
    $client = stream_socket_client($this->host);
    fwrite($client, "testing");
    
    
    $this->assertStringContainsString("testing", $this->log);
  }
}
