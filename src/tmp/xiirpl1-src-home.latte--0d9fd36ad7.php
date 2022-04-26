<?php

use Latte\Runtime as LR;

/** source: E:\laragon\www\xiirpl1\src/home.latte */
final class Template0d9fd36ad7 extends Latte\Runtime\Template
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
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['album' => '132'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = 'layout/main.latte';
		
	}


	/** {block title} on line 2 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Home';
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '  <article>
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
      <hr>
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
          <img class="full-img" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 34 */;
		echo 'img/portfolio/thumb-01.jpg" alt="">
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
          <img class="full-img" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 69 */;
		echo 'img/portfolio/thumb-02.jpg" alt="">
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
          <img class="full-img" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 87 */;
		echo 'img/portfolio/thumb-03.jpg" alt="">
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
          <img class="full-img" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 105 */;
		echo 'img/portfolio/thumb-04.jpg" alt="">
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
          <img class="full-img" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 123 */;
		echo 'img/portfolio/thumb-05.jpg" alt="">
        </a>
      </div>

      <h3 class="text-center text-dark text-l-size-60 text-l-size-headline text-thin text-line-height-1">
        Album
      </h3>
      <hr>

';
		$iterations = 0;
		foreach ($albums as $album) /* line 132 */ {
			echo '        <div class="s-12 m-6 l-five">
        <a class="image-with-hover-overlay image-hover-zoom" href="/" title="Portfolio Image">
            <img class="full-img" src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(Xii\Rpl1\Helper::asset())) /* line 135 */;
			echo 'img/album/';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($album)) /* line 135 */;
			echo '" alt="">
            </a>
        </div>
';
			$iterations++;
		}
		echo '    </div>
  </article>
';
	}

}
