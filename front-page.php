<?php
/**
 * トップページのテンプレート
 */
get_header(); ?>

<div id="key_wrap">
  <div id="keyVisual">
    <div class="videoBox">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_pc.mp4"></video>
      <video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_sp.mp4"></video>
      <div class="p-home__kv__logo">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lead.svg" alt="森が居場所になる一日"></h1>
      </div>
      <div class="p-home__kv__news">
        <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
        <div class="endress">
          <div class="loop_wrap">
            <?php
            $args = array (
                'post_type' => 'news',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news_cat',
                        'field' => 'slug',
                        'terms' => 'important-news',
                        'operator' => 'IN'
                    ),
                )
            );
            $news = new WP_Query( $args );
            if ($news -> have_posts()):
            ?>
            <?php while ($news -> have_posts()): $news -> the_post(); ?>
            <div><a href="<?php the_permalink();?>"><span><?php the_time('Y.m.d') ?></span><?php the_title(); ?></a>　</div>
            <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.sp-video {
  display: block;
}
.pc-video {
  display: none;
}
@media screen and (min-width: 768px) {
  .sp-video {
    display: none;
  }
  .pc-video {
    display: block;
  }
}
</style>
<script>
const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

let pcVideoBool = false;
let spVideoBool = false;

if (768 <= window.innerWidth) {
  //画面幅768pxより大きければpc版読み込み
  videoPc.src = videPcSrc;
  pcVideoBool = true;
} else {
  //それ以外の場合sp版読み込み
  videoSp.src = videoSpSrc;
  spVideoBool = true;
}
window.addEventListener("resize", () => {
  //画面をresize時
  if (768 <= window.innerWidth && !pcVideoBool) {
    //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
    videoPc.src = videPcSrc;
    pcVideoBool = true;
  }

  if (768 > window.innerWidth && !spVideoBool) {
    //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
    videoSp.src = videoSpSrc;
    spVideoBool = true;
  }
});
</script>

<!-- <section class="l-spacer p-home__kv">
  <div class="l-container--primary">
    <div class="p-home__kv__logo">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lead.svg" alt="森が居場所になる一日"></h1>
    </div>
    <div class="p-home__kv__news">
      <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
      <p><a href="#">重要なお知らせが入ります。</a></p>
    </div>
  </div>
</section> -->

<section class="p-home__lead l-container--primary">
  <div class="p-home__lead-head">
    <h2>人と自然が文化を織りなす、<br>この森とひとつになる。</h2>
  </div>
  <div class="p-home__lead-body">
    <div class="p-home__lead-ph">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop src="<?php echo get_template_directory_uri(); ?>/assets/img/video/top_lead.mp4"></video>
    </div>
    <!-- <figure class="p-home__lead-ph">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lead.jpg" alt="">
    </figure> -->
    <div class="p-home__lead-txt">
      <p>木々の隙間から<br>光がこぼれて、<br>川のせせらぎに<br>鳥の声が重なる。</p>
      <p>浅間山の麓で、大切に受け継がれてきた森。<br>かつてここにいた人も、今ここにいる私たちも、<br>同じ情景で、つながっている。</p>
      <p>森が、居場所になる一日。<br>軽井沢星野エリア</p>
    </div>
  </div>
</section>




<section class="accordion_area">
  <div class="-block -block1">
    <div class="-header -open">
      <div>自然との共生</div>
    </div>
    <div class="-body">

        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <div>
            <p>星野エリアは、星野温泉旅館が開業した大正時代から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約８０種類の野鳥が見られ、ムササビやツキノワグマ、ニホンカモシカなど、多くの野生動植物が生息しています。<br>浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。<br>ずっと変わらない森の情景は、ここに訪れる人たちを、優しく包み込みます。</p>
          </div>
        </div>

    </div>
  </div>
  <div class="-block -block2">
    <div class="-header">
      <div>今に続く歴史の足跡</div>
    </div>
    <div class="-body">

        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion02.jpg" alt="">
          </figure>
          <div>
            <p>星野エリアの歴史は、大正時代まで遡ります。<br>1915年（大正4年）に開湯した星野温泉を起点に、北原白秋や島崎藤村など当時の文人たちが集い、文化的エポックが切り拓かれてきました。<br>源泉は今も滔々と湧き続け、森の小道には文人の言葉が石碑として残っています。</p>
            <p>昭和中期には、日本野鳥の会創立者である中西悟堂が滞在するようになります。<br>彼は軽井沢の森が、世界的な野鳥の宝庫であると指摘。<br>やがて、星野エリアに隣接する国有林は、国設「軽井沢野鳥の森」に指定されました。<br>探鳥会と呼ばれたガイド付きツアーは、ピッキオのエコツーリズムへと繋がっています。</p>
          </div>
        </div>

    </div>
  </div>
  <div class="-block -block3">
    <div class="-header">
      <div>森に溶け込むひととき</div>
    </div>
    <div class="-body">

        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <div>
            <p>この場所に集う人々は、軽井沢を共に楽しむ友人です。<br>同じ情景を通じて、ゆるやかにつながっています。<br>何をするのもしないのも自由。喧騒から離れて、心の赴くままに。<br>森の一員となり、思い思いに一日を過ごすことで、大切なことを思い出せるかもしれません。<br>私たちは、いつでも「おかえりなさい」でお迎えいたします。</p>
          </div>
        </div>

    </div>
  </div>
</section>





<!-- <section class="accordion_area">
  <div class="-block">
    <div class="accordion_header open">
      <div>自然との共生</div>
    </div>
    <div class="accordion_inner fade">
      <div class="-fade">
        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <div>
            <p>星野エリアは、星野温泉旅館が開業した大正時代から、豊かな自然と共生してきました。<br>広大な野鳥の森には、年間約８０種類の野鳥が見られ、ムササビやツキノワグマ、ニホンカモシカなど、多くの野生動植物が生息しています。<br>浅間山の雪解け水は湯川となり、心地よいせせらぎがエリア全体に響いています。<br>ずっと変わらない森の情景は、ここに訪れる人たちを、優しく包み込みます。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="-block -2nd">
    <div class="accordion_header">
      <div>今に続く歴史の足跡</div>
    </div>
    <div class="accordion_inner">
      <div class="-fade">
        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion02.jpg" alt="">
          </figure>
          <div>
            <p>星野エリアの歴史は、大正時代まで遡ります。<br>1915年（大正4年）に開湯した星野温泉を起点に、北原白秋や島崎藤村など当時の文人たちが集い、文化的エポックが切り拓かれてきました。<br>源泉は今も滔々と湧き続け、森の小道には文人の言葉が石碑として残っています。</p>
            <p>昭和中期には、日本野鳥の会創立者である中西悟堂が滞在するようになります。<br>彼は軽井沢の森が、世界的な野鳥の宝庫であると指摘。<br>やがて、星野エリアに隣接する国有林は、国設「軽井沢野鳥の森」に指定されました。<br>探鳥会と呼ばれたガイド付きツアーは、ピッキオのエコツーリズムへと繋がっています。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="-block">
    <div class="accordion_header">
      <div>森に溶け込むひととき</div>
    </div>
    <div class="accordion_inner">
      <div class="-fade">
        <div class="-box">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/accordion01.jpg" alt="">
          </figure>
          <div>
            <p>この場所に集う人々は、軽井沢を共に楽しむ友人です。<br>同じ情景を通じて、ゆるやかにつながっています。<br>何をするのもしないのも自由。喧騒から離れて、心の赴くままに。<br>森の一員となり、思い思いに一日を過ごすことで、大切なことを思い出せるかもしれません。<br>私たちは、いつでも「おかえりなさい」でお迎えいたします。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php get_footer(); ?>


