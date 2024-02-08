<?php
/*Template Name: 駐車場のご案内 */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">駐車場のご案内</h1>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/map.svg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">

        <div class="-mgB-m c-border-4">
          <h3 class="c-title-small">満車予測時間帯</h3>
          <p class="-mgB-s">中軽井沢駅寄りの駐車場から混み合います。<br>満車の場合は路上で待機せず、次の駐車場へお進みください。</p>
          <dl class="c-list-dl">
            <dt>平日</dt>
            <dd>
              <p><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_02.svg" width="28" height="28" class="icon2"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_03.svg" width="28" height="28" class="icon2"> ハルニレテラス付近</span>11～14時頃<br>
              <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_01.svg" width="28" height="28" class="icon2"> トンボの湯・村民食堂付近</span>12～13時頃</p>
            </dd>
            <dt>土日祝</dt>
            <dd>
              <p><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_02.svg" width="28" height="28" class="icon2"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_03.svg" width="28" height="28" class="icon2"> ハルニレテラス付近</span>
              <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_01.svg" width="28" height="28" class="icon2"> トンボの湯・村民食堂付近</span>11～14時頃</p>
            </dd>
          </dl>
        </div>

        <div class="-mgB-m">
          <h3 class="c-title-small">お車でお越しの方</h3>
          <p><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_blu.svg" width="28" height="28" class="icon -bicycle">通常駐車場　P1、P2、P3（有料）</span>
          <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_grn.svg" width="28" height="28" class="icon -bicycle">無料駐車場　P6、P7、臨時駐車場（無料）</span></p>
        </div>

        <div class="-mgB-m">
          <h3 class="c-title-small">バイク・自転車でお越しの方</h3>
          <p><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-bicycle.svg" width="28" height="28" class="icon -bicycle">駐輪場　P1、P2、P3（無料）</span></p>
        </div>

        <div class="">
          <h3 class="c-title-small">駐車場概要</h3>
          <dl class="c-list-dl -mgB-s">
            <dt>駐車料金（P1-P3）</dt>
            <dd>最初の30分　無料<br>以降1時間毎　300円（上限3,000円）</dd>
            <dt>サービス料金</dt>
            <dd>トンボの湯、ピッキオ、村民食堂、ハルニレテラス各店舗で合計2,000円以上ご利用いただくと、無料駐車時間を2時間まで延長します。</dd>
            <dt>営業時間</dt>
            <dd>時間　7：00～23：00（店舗営業時間に準ずる）</dd>
            <dt>ご案内事項</dt>
            <dd><ul class="c-list-dot">
              <li class="c-list-dot__item">駐車券を持ってお出かけください。</li>
              <li class="c-list-dot__item">駐車券紛失の場合には、駐車券紛失料金3,000円申し受けます。</li>
              <li class="c-list-dot__item">ご精算は現金（千円札、500、100、50、10円硬貨）にてお願いいたします。</li>
            </ul></dd>
          </dl>
          <a href=""><span class="c-button-arrow c-text-underline">駐車場管理規定（PDF）</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both  p-tombo__faq">
	<div class="l-container--primary">
		<article class="l-contents--left-title -title-large">
			<h2 class="c-title-large -vertical l-contents--left-title__title">よくある質問</h2>
			<div class="l-contents--left-title__conts">
				<dl class="p-faq-list">
					<div class="p-faq-list__item">
						<dt class="p-faq-list__question">バイクはどこに駐車できますか？</dt>
						<dd class="p-faq-list__answer">
							<p>各駐車場付近にある駐輪場に駐車をお願いいたします。P1は村民食堂横、P2・P3は入口付近にございます。</p>
						</dt>
					</div>
				</dl>
				<dl class="p-faq-list">
					<div class="p-faq-list__item">
						<dt class="p-faq-list__question">キャンピングカーは駐車できますか？</dt>
						<dd class="p-faq-list__answer">
							<p>積載物又は取付物を含めて全長5.5m、幅2.2m、高さ3.5mを超える車両は、ゲートのある駐車場にはご入場頂けません。お越しの際はP6をご利用ください。</p>
						</dt>
					</div>
				</dl>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>