<?php

namespace Remini\Tests;

use PHPUnit\Framework\TestCase;

class ReminiTestCase extends TestCase {
  protected $managerPid;

  public function setUp(): void {
    parent::setUp();
  }
  
  public function tearDown(): void {
    $this->stopManager();
    //$this->stopServices();
  }
  protected function runServer() {
    // ups manager
    $this->upManager();
    // ups services
  }

  protected function upServices() {
    // read all services from folder src/services
    // and execute all services
  }

  protected function upManager(): void {
    $this->managerPid = exec(
      'php remini -u > src/tests/.output/manager.log 2>&1 & echo $!', 
      $output
    );
  }

  protected function stopManager() {
    exec("kill {$this->managerPid} > /dev/null 2>&1");
  }
  
}



