<?php

// Entry Point

require_once '../vendor/autoload.php';

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
    require_once '../src/about-us.php';
    exit;
}

function home()
{
    require_once '../src/home.php';
    exit;
}

if (isset($_GET['url'])  && $_GET['url'] == 'about') {
    about();
} else {
    home();
}
