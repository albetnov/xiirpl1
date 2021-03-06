<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\xiirpl1\src\layout\main.latte */
final class Templatec84b45590f extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 7 */;
		echo '</title>
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 8 */;
		echo 'css/components.css">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 9 */;
		echo 'css/icons.css">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 10 */;
		echo 'css/responsee.css">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 11 */;
		echo 'owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 12 */;
		echo 'owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 13 */;
		echo 'css/lightcase.css">
  <!-- CUSTOM STYLE -->
  <link rel="icon" type="image/x-icon" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 15 */;
		echo '/img/LogoRPL1.ico">
  <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 16 */;
		echo 'css/template-style.css">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 18 */;
		echo 'js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 19 */;
		echo 'js/jquery-ui.min.js"></script>
</head>

<body class="size-1140">
  <div id="page-wrapper">
    <!-- HEADER -->
    <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.html" class="logo">
            <!-- Logo version before sticky nav -->
            <img class="logo-before" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 31 */;
		echo 'img/LogoRPL1WithTextdark.png" alt="">
            <!-- Logo version after sticky nav -->
            <img class="logo-after" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 33 */;
		echo 'img/LogoRPL1WithTextdark.png" alt="">
          </a>
        </div>
        <div class="s-12 l-10">
          <div class="top-nav right">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::baseUrl())) /* line 40 */;
		echo '">Halaman Utama</a></li>
              <li><a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::url('about'))) /* line 41 */;
		echo '">Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      ';
		$this->renderBlock('content', get_defined_vars()) /* line 51 */;
		echo '
    </main>

    <!-- FOOTER -->
    <footer style="margin-top:1em">
      <div class="background-dark padding text-center footer-social">
        <strong>';
		echo LR\Filters::escapeHtmlText($quotes) /* line 57 */;
		echo '</strong>
      </div>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.8)">

      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="text-center">
          <p class="text-size-12">
            Copyright ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 65 */;
		echo ' by XII RPL 1 Team. All rights reserved.
          </p>
          <p class="text-size-12">
            <strong>
              THIS PHOTO IS PROTECTED BY CC0-1.0 LICENSE. DO NOT USE THIS
              PHOTO WITHOUT THE OWNER PERMISSION.
            </strong>
            <br>
            <strong>
              FOTO INI DILINDUNGI OLEH LISENSI CC0-1.0. JANGAN MENGGUNAKAN
              FOTO INI TANPA PERSETUJUAN DARI PEMILIK.
            </strong>
            <br>
            Edit this page on <b><a href="https://github.com/albetnov/xiirpl1" target="_blank">Github</a></b>
          </p>
        </div>
      </section>
    </footer>
  </div>
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 84 */;
		echo 'js/responsee.js"></script>
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 85 */;
		echo 'js/jquery.events.touch.js"></script>
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 86 */;
		echo 'owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 87 */;
		echo 'js/template-scripts.js"></script>
</body>

</html>';
		return get_defined_vars();
	}


	/** {block title} on line 7 */
	public function blockTitle(array $??_args): void
	{
		
	}


	/** {block content} on line 51 */
	public function blockContent(array $??_args): void
	{
		
	}

}
