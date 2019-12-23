<?php


require_once dirname(__DIR__) . '/vendor/autoload.php';

use Remini\Services\HelloService;

$helloQueue = new HelloService();
$queue = $helloQueue->createQueue('hello');
$queue2 = $helloQueue->createQueue('hello.2');
$message = [
  'id' => uniqid(),
  'data' => 'hello world',
];

$helloQueue->send('hello', $message);

$helloQueue->run();
