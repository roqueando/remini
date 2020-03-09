<?php

namespace Remini\Core;

use Remini\Core\Server;

class Manager extends Server
{
    public function __construct(string $host)
    {
        parent::__construct($host);
        $this->upServices();
    }

    private function upServices() {

        $files = glob("src/services/*.php");
        
        foreach ($files as $file) {
            if (file_exists($file)) {
                [$root, $folder, $filename] = explode("/", $file);
                $service = preg_replace(["/Service.php/"], '', $filename);
                exec(
                    "php remini --init $service > /dev/null 2>&1 & echo $!",
                    $output
                );
            }
        }
    }
}
