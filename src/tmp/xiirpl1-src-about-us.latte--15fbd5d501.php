<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\xiirpl1\src/about-us.latte */
final class Template15fbd5d501 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minimalista - New Amazing HTML5 Template</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <link rel="stylesheet" href="css/lightcase.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
            <img class="logo-before" src="img/logo-dark.png" alt="">
            <!-- Logo version after sticky nav -->
            <img class="logo-after" src="img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="s-12 l-10">
          <div class="top-nav right">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.html">Home</a></li>
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-white">
          <div class="line text-center">
            <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">
              XII RPL 1
            </h1>
            <p class="margin-bottom-0 text-size-16 text-dark">
              Siapa sih XII RPL 1 itu?
            </p>
          </div>
        </header>
        <section class="section-top-padding background-white">
          <div class="line">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-03.jpg" alt=""></a>
                <h2>Soluta esse molestie</h2>
                <p class="margin-bottom">
                  Duis autem vel eum iriure dolor in hendrerit in vulputate
                  velit esse molestie consequat. Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit, sed diam nonummy nibh euismod.
                </p>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-04.jpg" alt=""></a>
                <h2>Dolore feugiat nulla</h2>
                <p class="margin-bottom">
                  Iriure dolor in hendrerit duis autem vel eum in vulputate
                  velit esse molestie vel illum. Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit, sed diam nonummy nibh euismod.
                </p>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <a class="image-hover-zoom margin-bottom" href="/"><img src="img/img-05.jpg" alt=""></a>
                <h2>Consequat vel illum</h2>
                <p class="margin-bottom">
                  Hendrerit in vulputate velit esse molestie consequat, vel
                  illum dolore eu feugiat consequat. Lorem ipsum dolor sit
                  amet, consectetuer adipiscing elit, sed diam nonummy nibh
                  euismod.
                </p>
              </div>
            </div>
          </div>
        </section>
        <section class="section-top-padding background-white">
          <div class="line">
            <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center">
              <span class="text-dark">-</span>Anggota Kelas
              <span class="text-dark">-</span>
            </h2>
            <p class="margin-bottom-50 text-center">
              Daftar Anggota Kelas Kami
            </p>
            <div class="carousel-blocks owl-carousel">
              <!-- <div class="item">
                  <div class="padding">
                    <img
                      class="full-img border-image border-primary"
                      src="img/team-01.jpg"
                      alt=""
                      title="Team"
                    />
                    <h3
                      class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                      Nur Cahaya
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                      Wali Kelas
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="padding">
                    <img
                      class="full-img border-image border-primary"
                      src="img/team-02.jpg"
                      alt=""
                      title="Team"
                    />
                    <h3
                      class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                      Mieko Huang Vincent
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                      Ketua Kelas
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="padding">
                    <img
                      class="full-img border-image border-primary"
                      src="img/team-03.jpg"
                      alt=""
                      title="Team"
                    />
                    <h3
                      class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                      Riyadi Fajri
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                      Wakil Ketua Kelas
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="padding">
                    <img
                      class="full-img border-image border-primary"
                      src="img/team-04.jpg"
                      alt=""
                      title="Team"
                    />
                    <h3
                      class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                      Ricky Roy Nardson
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                      Tukang Nagih
                    </p>
                  </div>
                </div>
                <div class="item">
                  <div class="padding">
                    <img
                      class="full-img border-image border-primary"
                      src="img/team-05.jpg"
                      alt=""
                      title="Team"
                    />
                    <h3
                      class="text-s-size-16 text-size-20 text-line-height-1 text-dark margin-top-20 margin-bottom-0"
                    >
                      Melissa Style
                    </h3>
                    <p class="text-size-14 text-dark margin-bottom-10">
                      Graphic Designer
                    </p>
                    <a target="_blank" href="https://www.twitter.com"
                      ><i class="icon-twitter_circle text-size-20"></i
                    ></a>
                    <a target="_blank" href="https://www.google.com"
                      ><i class="icon-google_plus_circle text-size-20"></i
                    ></a>
                  </div>
                </div> -->
              ';
		echo $data /* line 202 */;
		echo '
            </div>
          </div>
        </section>
        <section class="section background-white">
          <div class="line">
            <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center">
              <span class="text-dark">-</span> Prestasi Kami
              <span class="text-dark">-</span>
            </h2>
            <p class="margin-bottom-50 text-center">
              Kami berhasil menjuarai setidaknya:
            </p>
            <div class="margin2x">
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-5.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-2.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-3.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-4.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-5.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-bottom-40" src="img/logo-1.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-m-bottom-40" src="img/logo-2.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-m-bottom-40" src="img/logo-3.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-m-bottom-40" src="img/logo-4.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-m-bottom-40" src="img/logo-1.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img class="margin-m-bottom-40" src="img/logo-3.png" alt="">
              </div>
              <div class="s-6 m-4 l-2">
                <img src="img/logo-4.png" alt="">
              </div>
            </div>
          </div>
        </section>
      </article>
    </main>

    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-dark padding text-center footer-social">
        <a class="margin-right-10" target="_blank" href="https://www.facebook.com"><i class="icon-facebook_circle text-size-30"></i>
          <span class="text-strong text-white hide-s hide-m">FACEBOOK</span></a>
        <a class="margin-right-10" target="_blank" href="https://www.twitter.com"><i class="icon-twitter_circle text-size-30"></i>
          <span class="text-strong text-white hide-s hide-m">TWITTER</span></a>
        <a class="margin-right-10" target="_blank" href="https://www.instagram.com"><i class="icon-instagram_circle text-size-30"></i>
          <span class="text-strong text-white hide-s hide-m">INSTAGRAM</span></a>
        <a target="_blank" href="https://www.linkedin.com"><i class="icon-linked_in_circle text-size-30"></i>
          <span class="text-strong text-white hide-s hide-m">LINKEDIN</span></a>
      </div>

      <!-- Main Footer -->
      <section class="section-small-padding text-center background-dark full-width">
        <div class="line">
          <div class="margin">
            <!-- Collumn 1 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-30">
              <h3 class="text-size-16">Company Address</h3>
              <p class="text-size-14">
                Responsive Street 7<br>
                London - United Kingdom<br>
                Europe
              </p>
            </div>
            <!-- Collumn 2 -->
            <div class="s-12 m-12 l-4 margin-m-bottom-30">
              <h3 class="text-size-16">E-mail</h3>
              <p class="text-size-14">
                contact@sampledomain.com<br>
                office@sampledomain.com
              </p>
            </div>
            <!-- Collumn 3 -->
            <div class="s-12 m-12 l-4">
              <h3 class="text-size-16">Phone Numbers</h3>
              <p class="text-size-14">
                0800 4521 800 50<br>
                0450 5896 625 16<br>
                0798 6546 465 15
              </p>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 0, 0, 0.8)">

      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="text-center">
          <p class="text-size-12">
            Copyright 2019, Vision Design - graphic zoo
          </p>
          <p class="text-size-12">
            All images is purchased from Bigstock. Do not use the images in
            your website.
          </p>
        </div>
      </section>
    </footer>
  </div>
  <script type="text/javascript" src="js/responsee.js"></script>
  <script type="text/javascript" src="js/jquery.events.touch.js"></script>
  <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
  <script type="text/javascript" src="js/template-scripts.js"></script>
</body>

</html>';
		return get_defined_vars();
	}

}
