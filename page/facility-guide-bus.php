<?php
/*Template Name: 団体バスでお越しのお客様へ */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">団体バスでお越しのお客様へ</h1>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-m">
		<article class="l-contents">
			<div class="l-contents__conts">

				<section class="l-spacer -small -both">
					<p>バス乗降場および駐車場のご利用は、事前決済による完全予約制です。<br>
					下記の利用条件をご確認の上、ご予約をお願いいたします。</p>
				</section>

				<section class="l-spacer -small -both">
					<h3 class="c-title-small">利用条件</h3>
					<dl class="c-list-dl">
						<dt>受入可能期間</dt>
						<dd>2023年11月6日～2024年4月26日<br>
						ゴールデンウィークから11月上旬までの期間は、バスでのご利用は受け入れておりません。</dd>

						<dt>時間・台数</dt>
						<dd>10:00～12:00　1台<br>
						13:30～15:30　1台<br>
						<span>*時間内でしたら、到着／出発時間はご自由に設定いただけます。<br>
						*同じ時間枠で2台以上のご予約は承っておりません。</span></dd>

						<dt>料金</dt>
						<dd>１台3,000円</dd>

						<dt>支払方法</dt>
						<dd>
							<p>クレジットカードでの事前決済</p>
							<p><span>*webサイトからのご予約時に承ります。<br>*当日支払いは不可。</span></p>
						</dd>

						<dt>予約受付期間</dt>
						<dd>
							<p>３か月前～前日16：00まで</p>
							<p><span>*webサイトからのご予約時に承ります。<br>*当日支払いは不可。</span></p>
						</dd>

						<dt>予約開始日</dt>
						<dd>
							<p>毎月1日に3ヶ月後1ヶ月分の予約受付を開始します。<br>（例）9月1日に12月1～31日分のご予約受付を開始</p>
							<p>
								<a href="#"><span class="c-button-arrow c-text-underline">バス駐車場のご予約はこちら</span></a><br>
								<a href="#"><span class="c-button-arrow c-text-underline">予約方法の詳細はこちら</span></a>
							</p>
						</dd>

						<dt>キャンセルの連絡</dt>
						<dd>
							<p><a href="<?php echo home_url('/contact'); ?>">お問い合わせフォーム</a>よりご連絡ください。</p>
						</dd>

						<dt>キャンセルポリシー</dt>
						<dd>
							<p>22日前：無料<br>21日前～4日前：10%<br>3日前～当日：100％<br>連絡なしキャンセル：100%</p>
						</dd>

						<dt>備考</dt>
						<dd>
							<ul class="c-list-dot">
								<li class="c-list-dot__item">ご予約のないバスの乗降および駐停車はお断りしております</li>
								<li class="c-list-dot__item">募集型企画旅行でのご利用は承っておりません。施設規模が小さいため、ご理解を賜りますようお願い申し上げます。</li>
							</ul>
						</dd>

						<dt>ご予約後から当日まで</dt>
						<dd>
							<ul class="c-list-dot">
								<li class="c-list-dot__item">予約完了メールにて、「バスご利用案内（当日）」と「駐車許可証」を送付いたしますので、予め印刷してご持参ください。</li>
								<li class="c-list-dot__item">「バスご利用案内（当日）」の資料に、乗降場所や駐車場の詳細を記載しております。事前にご確認の上、予約時間内にご来場ください。</li>
								<li class="c-list-dot__item">バスのダッシュボードなど外から見える位置に、「駐車許可証」を掲示してください。</li>
							</ul>
						</dd>
					</dl>
				</section>

			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>