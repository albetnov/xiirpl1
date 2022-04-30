<?php

// Entry Point (All logic required by views belongs to this file.)

require_once __DIR__ . '/../vendor/autoload.php';

use Xii\Rpl1\Helper;
use Xii\Rpl1\Parser;

session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

/**
 * Digunakan untuk menampilakan view about beserta dengan data nya.
 *
 * @return Xii\Rpl1\Helper
 */
function about()
{
    $data = Parser::parse([
        'Bu Nur' => [
            'gambar'  => 'bunur.JPG',
            'jabatan' => 'Wali Kelas',
        ],
        'Vincent' => [
            'gambar'  => 'vincent.jpg',
            'jabatan' => 'Ketua Kelas',
        ],
        'Riyadi' => [
            'gambar'  => 'riyadi.jpg',
            'jabatan' => 'Wakil Ketua Kelas',
        ],
        'Ricky' => [
            'gambar'  => 'ricky.jpg',
            'jabatan' => 'Bendahara',
        ],
        'Afina' => [
            'gambar'  => 'afina.jpg',
            'jabatan' => 'Sektaris',
        ],
        'Hernando' => [
            'gambar'  => 'hernando.jpg',
            'jabatan' => 'Keamanan',
        ],
        'Kimberly' => [
            'gambar'  => 'kimberly.jpg',
            'jabatan' => 'Koordinator Lomba',
        ],
        'Maher' => [
            'gambar'  => 'maher.jpg',
            'jabatan' => 'Koordinator Lomba',
        ],
    ]);

    return Helper::render('about-us', compact('data'));
}

/**
 * Digunakan untuk menampilakan view home.
 *
 * @return Xii\Rpl1\Helper
 */
function home()
{
    $albums = [];
    $exclude = ['.', '..', '20220423193334__MG_4802_1.jpg', '20220423193334__MG_4802_2.jpg', '20220423193334__MG_4802_3.jpg', '20220423193334__MG_4802_4.jpg'];
    $dir = array_diff(scandir(__DIR__ . '/img/album/'), $exclude);
    foreach ($dir as $file) {
        $albums[] = $file;
    }

    $potraits = [];
    $dir2 = array_diff(scandir(__DIR__ . '/img/potrait/'), ['.', '..']);
    foreach ($dir2 as $file) {
        $potraits[] = $file;
    }

    return Helper::render('home', compact(['albums', 'potraits']));
}

function rplsatu()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!$_POST['kirim']) {
            exit('Ada yang salah!');
        }
        $token = htmlspecialchars($_POST['token']) ?? null;
        if (!$token || $token !== $_SESSION['token']) {
            exit('Ada yang salah! token');
        }
        $password = strip_tags(htmlspecialchars($_POST['password']));
        if ($password == 'xrpl2') {
            return Helper::render('rpl-satu-data');
        } else {
            return Helper::render('rpl-satu', ['error' => 'Password invalid']);
        }
    }

    return Helper::render('rpl-satu');
}

/**
 * Routing sederhana menggunakan query parameter pada url.
 * Untuk routing lebih dari 2 kasus disarankan untuk refactor ke switch case.
 */
switch ($_GET['url'] ?? null) {
    case 'about':
        about();
        break;
    case 'rplsatu':
        rplsatu();
        break;
    default:
        home();
}
