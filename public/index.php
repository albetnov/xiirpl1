<?php

// Entry Point (All logic required by views belongs to this file.)

require_once '../vendor/autoload.php';

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
    return Helper::render('home');
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
