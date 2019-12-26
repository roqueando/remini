<?php


require_once dirname(__DIR__) . '/vendor/autoload.php';
set_time_limit(0);

use Remini\Services\HelloService;

(new HelloService)->run();
