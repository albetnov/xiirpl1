<?php

// Entry Point (All logic required by views belongs to this file.)

require_once __DIR__ . '/../vendor/autoload.php';

use Xii\Rpl1\Helper;
use Xii\Rpl1\Parser;

/**
 * Digunakan untuk menampilakan view about beserta dengan data nya.
 *
 * @return Xii\Rpl1\Helper
 */
function about()
{
    $data = Parser::parse([
        'Mieko Huang Vincent' => [
            'gambar'  => 'team-01.jpg',
            'jabatan' => 'Ketua Kelas',
        ],
        'Riyadi Fajri' => [
            'gambar'  => 'team-02.jpg',
            'jabatan' => 'Wakil Ketua Kelas',
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
    $dir = array_diff(scandir(__DIR__ . '/img/album/'), ['.', '..']);
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

/**
 * Routing sederhana menggunakan query parameter pada url.
 * Untuk routing lebih dari 2 kasus disarankan untuk refactor ke switch case.
 */
if (isset($_GET['url']) && $_GET['url'] == 'about') {
    about();
} else {
    home();
}
