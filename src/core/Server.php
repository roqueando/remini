<?php

namespace Remini\Core;

use Remini\Core\Contracts\Server as ServerContract;
use Exception;
use Remini\Core\Exceptions\ServerException;

class Server implements ServerContract
{
    public $port;
    public $host;
    public $error;

    public function __construct(string $host = '127.0.0.1')
    {
        $this->host = $host;
        set_time_limit(0);
        ob_implicit_flush();
        return $this;
    }

    public function setType(string $type): Server
    {
        if ($type === self::HTTP) {
            $this->type = self::HTTP;
        } elseif ($type === self::NODE) {
            $this->type = self::NODE;
        } else {
            throw new ServerException("That type is not correct!");
        }

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function run(int $port = null): void
    {
        if ($this->type === self::HTTP) {
            throw new Exception("Not implemented yet");
        }
        try {
            $port = $port ?? rand(pow(10, 4-1), pow(10, 4)-1);
            $this->socket = stream_socket_server("tcp://{$this->host}:$port", $errno, $errstr);
            var_dump($port);

            if ($errno || $errstr) {
                throw new ServerException("$errno : $errstr");
            }
            stream_set_blocking($this->socket, false);
            while ($conn = stream_socket_accept($this->socket)) {
                fwrite($conn, "Hello remini");
                $msg = stream_socket_recvfrom($conn, 1500, STREAM_OOB);
                echo $msg;
            }
        } catch (ServerException $err) {
            echo $err->getMessage();
        }
    }
}
