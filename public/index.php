<?php

// Entry Point

require_once '../vendor/autoload.php';

use Xii\Rpl1\Helper;
use Xii\Rpl1\Parser;

function about()
{
    $data = Parser::parse([
        'Mieko Huang Vincent' => [
            'gambar' => 'team-01.jpg',
            'jabatan' => 'Ketua Kelas'
        ],
        'Riyadi Fajri' => [
            'gambar' => 'team-02.jpg',
            'jabatan' => 'Wakil Ketua Kelas'
        ]
    ]);
    return Helper::render('about-us', compact('data'));
}

function home()
{
    return Helper::render('home');
}

if (isset($_GET['url'])  && $_GET['url'] == 'about') {
    about();
} else {
    home();
}
