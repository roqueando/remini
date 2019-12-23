<?php


require_once dirname(__DIR__) . '/vendor/autoload.php';

use Remini\Services\HelloService;

$helloQueue = new HelloService();
$queue = $helloQueue->createQueue('hello');

$message = [
  'id' => uniqid(),
  'data' => 'hello world',
];

$helloQueue->send($queue, $message);

$helloQueue->run();
