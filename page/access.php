<?php
/*Template Name: 交通アクセス */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<?php get_template_part('news/list-important'); ?>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">アクセス</h1>
  </div>
</section>

<section class="l-spacer -mgB-l">
  <div class="l-container--primary">
    <article class="l-contents">
      <div class="l-contents__block">
        <iframe class="p-access-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9792666866465!2d138.58612247700245!3d36.361281092316624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dd3a1cc80e7f1%3A0x98ae4e19525e1b0c!2z6Lu95LqV5rKi5pif6YeO44Ko44Oq44Ki!5e0!3m2!1sja!2sjp!4v1701934750676!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="p-access-map-btn">
        <a href="<?php echo home_url('/parking'); ?>" class="c-button-block -yellow -parking -more"><span>駐車場</span></a>
        <a href="https://www.google.com/maps?ll=36.361277,138.588697&z=17&t=m&hl=ja&gl=JP&mapclient=embed&cid=11001816810375748364" class="c-button-block -yellow -arrow -more" target="_blank"><span>Google Map</span></a>
      </div>
    </article>
  </div>
</section>

<section class="c-bg-yellow l-contents-block__wrap -conts">
  <div class="l-container--primary -pgT-s">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title">アクセス</h2>
    </article>
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

          <div class="c-tab-contents -active" id="tab-car"><!--車-->
            <div class="l-container--primary-s -l p-access-search">
              <p class="-mgB">カーナビ入力設定は、「長野県北佐久郡軽井沢町長倉2148」、<br>または「星野温泉 トンボの湯」で検索してください。</p>
            </div>
            <div class="-mgB-m">
              <h3 class="c-title-small">東京方面から（上信越自動車道）</h3>
              <div class="parent1">
                <div class="div2-1">碓氷軽井沢IC</div>
                <div class="div2-2"><span>約25分</span></div>
                <div class="div2-3">佐久平スマートIC<span>＊ETC専用<br>＊軽井沢町内渋滞時にお薦め</span></div>
                <div class="div2-4"><span>約20分</span></div>
                <div class="div2-5">星野エリア<br><a href="<?php echo home_url('/parking'); ?>" class="c-button-block -yellow -parking"><span>駐車場</span></a></div>
              </div>
            </div>
            <div class="-mgB-m">
              <h3 class="c-title-small">長野方面から（上信越自動車道）</h3>
              <div class="parent2">
                <div class="div2-1">碓氷軽井沢IC</div>
                <div class="div2-2"><span>約25分</span></div>
                <div class="div2-3">小諸IC</div>
                <div class="div2-4"><span>約30分</span></div>
                <div class="div2-5">星野エリア<br><a href="<?php echo home_url('/parking'); ?>" class="c-button-block -yellow -parking"><span>駐車場</span></a></div>
              </div>
            </div>
            <div class="l-footer-important-news -mgB-s">
              <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">冬用タイヤの装着について</h2>
                <p>冬期（おおむね12月中旬～3月中旬）に車で軽井沢にお越しの際は、冬用タイヤまたはタイヤチェーンをご準備ください。安全のため、ノーマルタイヤでの運転は控えていただくようお願いいたします。</p>
              </div>
            </div>
          </div><!--車-->

          <div class="c-tab-contents" id="tab-bus"><!--バス-->
            <div class="">
              <h2 class="c-title-small">軽井沢駅から西武観光バス（路線バス）で星野エリアまで約20分</h2>
            </div>
            <div class="-mgB">
              <div class="parent3">
                <div class="div3-1">JR軽井沢駅</div>
                <div class="div3-2"><span>約20分</span></div>
                <div class="div3-3">星野エリア<span>「星野温泉 トンボの湯」下車</span></div>
              </div>
            </div>
            <div class="l-contents-2column -mgB-l">
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small line2 area-sp"><span class="tag-b -black000">軽井沢駅 → 星野エリア</span></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/bus_01.svg">
                <a href="https://www.google.com/maps/place/36%C2%B020'35.5%22N+138%C2%B038'10.2%22E/@36.3431864,138.6361618,17z/data=!3m1!4b1!4m4!3m3!8m2!3d36.3431864!4d138.6361618?entry=ttu" target="_blank" class="noriba-map"><span class="c-button-arrow c-text-underline"></span>のりばをGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small line2"><span class="tag-b -black000 area-pc">軽井沢駅 → 星野エリア</span><br class="sp_b">JR軽井沢駅 北口1番のりば</h3>
                <p>一部のバスは行先が異なりますので、ご乗車の際、乗車口付近の行先表示板に「星野温泉トンボの湯」と表示されていることをお確かめください。</p>
                <ul class="a-list">
                  <?php while (have_rows('bus_jr')) : the_row();
                  while (have_rows('pdf')) : the_row();
                  ?>
                  <li><a href="<?php the_sub_field('pdf_file'); ?>" target="_blank" class="c-button-block -yellow -arrow -more"><span><?php the_sub_field('pdf_title'); ?></span></a></li>
                  <?php
                  endwhile;
                  endwhile; ?>
                  <!-- <li><a href="/wp-content/uploads/2024/10/4d8c7592f00c8bc429c04b80b6bf1753.pdf" target="_blank" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表（星野温泉 トンボの湯行き）11/1～</span></a></li> -->
                </ul>
                <div class="-bus-noriba">
                  <a href="https://www.google.com/maps/@36.3432916,138.636364,3a,75y,218.54h,75.24t/data=!3m6!1e1!3m4!1sVP-9Bhyi92-5U7U3Wx5GZA!2e0!7i16384!8i8192?authuser=0&entry=ttu" target="_blank">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon_bus_01.png"></i>
                    <div>バスのりば<span>ストリートビューで確認</span></div>
                  </a>
                </div>

              </div>
            </div>
            <div class="l-contents-2column -mgB">
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small line2 area-sp"><span class="tag-b -black000">星野エリア → 軽井沢駅</span></h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/bus_04.png">
                <a href="https://www.google.com/maps/place/36%C2%B021'40.1%22N+138%C2%B035'19.4%22E/@36.3611238,138.5887211,17z/data=!3m1!4b1!4m4!3m3!8m2!3d36.3611238!4d138.5887211?entry=ttu" target="_blank" class="noriba-map"><span class="c-button-arrow c-text-underline"></span>のりばをGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small line2"><span class="tag-b -black000 area-pc">星野エリア → 軽井沢駅</span><br class="sp_b">星野温泉 トンボの湯 バス停</h3>
                <ul class="a-list">
                  <?php while (have_rows('bus_onsen')) : the_row();
                  while (have_rows('pdf')) : the_row();
                  ?>
                  <li><a href="<?php the_sub_field('pdf_file'); ?>" target="_blank" class="c-button-block -yellow -arrow -more"><span><?php the_sub_field('pdf_title'); ?></span></a></li>
                  <?php
                  endwhile;
                  endwhile; ?>
                  <!-- <li><a href="/wp-content/uploads/2024/10/5938e3dd2aa27b92b3cf7cf31683c1fc.pdf" target="_blank" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表（軽井沢駅行き）11/1～</span></a></li> -->
                </ul>
                <div class="-bus-noriba">
                  <a href="https://www.google.com/maps/@36.3610828,138.5886665,3a,75y,67.12h,90t/data=!3m7!1e1!3m5!1saroWnukiwV4-SX41H_xa4w!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DaroWnukiwV4-SX41H_xa4w%26cb_client%3Dsearch.revgeo_and_fetch.gps%26w%3D96%26h%3D64%26yaw%3D67.11876%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192?entry=ttu" target="_blank">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon_bus_02.png"></i>
                    <div>バスのりば<span>ストリートビューで確認</span></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="l-contents-2column c-border-t l-spacer -medium -s -both">
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">宿泊者専用のバスのご案内</h3>
                <p>「星のや軽井沢」「ホテルブレストンコート」ご宿泊のお客様は専用バスをご利用ください。</p>
              </div>
              <div class="l-contents-2column__block -w-1_2 senyou_bus">
                <ul>
                  <li><a href="https://hoshinoresorts.com/ja/hotels/hoshinoyakaruizawa/access/" target="_blank" class="c-text-underline"><span>星のや軽井沢にご宿泊の方</span></a></li>
                  <li><a href="https://www.blestoncourt.com/access/shuttlebus/" target="_blank" class="c-text-underline"><span>ホテルブレストンコートにご来館の方</span></a></li>
                </ul>
              </div>
            </div>
            <div class="l-contents-2column c-border-t l-spacer -medium -s -both">
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">東京からの高速バス</h3>
                <p>西武観光バスの高速バス（千曲線）の一部が、中軽井沢駅、星野温泉 トンボの湯に停まります。</p>
              </div>
              <div class="l-contents-2column__block -w-1_2 senyou_bus">
                <ul>
                  <li><a href="https://www.seibubus.co.jp/sp/kousoku/line/" target="_blank" class="c-text-underline"><span>西武の高速バス</span></a></li>
                </ul>
              </div>
            </div>
            <div class="l-footer-important-news l-spacer -medium -both c-border-t">
              <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">コインロッカーについて</h2>
                <p>星野エリアにはコインロッカーはございません。軽井沢駅または中軽井沢駅のコインロッカーをご利用ください。</p>
              </div>
            </div>
          </div><!--バス-->

          <div class="c-tab-contents" id="tab-train"><!--電車・タクシー-->
            <div class=" -mgB-s">
              <div class="parent4">
                <div class="div4-1"><span>JR</span>軽井沢駅</div>
                <div class="div4-2">しなの鉄道<br>約5分</div>
                <div class="div4-3"><span>しなの鉄道</span>中軽井沢駅</div>
                <div class="div4-4">タクシー<br>約5分</div>
                <div class="div4-5">徒歩<br>約17分</div>
                <div class="div4-6">星野エリア</div>
                <div class="div4-7">タクシー<br>約15分</div>
              </div>
            </div>
            <div class="l-contents-2column -mgB-s">
              <div class="l-contents-2column__block -w-1_2  -fix">
                <h2 class="c-title-small"><span class="tag-b">電車</span>JR軽井沢駅から1駅の中軽井沢駅下車。</h2>
                <p>JR軽井沢駅から中軽井沢駅まではしなの鉄道をご利用ください。</p>
                <p><a href="https://www.shinanorailway.co.jp/rail-info/time-table/index.php" target="_blank"><span class="c-button-arrow c-button-outerlink c-text-underline">しなの鉄道時刻表</span></a></p>
              </div>
              <div class="l-contents-2column__block -w-1_2  -fix">
                <h2 class="c-title-small"><span class="tag-b">タクシー</span>近隣のタクシー会社に直接ご連絡ください。</h2>
                <p class="">ますや交通（TEL:<a href="tel:0267-45-5223">0267-45-5223</a>）<br>軽井沢観光タクシー（TEL:<a href="tel:0267-45-5408">0267-45-5408</a>）<br>浅間観光タクシー（TEL:<a href="tel:0267-45-5264">0267-45-5264</a>）</p>
              </div>
            </div>
            <div class="l-footer-important-news l-spacer -medium -both c-border-t">
              <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">コインロッカーについて</h2>
                <p>星野エリアにはコインロッカーはございません。軽井沢駅または中軽井沢駅のコインロッカーをご利用ください。</p>
              </div>
            </div>
          </div><!--電車・タクシー-->

          <div class="c-tab-contents" id="tab-bike"><!--バイク・自転車-->
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/access/parking.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/parking_sp.png">
                </picture>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <p><span class="c-text-icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-bicycle.svg" width="28" height="28" class="icon -bicycle">
                  駐輪場（無料）　P1、P2、P3
                </span></p>
                <p>P1：入場ゲートを通らずに、入場ゲートまたは出場ゲートの脇から入場してください。駐車場内を通過して、『村民食堂』横の駐輪場をご利用ください。<br>
                P2・P3：駐車場ゲートの手前にある駐輪場をご利用ください。</p>
                <p class="red_box -mgB-s">バイクは、駐車場ではなく駐輪場に停めてください。駐車場のゲートからは進入できません。</p>
              </div>
            </div>
          </div><!--バイク・自転車-->
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>