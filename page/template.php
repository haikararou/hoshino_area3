<?php
/*Template Name: テンプレート */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">タイトル大大　レイアウト</h1>
    <p>リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文60</p>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title">見出し大縦</h2>
      <div class="l-contents--left-title__conts">
        <h3 class="c-title-medium">コンテンツ見出し中</h3>
        <div class="l-contents-2column">
          <div class="l-contents-2column__block -w-1_2--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout1.jpg">
          </div>
          <div class="l-contents-2column__block -w-1_2--right">
            <h3 class="c-title-small">コンテンツ見出し小</h3>
            <p>テキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストリンクテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキストエリアテキスト</p>
            <p>
              <a href="#"><span class="c-button-arrow c-text-underline">リンク</span></a><br>
              <a href="#"><span class="c-button-arrow c-button-outerlink c-text-underline">外部サイトへ</span></a>
            </p>
            <p>
              <a href="#" class="c-button-block -lightyellow -arrow"><span>ボタンリンク</span></a>
            </p>
          </div>
          
        </div>
      </div>
    </article>
  </div>
</section>
    
<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title">見出し大縦</h2>
      <div class="l-contents--left-title__conts">
        <ul class="p-post-list">
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article2.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">カフェ ハングリースポット</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のおすすめドリンク</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article3.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ピッキオ</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">小学生の為の日帰りサマーキャンプ「ピッキオこども冒険クラブ」</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
        </ul>
        <div class="l-spacer -em3 p-post-list__item__more">
          <p><a href="#" class="c-button-block -lightyellow -arrow -more"><span>もっと見る</span></a></p>
        </div>
      </div>
    </article>
  </div>
</section>


<section class="l-spacer -medium -both c-border-t">
  <div class="l-container--primary">
      <h2 class="c-title-large">見出し大縦</h2>
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-2_3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout2.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_3">
        <div class="l-spacer -small -both c-border-t c-border-b">
          <h3 class="c-title-small c-title-icon c-text-gold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock-gold.svg">本日の営業時間</h3>
          <dl class="c-list-time">
            <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
            <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
          </dl>
        </div>
        <div class="l-spacer -em2">
          <p>ソムリエとフレンチシェフのレストラン＆デリとワインショップ。従来のデリが持つ手軽さと、一流レストランにもひけをとらない美味しさ・高級さを巧くミックスし、ちょっと贅沢をしたい日やお客様をおもてなしする日のテーブルに彩りを添えるのに強い味方になれる食とワインを取り揃えています。</p>
        </div>
      </div>
    </article>
    
    <div class="l-spacer -medium">
      <article class="l-contents-2column -pc-rl">
        <div class="l-contents-2column__block -w-1_2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout3.jpg">
        </div>
        <div class="l-contents-2column__block -w-1_2 c-block-conts-center">
          <div class="c-block-conts-center__inner">
            <h3 class="c-title-medium">源泉かけ流し</h3>
            <p>トンボの湯の全ての浴槽は、源泉かけ流しです。循環・加水をせず、毎日換水しています。湯舟には星野温泉の源泉が良質なまま溢れ、その軟らかいお湯は「美肌の湯」といわれています。星野リゾートの中で唯一飲泉ができるのも、新鮮な温泉である証。「飲む温泉」として、蛇口から飲むこともできます。</p>
          </div>
        </div>
      </article>
    </div>
    
    <div class="l-spacer -medium">
      <article class="l-contents-2column">
        <div class="l-contents-2column__block -w-1_2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout4.jpg">
        </div>
        <div class="l-contents-2column__block -w-1_2 c-block-conts-center">
          <div class="c-block-conts-center__inner">
            <h3 class="c-title-medium">自然に溶け込む環境</h3>
            <p>内湯と露天は、樹林に向かって池を囲うように配置されています。池は移りゆく自然の景色を映し出し、広い露天風呂とつながるような一体感を生んでいます。源泉の掛け流される音、葉擦れに感じる風、湯面に反射する光…自然の存在を、開放的に感じられる空間です。<br>
    高い天井を持つ広い内湯も、外の景色とつながっています。深い湯船で肩までゆったりと浸かり、自然と溶け合うようにおくつろぎいただけます。</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary-scroll">
    <div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
      <div class="swiper-wrapper">
        <div class="swiper-slide p-gallery-slider__slide">
          <img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery1.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
        <div class="swiper-slide p-gallery-slider__slide">
          <img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery2.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
        <div class="swiper-slide p-gallery-slider__slide">
          <img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery3.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
        <div class="swiper-slide p-gallery-slider__slide">
          <img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery1.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
        <div class="swiper-slide p-gallery-slider__slide">
          <img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery2.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
        <div class="swiper-slide p-gallery-slider__slide">
          <img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery3.jpg">
          <p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
  <div class="l-container--primary">
    <article class="l-contents--left-title -ribbon">
      <div class="l-contents--left-title__title">
        <h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon">定番イチ推しベスト３</h2>
      </div>
      <div class="l-contents--left-title__conts">
        <section class="l-contents-2column -pc-rl">
          <div class="l-contents-2column__block -w-1_2--right2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/food1.jpg">
          </div>
          <div class="l-contents-2column__block -w-1_2--left2">
            <h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">Best 1</span>鶏の白レバーペースト</h3>
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
        </section>
        <div class="l-spacer -medium">
          <section class="l-contents-2column -pc-rl">
            <div class="l-contents-2column__block -w-1_2--right2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/food2.jpg">
            </div>
            <div class="l-contents-2column__block -w-1_2--left2">
              <h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">Best 2</span>鶏の白レバーペースト</h3>
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </section>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="c-bg-yellow l-contents-block__wrap">
  <div class="l-contents-block c-bg-white">
    <div class="l-contents-block__inner">
      <div class="l-container--primary">
        <div class="l-contents-2column">
          <div class="l-contents-2column__block -w-1_2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
          </div>
          <div class="l-contents-2column__block -w-1_2">
            <h2 class="c-title-large">タイトル</h2>
            <p>リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文60</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="l-contents-block c-bg-white">
    <div class="l-contents-block__inner">
      <div class="l-container--primary">

        <article class="l-contents--left-title">
          <h2 class="c-title-large -vertical l-contents--left-title__title">タイトル</h2>

          <div class="l-contents-2column">
            <div class="l-contents-2column__block -w-1_2--left">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
            </div>
            <div class="l-contents-2column__block -w-1_2--right">
              <h2 class="c-title-large">タイトル</h2>
              <p>リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文リード文60</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
  
  
  
  <div class="l-contents-block">
    <article class="js-tab-parent">
      <div class="c-tab-control">
        <button class="c-tab-control__button js-tab-button -active" data-target="tab-car">車</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-bus">バス</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-train">電車<span class="u-sp-hidden">・</span><br class="u-sp-visible">タクシー</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-bike">バイク<span class="u-sp-hidden">・</span><br class="u-sp-visible">自転車</button>
      </div>
      <div class="l-contents-block__inner c-bg-white">

        <div class="l-container--primary">
          <div class="c-tab-contents -active" id="tab-car">
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h2 class="c-title-large">タブ：車</h2>
                <p>タブのIDを指定してアンカリンクで遷移できるようにしてあります。<br>
                <a href="<?php echo home_url(); ?>/template#tab-bus" target="_blank"><span class="c-text-underline">バスのタブ</span></a><br>
                <a href="<?php echo home_url(); ?>/template#tab-train" target="_blank"><span class="c-text-underline">電車のタブ</span></a><br>
                <a href="<?php echo home_url(); ?>/template#tab-bike" target="_blank"><span class="c-text-underline">バイクのタブ</span></a></p>
              </div>
            </div>
          </div>
          <div class="c-tab-contents" id="tab-bus">
            バスの内容
          </div>
          <div class="c-tab-contents" id="tab-train">
            電車の内容
          </div>
          <div class="c-tab-contents" id="tab-bike">
            バイクの内容
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <h2 class="c-title-large -vertical l-contents--left-title__title">よくある質問</h2>
      <div class="l-contents--left-title__conts">

        <dl class="p-faq-list">
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">コインロッカーはありますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <p>
                <a href="#" class="c-button-arrow c-text-underline"><span>詳細はこちら</span></a><br>
              </p>
            </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">犬と一緒に利用できますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">犬と一緒に利用できますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              </dt>
          </div>
        </dl>
      </div>
    </article>
  </div>
</section>


<section class="l-spacer -medium -both c-border-t">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <div class="l-contents--left-title__title">
        <h2 class="c-title-large -vertical">ショップリスト</h2>
        
        <ul class="c-list-std">
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-restaurant.svg" width="40" height="40" class="icon">レストラン</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-cafe.svg" width="40" height="40" class="icon">カフェ</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-shop.svg" width="40" height="40" class="icon">ショップ</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-pet.svg" width="40" height="40" class="icon">ペット同伴可</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-pet-outside.svg" width="40" height="40" class="icon">テラス席ペット可</span>
          </li>
        </ul>
        <div class="l-spacer -em2">
          <a href="" class="c-button-block -yellow -icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg" width="16" height="16">営業時間一覧</a>
        </div>
      </div>
      <div class="l-contents--left-title__conts">

        <ul class="p-restaurant-list">
          <li>
            <div class="p-restaurant-card">
              <div class="p-restaurant-card__wi-fi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant1.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">イタリアンレストラン</span>イル・ソーニョ</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo1.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant2.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">カフェ・スパイス・雑貨</span>サジロカフェ リンデン</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo2.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <div class="p-restaurant-card__wi-fi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant1.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">イタリアンレストラン</span>イル・ソーニョ</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo1.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant2.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">カフェ・スパイス・雑貨</span>サジロカフェ リンデン</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo2.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both c-border-t">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title">リスト</h2>
      <div class="l-contents--left-title__conts">
        
        <div class="l-contents-2column">
          <div class="l-contents-2column__block -w-1_2--left">

            <h3 class="c-title-medium">UL,OLリスト</h3>
            <ul class="c-list-dot">
              <li class="c-list-dot__item">リストリストリストリストリストリスト</li>
              <li class="c-list-dot__item">リストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
              <li class="c-list-dot__item">リストリストリストリストリストリスト</li>
            </ul>

            <ol class="c-list-num l-spacer -em2">
              <li class="c-list-num__item">番号リストリストリストリストリストリスト</li>
              <li class="c-list-num__item">番号リストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
              <li class="c-list-num__item">番号リストリストリストリストリストリスト</li>
            </ol>
          </div>

          <div class="l-contents-2column__block -w-1_2--right">
            <h3 class="c-title-medium">DLリスト</h3>
            <dl class="c-list-dl">
              <dt>見出し</dt>
              <dd>テキストテキストテキストテキストテキスト</dd>

              <dt>見出し</dt>
              <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>

              <dt>見出し見出し見出し見出し見出し見出し見出し見出し</dt>
              <dd>テキストテキストテキストテキストテキスト</dd>

              <dt>見出し</dt>
              <dd>テキストテキストテキストテキストテキスト</dd>
            </dl>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>