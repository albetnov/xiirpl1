<?php

use Xii\Rpl1\Helper;
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Minimalista - New Amazing HTML5 Template</title>
  <link rel="stylesheet" href="<?= Helper::asset() ?>css/components.css" />
  <link rel="stylesheet" href="<?= Helper::asset() ?>css/icons.css" />
  <link rel="stylesheet" href="<?= Helper::asset() ?>css/responsee.css" />
  <link rel="stylesheet" href="<?= Helper::asset() ?>owl-carousel/owl.carousel.css" />
  <link rel="stylesheet" href="<?= Helper::asset() ?>owl-carousel/owl.theme.css" />
  <link rel="stylesheet" href="<?= Helper::asset() ?>css/lightcase.css" />
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="<?= Helper::asset() ?>css/template-style.css" />
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet" />
  <script type="text/javascript" src="<?= Helper::asset() ?>js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?= Helper::asset() ?>js/jquery-ui.min.js"></script>
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
            <img class="logo-before" src="<?= Helper::asset() ?><?= Helper::asset() ?>img/logo-dark.png" alt="" />
            <!-- Logo version after sticky nav -->
            <img class="logo-after" src="<?= Helper::asset() ?><?= Helper::asset() ?>img/logo-dark.png" alt="" />
          </a>
        </div>
        <div class="s-12 l-10">
          <div class="top-nav right">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="<?= Helper::baseUrl() ?>">Halaman Utama</a></li>
              <li><a href="<?= Helper::url('about') ?>">Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-white">
          <div class="line text-center">
            <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">
              XII RPL 1
            </h1>
            <p class="margin-bottom-0 text-size-16 text-dark">
              Otak kami <b>Global Mind</b>. Personality kami <b>High Tech</b>.
              Itu lah kami Generasi <b>Digital</b>.
            </p>
          </div>
        </header>
        <div class="background-white full-width">
          <h3 class="text-center text-dark text-l-size-60 text-l-size-headline text-thin text-line-height-1">
            Pinned
          </h3>
          <hr />
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay-content text-center padding-2x">
                <!-- <h3 class="text-white text-size-20 margin-bottom-10">
                      Reference Title
                    </h3>
                    <p class="text-white text-size-14 margin-bottom-20">
                      Duis autem vel eum iriure dolor in hendrerit in vulputate
                      velit esse molestie. Lorem ipsum dolor sit amet,
                      consectetuer adipiscing elit, sed diam nonummy nibh
                      euismod.
                    </p> -->
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-01.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-02.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-03.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-04.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five margin-bottom">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-05.jpg" alt="" />
            </a>
          </div>

          <h3 class="text-center text-dark text-l-size-60 text-l-size-headline text-thin text-line-height-1">
            Album
          </h3>
          <hr />

          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-06.jpg" alt="" />
            </a>
          </div>

          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-07.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-08.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-09.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-10.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-11.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-12.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-01.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-02.jpg" alt="" />
            </a>
          </div>
          <div class="s-12 m-6 l-five">
            <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h3 class="text-white text-size-20 margin-bottom-10">
                    Reference Title
                  </h3>
                  <p class="text-white text-size-14 margin-bottom-20">
                    Duis autem vel eum iriure dolor in hendrerit in vulputate
                    velit esse molestie. Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh
                    euismod.
                  </p>
                </div>
              </div>
              <img class="full-img" src="<?= Helper::asset() ?>img/portfolio/thumb-03.jpg" alt="" />
            </a>
          </div>
        </div>
      </article>
    </main>

    <!-- FOOTER -->
    <footer>
      <div class="background-dark padding text-center footer-social">
        <strong>Some Quote</strong>
      </div>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.8)" />

      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="text-center">
          <p class="text-size-12">
            Copyright 2019 by XII RPL 1 Team. All rights reserved.
          </p>
          <p class="text-size-12">
            <strong>
              THIS PHOTO IS PROTECTED BY CC0-1.0 LICENSE. DO NOT USE THIS
              PHOTO WITHOUT THE OWNER PERMISSION.
            </strong>
            <br />
            <strong>
              FOTO INI DILINDUNGI OLEH LISENSI CC0-1.0. JANGAN MENGGUNAKAN
              FOTO INI TANPA PERSETUJUAN DARI PEMILIK.
            </strong>
          </p>
        </div>
      </section>
    </footer>
  </div>
  <script type="text/javascript" src="<?= Helper::asset() ?>js/responsee.js"></script>
  <script type="text/javascript" src="<?= Helper::asset() ?>js/jquery.events.touch.js"></script>
  <script type="text/javascript" src="<?= Helper::asset() ?>owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="<?= Helper::asset() ?>js/template-scripts.js"></script>
</body>

</html>