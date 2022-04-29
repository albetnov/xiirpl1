<?php

use Latte\Runtime as LR;

/** source: C:\laragon\www\xiirpl1\src/about-us.latte */
final class Template15fbd5d501 extends Latte\Runtime\Template
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
		echo '<article>
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
          <a class="image-hover-zoom margin-bottom" href="#"><img src="img/juaraguys.jpeg" alt=""></a>
          <h2>Juara 1 Shawalat</h2>
          <p class="margin-bottom">
            Lomba tersebut berhasil dimenangkan oleh Sendy Wahyudi.
          </p>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <a class="image-hover-zoom margin-bottom" href="#"><img src="img/jepun.jpeg" alt=""></a>
          <h2>Jepun</h2>
          <p class="margin-bottom">
            Ini adalah foto saat kami sedang jalan-jalan di jepun... Kok kayak familiar yak?!
          </p>
        </div>
        <div class="s-12 m-12 l-4 margin-m-bottom">
          <a class="image-hover-zoom margin-bottom" href="#"><img src="img/ujianmoment.jpeg" alt=""></a>
          <h2>Moment Ujian</h2>
          <p class="margin-bottom">
            Ini adalah moment di mana kami semua melakukan overclock pada otak.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section-top-padding background-white">
    <div class="line">
      <h2 class="text-s-size-40 text-size-50 text-line-height-1 margin-bottom-10 text-thin text-center">
        <span class="text-dark">-</span>Struktur Kelas
        <span class="text-dark">-</span>
      </h2>
      <p class="margin-bottom-50 text-center">
        Yuk Liat Siapa Aja Dibalik XII RPL 1!
      </p>
      <div class="carousel-blocks owl-carousel">
        ';
		echo $data /* line 52 */;
		echo '
      </div>
    </div>
  </section>
</article>
';
	}

}
