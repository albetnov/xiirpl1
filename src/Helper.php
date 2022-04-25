<?php

namespace Xii\Rpl1;

use Latte\Engine;

class Helper
{
    /**
     * Mendapatkan protocol dari url host.
     * 
     * @return string
     */
    private static function get_http_protocol()
    {
        if (!empty($_SERVER['HTTPS'])) {
            return "https";
        } else {
            return "http";
        }
    }

    /**
     * Mengembalikan URL yang sudah di format
     * 
     * @param string $url
     * 
     * @return string
     */
    public static function url(string $path): string
    {
        $port = isset($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '';
        return self::get_http_protocol() . '://' . $_SERVER['SERVER_NAME'] . $port . '/?url=' . $path;
    }

    /**
     * Mengembalikan URL utama dan portnya (jika ada)
     * 
     * @return string
     */
    public static function baseUrl()
    {
        $port = isset($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '';
        return self::get_http_protocol() . '://' . $_SERVER['SERVER_NAME'] . $port;
    }

    /** 
     * Mengembalikan url yang menuju ke asset. Digunakan untuk memanggil file css dan js atau resource-resource lainnya
     * yang terdapat di folder public.
     * 
     * @return string
     */
    public static function asset()
    {
        return self::baseUrl() . '/public/';
    }

    /**
     * Digunakan untuk menrender view yang di inginkan berserta datanya.
     * 
     * @param string $viewPath
     * @param array $data
     * 
     * @return Latte\Engine
     */
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
