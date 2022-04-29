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
            return 'https';
        } else {
            return 'http';
        }
    }

    /**
     * Mengembalikan URL yang sudah di format.
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
     * Mengembalikan URL utama dan portnya (jika ada).
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
        return self::baseUrl() . '/';
    }

    /**
     * Digunakan untuk menrender view yang di inginkan berserta datanya.
     *
     * @param string $viewPath
     * @param array  $data
     *
     * @return Latte\Engine
     */
    public static function render($viewPath, $data = [])
    {
        $latte = new Engine();
        $path = __DIR__ . '/tmp';
        if (!is_dir($path)) {
            mkdir(__DIR__ . 'tmp');
            mkdir($path);
        }

        $latte->setTempDirectory($path);

        $latte->addFunction('token', function () {
            return $_SESSION['token'];
        });

        $quotesList = [
            'Recall it as often as you wish, a happy memory never wears out. - Libbie Fudim',
            'Time endears but cannot fade the memories that friends have made.',
            'Memories are the treasures that we keep locked deep within the storehouse of our souls, to keep our hearts warm when we are lonely. - Becky Aligada',
            'To reminisce with my old friends, a chance to share some memories, and play our songs again. - Ricky Nelson',
            'A place in thy memory, dearest, Is all that I claim; To pause and look back when thou hearest The sound of my name. - Gerald Griffin',
            'A happy memory is a hiding place for unforgotten treasures. - Paul L. Powers',
            "Don't count the years...count the memories.",
            'Recall it as often as you wish, a happy memory never wears out. - Libbie Fudim',
            'Fond memory brings the light of other days around me. - Thomas More',
            'A new friend is valuable, and old friend is priceless.',
            'Good friends are hard to find, harder to leave, and impossible to forget.',
            'We all take different paths in life, but no matter where we go, we take a little of each other everywhere.',
            'No love, no friendship can cross the path of our destiny without leaving some mark on it forever. - Francois Mauriac',
            'A trip to nostalgianow and then is good for the spirit. - Dan Bartolovic',
            'There is nothing like returning to a place that remains unchanged to find the ways in which you yourself have altered. - Nelson Mandela',
            'The best effect of fine persons is felt after we have left their presence. - Ralph Waldo Emerson',
            "School's out, Memories past, Don't ever doubt, Our friendship will last.",
        ];

        $quotes = $quotesList[random_int(array_key_first($quotesList), array_key_last($quotesList))];

        $data['quotes'] = $quotes;

        return $latte->render(__DIR__ . '/' . $viewPath . '.latte', $data);
    }
}
