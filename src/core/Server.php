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
    protected $primary;
    protected $sockets = [];
    protected $context = null;

    public function __construct(string $host = '127.0.0.1', int $port = 0)
    {
        $this->port = $port;
        $this->host = $host;
        set_time_limit(0);
        ob_implicit_flush(1);
        $this->createSocket($host, $this->port);
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

    protected function read($resource): string
    {
        $buffer = '';
        $size = 8192;
        $metadata['unread_bytes'] = 0;
        do {
            if (feof($resource)) {
                throw new ServerException("Could not read from stream");
            }
            $result = fread($resource, $size);
            if ($result === false || feof($resource)) {
                throw new ServerException("Could not read from stream");
            }

            $buffer .= $result;
            $metadata = stream_get_meta_data($resource);
            $size = ($metadata['unread_bytes'] > $size) ? $size : $metadata['unread_bytes'];
        } while ($metadata['unread_bytes'] > 0);

        return $buffer;
    }

    public function write($resource, string $str): int {
        $length = strlen($str);
        if($length === 0) {
            return 0;
        }

        $written = 0;
        $fwrite = null;
        for($written; $written < $length; $written += $fwrite) {
            $fwrite = fwrite($resource, substr($str, $written));
            if($fwrite === false) throw new ServerException('Could not write stream');
            if($fwrite === 0) throw new ServerException('Could not write stream');
        }

        return $written;
    }

    private function createSocket(string $host, int $port): void
    {
        $protocol = "tcp://";
        $url = $protocol . $host . ":" . $port;
        $this->context = stream_context_create();
        $this->primary = stream_socket_server(
            $url,
            $errno,
            $err,
            STREAM_SERVER_BIND | STREAM_SERVER_LISTEN,
            $this->context
        );
        stream_set_blocking($this->primary, false);

        if ($this->primary === false) {
            throw new ServerException("Error creating socket: " . $err);
        }

        $this->sockets[] = $this->primary;
    }

    public function run(int $port = null): void
    {
        if ($this->type === self::HTTP) {
            throw new Exception("Not implemented yet");
        }

        while(true) {
            $sockets = $this->sockets;
            $write = null;
            $except = null;
            $available = stream_select($sockets, $write, $except, null, 5000);
            foreach($this->sockets as $socket) {
                if($socket === $this->primary) {
                    var_dump('its primary socket');
                    $resource = @stream_socket_accept($this->primary, 6000);
                    var_dump($resource);
                    if(!$resource) {
                        echo "Socket error: " . socket_strerror(socket_last_error($resource));
                        continue;
                    } else {
                        $this->sockets[] = $resource;
                    }
                }
            }
        }
    }
}
