<?php
/*Template Name: 駐車場のご案内 - テスト */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<?php get_template_part('news/list-important'); ?>

<section class="l-spacer -medium">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">駐車場</h1>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <div class="sign_p">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/map2.svg">
          <div class="sign_p1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/empty_bottom.png"></div>
          <div class="sign_p2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/full_left.png"></div>
          <div class="sign_p3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/full_left.png"></div>
          <div class="sign_p6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/empty_right.png"></div>
          <div class="sign_p7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/empty_right.png"></div>
        </div>
      </div>

      <div class="l-contents-2column__block -w-1_2--left">
        <div class="">
          <dl class="c-list-dl -mgB-s">
            <dt>駐車料金（P1-P3）</dt>
            <dd>最初の30分　無料<br>以降1時間毎　300円（上限3,000円）<br><span class="c-text-small">*合計2,000円以上のご利用で入庫から2時間まで無料（対象店舗：トンボの湯、ハルニレテラス、村民食堂、ピッキオ）<br>*P6、P7、臨時駐車場は無料<br>*お会計時に、割引券を発行</span></dd>
            <dt>利用の流れ（P1-P3）</dt>
            <dd><ul class="c-list-dot">
              <li class="c-list-dot__item">入庫<br><span class="c-text-small">車両ナンバーをカメラが読み取り、ゲートバーが開きます。駐車券はありません。</span></li>
              <li class="c-list-dot__item">精算<br><span class="c-text-small">事前精算機にて車両ナンバー4桁をご入力の上、ご精算ください。無料時間内の場合も精算処理が必要です。</span></li>
              <li class="c-list-dot__item">出庫<br><span class="c-text-small">精算後20分以内にご出庫ください。車両ナンバーをカメラが読み取り、ゲートバーが開きます。</span></li>
            </ul></dd>
            <dt>決済方法</dt>
            <dd>現金の他、以下のキャッシュレス決済をご利用いただけます。
            <ul class="c-list-dot">
              <li class="c-list-dot__item">クレジットカード<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/approval_01.png"></span></li>
              <li class="c-list-dot__item">電子マネー<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/approval_02.png"></span></li>
              <!-- <li class="c-list-dot__item">コード払い<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/parking/approval_03.png"></span></li> -->
            </ul>
            </dd>
            <dt>営業時間</dt>
            <dd>7：00～23：00（店舗営業時間に準ずる）</dd>
          </dl>
          <div class="red_box -mgB-s">バイクは、駐車場ではなく駐輪場に停めてください。駐車場のゲートからは進入できません。</div>

          <div class="-mgB-m c-border-4">
            <h3 class="c-title-small">満車予測時間帯</h3>
            <p class="-mgB-s">中軽井沢駅寄りの駐車場から混み合います。<br>満車の場合は路上で待機せず、［P6］へお進みください。</p>
            <dl class="c-list-dl small">
            <dt>平日</dt>
            <dd>
              <span class="c-text-icon">
                <div class="tw6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_02.svg" width="28" height="28" class="icon2"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_03.svg" width="28" height="28" class="icon2"></div>
                <div>11～14時頃</div>
              </span>
              <span class="c-text-icon">
                <div class="tw6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_01.svg" width="28" height="28" class="icon2"></div>
                <div>12～13時頃</div>
              </span>
            </dd>
            <dt>土日祝</dt>
            <dd>
              <span class="c-text-icon">
                <div class="tw6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_02.svg" width="28" height="28" class="icon2"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_03.svg" width="28" height="28" class="icon2"></div>
                <div>10～15時頃</div>
              </span>
              <span class="c-text-icon">
                <div class="tw6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking_01.svg" width="28" height="28" class="icon2"></div>
                <div>11～14時頃</div>
              </span>
            </dd>
            </dl>
          </div>

          <?php $replacement = get_field('parking_pdf'); ?>
          <?php if($replacement['parking_pdf_file']): ?>
          <a href="<?php echo $replacement['parking_pdf_file']; ?>" target="_blank">
            <span class="c-button-arrow c-text-underline"><?php echo $replacement['parking_pdf_txt']; ?></span>
          </a>
          <?php endif; ?>

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