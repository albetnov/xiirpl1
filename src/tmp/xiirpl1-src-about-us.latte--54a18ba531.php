<?php

use Latte\Runtime as LR;

/** source: F:\laragon\www\xiirpl1\src/about-us.latte */
final class Template54a18ba531 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		echo '
    ';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = 'layout/main.latte';
		
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Tentang Kami';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '  <article>
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
		echo $data /* line 155 */;
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
';
	}

}
