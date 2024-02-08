<?php
/*Template Name: 交通アクセス */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -pagetitile">
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
        <a href="<?php echo home_url('/parking'); ?>" class="c-button-block -yellow -parking -more"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i><span>駐車場</span></a>
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
              <p class="-mgB">カーナビ入力設定は、「長野県北佐久郡軽井沢町長倉2148」、<br>もしくは「星野温泉トンボの湯」で検索ください。</p>
            </div>
            <div class="-mgB-m">
              <h3 class="c-title-small">東京方面からお越しのお客様</h3>
              <div class="parent1">
                <div class="div1-1"><span>上信越自動車道</span>碓氷軽井沢IC</div>
                <div class="div1-2"><span>約25分</span></div>
                <div class="div1-3"><span>上信越自動車道</span>佐久IC</div>
                <div class="div1-4"><span>平均約20分</span></div>
                <div class="div1-5"><span>上信越自動車道</span>佐久平スマートIC（ETC専用）</div>
                <div class="div1-6"><span>約20分</span></div>
                <div class="div1-7">軽井沢星野エリア<br><a href="" class="c-button-block -yellow -parking"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i><span>駐車場</span></a></div>
              </div>
            </div>
            <div class="-mgB-m">
              <h3 class="c-title-small">長野方面からお越しのお客様</h3>
              <div class="parent2">
                <div class="div2-1"><span>上信越自動車道</span>碓氷軽井沢IC</div>
                <div class="div2-2"><span>約25分</span></div>
                <div class="div2-3"><span>上信越自動車道</span>小諸IC</div>
                <div class="div2-4"><span>約30分</span></div>
                <div class="div2-5">軽井沢星野エリア<br><a href="" class="c-button-block -yellow -parking"><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i><span>駐車場</span></a></div>
              </div>
            </div>
            <div class="l-footer-important-news -mgB-s">
              <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">冬用タイヤの装着について</h2>
                <p>冬期（おおむね12月中旬～3月中旬）に車で軽井沢にお越しの際は、冬用タイヤまたはタイヤチェーンをご準備ください。最高気温が零下となる日も多く、少量の降雪や融雪でも路面が凍結します。安全のため、ノーマルタイヤでの運転は控えていただくようお願いいたします。</p>
              </div>
            </div>
          </div><!--車-->

          <div class="c-tab-contents" id="tab-bus"><!--バス-->
            <div class="">
              <h2 class="c-title-small"><span class="tag-b">バス</span>軽井沢駅から西武観光バス（路線バス）で星野エリアまで約20分</h2>
            </div>
            <div class="-mgB">
              <div class="parent3">
                <div class="div3-1">JR軽井沢駅<span>北口1番のりば</span></div>
                <div class="div3-2"><span>約20分</span></div>
                <div class="div3-3">軽井沢星野エリア<span>「星野温泉トンボの湯」下車</span></div>
              </div>
            </div>
            <div class="l-contents-2column -mgB-l">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/bus_01.svg">
                <a href="https://www.google.com/maps/place/36%C2%B020'35.5%22N+138%C2%B038'10.2%22E/@36.3431864,138.6361618,17z/data=!3m1!4b1!4m4!3m3!8m2!3d36.3431864!4d138.6361618?entry=ttu" target="_blank" class="noriba-map"><span class="c-button-arrow c-text-underline"></span>のりばをGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">JR軽井沢駅 北口1番のりば</h3>
                <p>1番のりばから発車するバスは全て「星野温泉トンボの湯」に停車します。</p>
                <div class="a-list">
                  <a href="https://www.hoshino-area.jp/contents/uploads/814d3d57541d55ddef37602a5693dd27.pdf" target="_blank" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表（星野温泉トンボの湯行き）</span></a>
                </div>
                <div class="-bus-noriba">
                  <a href="https://www.google.com/maps/@36.3432916,138.636364,3a,75y,218.54h,75.24t/data=!3m6!1e1!3m4!1sVP-9Bhyi92-5U7U3Wx5GZA!2e0!7i16384!8i8192?authuser=0&entry=ttu" target="_blank">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon_bus_01.png"></i>
                    <div>バスのりば<span>拡大して表示</span></div>
                  </a>
                </div>

              </div>
            </div>
            <div class="l-contents-2column -mgB">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/bus_02.svg">
                <a href="https://www.google.com/maps/place/36%C2%B021'40.1%22N+138%C2%B035'19.4%22E/@36.3611238,138.5887211,17z/data=!3m1!4b1!4m4!3m3!8m2!3d36.3611238!4d138.5887211?entry=ttu" target="_blank" class="noriba-map"><span class="c-button-arrow c-text-underline"></span>のりばをGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">星野温泉トンボの湯 バス停</h3>
                <div class="a-list">
                  <a href="https://www.hoshino-area.jp/contents/uploads/814d3d57541d55ddef37602a5693dd27.pdf#page=2" target="_blank" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表（軽井沢駅行き）</span></a>
                </div>
                <div class="-bus-noriba">
                  <a href="https://www.google.com/maps/@36.3610828,138.5886665,3a,75y,67.12h,90t/data=!3m7!1e1!3m5!1saroWnukiwV4-SX41H_xa4w!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DaroWnukiwV4-SX41H_xa4w%26cb_client%3Dsearch.revgeo_and_fetch.gps%26w%3D96%26h%3D64%26yaw%3D67.11876%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192?entry=ttu" target="_blank">
                    <i><img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/icon_bus_02.png"></i>
                    <div>バスのりば<span>拡大して表示</span></div>
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
                  <li><a href="https://hoshinoresorts.com/ja/hotels/hoshinoyakaruizawa/access/" target="_blank"><span class="hoshinoya">星のや軽井沢にご宿泊の方</span></a></li>
                  <li><a href="https://www.blestoncourt.com/access/shuttlebus/" target="_blank"><span class="hbc">ホテルブレストンコートにご来館の方</span></a></li>
                </ul>
              </div>
            </div>
            <div class="l-footer-important-news -mgB-s c-border-t">
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
                <div class="div4-6">軽井沢星野エリア</div>
                <div class="div4-7">タクシー<br>約15分</div>
              </div>
            </div>
            <div class="l-contents-2column -mgB-s">
              <div class="l-contents-2column__block -w-1_2  -fix">
                <h2 class="c-title-small"><span class="tag-b">電車</span>JR軽井沢駅から1駅の中軽井沢駅下車。</h2>
                <p>JR軽井沢駅から中軽井沢駅まではしなの鉄道をご利用ください。しなの鉄道時刻表はこちら</p>
                <p><a href="https://www.shinanorailway.co.jp/rail-info/time-table/index.php" target="_blank"><span class="c-button-arrow c-button-outerlink c-text-underline">しなの鉄道時刻表</span></a></p>
              </div>
              <div class="l-contents-2column__block -w-1_2  -fix">
                <h2 class="c-title-small"><span class="tag-b">タクシー</span>近隣のタクシー会社に直接ご連絡ください。</h2>
                <p class="">ますや交通（ TEL:<a href="tel:+81-267455223">0267-45-5223 ）<br>軽井沢観光タクシー（ TEL:<a href="tel:+81-267455408">0267-45-5408</a> ）<br>浅間観光タクシー（ TEL:<a href="tel:+81-267455264">0267-45-5264</a> ）</p>
              </div>
            </div>
            <div class="l-footer-important-news -mgB-s">
              <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">コインロッカーについて</h2>
                <p>星野エリアにはコインロッカーはございません。軽井沢駅または中軽井沢駅のコインロッカーをご利用ください。</p>
              </div>
            </div>
          </div><!--電車・タクシー-->

          <div class="c-tab-contents" id="tab-bike"><!--バイク・自転車-->
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/access/parking.svg">
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <p><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-bicycle.svg" width="28" height="28" class="icon -bicycle">駐輪場　P1、P2、P3（無料）</span></p>
                <p>P1の駐輪場はP1の中にございます。一般車出口ゲートバーの脇からお入りください。</p>
              </div>
            </div>
          </div><!--バイク・自転車-->
        </div>
      </div>
    </article>
  </div>
</section>

<!-- <section class="l-spacer -medium -both  p-tombo__faq">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <h2 class="c-title-large -vertical l-contents--left-title__title"><span>アクセス</span>よくある質問</h2>
      <div class="l-contents--left-title__conts">
        <dl class="p-faq-list">
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">コインロッカーはありますか？</dt>
            <dd class="p-faq-list__answer">
              <p>コインロッカーのご用意はございません。軽井沢駅や中軽井沢駅のコインロッカーをご利用ください。</p>
            </dt>
          </div>
        </dl>
      </div>
    </article>
  </div>
</section> -->

<?php get_footer(); ?>