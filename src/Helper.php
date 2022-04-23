<?php

namespace Xii\Rpl1;

use Latte\Engine;

class Helper
{
    private static function get_http_protocol()
    {
        if (!empty($_SERVER['HTTPS'])) {
            return "https";
        } else {
            return "http";
        }
    }



    public static function url(string $path): string
    {
        $port = isset($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '';
        return self::get_http_protocol() . '://' . $_SERVER['SERVER_NAME'] . $port . '/?url=' . $path;
    }

    public static function baseUrl()
    {
        $port = isset($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '';
        return self::get_http_protocol() . '://' . $_SERVER['SERVER_NAME'] . $port;
    }

    public static function asset()
    {
        return self::baseUrl() . '/public/';
    }

    public static function render($viewPath, $data = [])
    {
        $latte = new Engine;
        $path = __DIR__ . '/tmp';
        if (!is_dir($path)) {
            mkdir(__DIR__ . 'tmp');
            mkdir($path);
        }

        $latte->setTempDirectory($path);

        return $latte->render(__DIR__ . '/' . $viewPath . '.latte', $data);
    }
}
