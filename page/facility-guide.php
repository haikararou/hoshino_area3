<?php
/*Template Name: ご利用案内 */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">ご利用案内</h1>
	</div>
</section>

<section class="l-spacer">
	<div class="l-container--primary-m">
		<article class="l-contents">
			<div class="l-contents__conts">

				<section class="l-spacer -small -both -no_top">
					<p>軽井沢星野エリアは、豊かな自然と人々が共生する場所です。<br>
					ここで過ごす人々や動植物を尊重し、皆が心地よく過ごせるようご協力をお願いします。</p>
				</section>

				<section class="l-spacer -small -both">
					<h2 class="c-title-medium">軽井沢星野エリアからのお願い</h2>
					<ul class="c-list-dot">
						<li class="c-list-dot__item">ゴミのお持ち帰りにご協力ください。</li>
						<li class="c-list-dot__item">エリア内は禁煙です。喫煙される場合は、喫煙所をご利用ください。</li>
						<li class="c-list-dot__item">荷物預かりサービスはございません。最寄り駅のコインロッカーをご利用ください。</li>
						<li class="c-list-dot__item">野生生物への餌やりはご遠慮ください。</li>
						<li class="c-list-dot__item">エリア外からのお食事の持ち込みは、ご遠慮ください。</li>
						<li class="c-list-dot__item">他のお客様の迷惑になるような行為はご遠慮ください。</li>
					</ul>
				</section>

				<section class="l-spacer -small -both">
					<h2 class="c-title-medium">バリアフリーのご案内</h2>
					<ul class="c-list-dot">
						<li class="c-list-dot__item">星野エリア内駐車場のP1～P3には、障がい者等用の駐車区画があります。駐車場から施設まではスロープがあり、車いすでのご移動が可能です。なお、車いすの貸出しはございません。</li>
						<li class="c-list-dot__item">ハルニレテラス・村民食堂・トンボの湯には、車いす対応のトイレがあります。ベビーベッド(おむつ交換台)も設置されています。オストメイトはございません。</li>
					</ul>
				</section>

				<section class="l-spacer -small -both" id="pet">
					<h2 class="c-title-medium">ペットをお連れのお客様へ</h2>
					<ul class="c-list-dot">
						<li class="c-list-dot__item">施設内ではペットから離れず、また、他のお客様へのご迷惑、危険が無いよう十分にご配慮ください。</li>
						<li class="c-list-dot__item">必ずリードにつなぐ、またはキャリーバッグやペット専用カートをご利用ください。</li>
						<li class="c-list-dot__item">排泄物の処理、建具破損、傷害などは、飼い主様の責任でご対処ください。</li>
						<li class="c-list-dot__item">ペットに関するお客様同士のトラブルについては、当施設は一切責任を負いません。</li>
					</ul>
				</section>

				<section class="l-spacer -small -both" id="photograph">
					<h2 class="c-title-medium">撮影をされるお客様へ</h2>
					<ul class="c-list-dot">
						<li class="c-list-dot__item">長時間同じ場所を占拠したり、道を遮ったり、機材を放置するなど、他のお客様のご迷惑になるような行為はご遠慮ください。</li>
						<li class="c-list-dot__item">営業・商業利用を目的とする、ロケーションフォト撮影・写真・ビデオ・映像等の撮影はお断りしております。</li>
						<li class="c-list-dot__item">ドローンなどの小型無人機の飛行はご遠慮ください。</li>
						<li class="c-list-dot__item">報道や取材を目的とする写真・ビデオ・映像等の撮影の場合は、申請が必要となりますので、事前にお問い合わせください。<a href="<?php echo home_url('/contact'); ?>" class="c-text-underline">お問い合わせはこちら</a></li>
					</ul>
				</section>

				<section class="l-spacer -small -both">
					<h2 class="c-title-medium">各店舗で利用可能なキャッシュレス決済</h2>
					<h3 class="c-title-small">トンボの湯・村民食堂</h3>
					<ul class="c-list-dot -mgB-s">
						<li class="c-list-dot__item">クレジットカード<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_01.png"class="-approval"></li>
						<li class="c-list-dot__item">電子マネー<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_02.png"class="-approval"></li>
						<li class="c-list-dot__item">コード払い<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_03.png"class="-approval"></li>
					</ul>
					<h3 class="c-title-small">ハルニレテラス</h3>
					<ul class="c-list-dot -mgB-s">
						<li class="c-list-dot__item">クレジットカード<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_01.png"class="-approval"></li>
						<li class="c-list-dot__item">電子マネー<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_02.png"class="-approval"></li>
						<li class="c-list-dot__item">コード払い<br><span class="c-text-small">＊沢村、川上庵では、ご利用いただけません。</span><br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_06.png"class="-approval"></li>
					</ul>
					<h3 class="c-title-small">ピッキオ・ケラ池スケートリンク</h3>
					<ul class="c-list-dot -mgB-s">
						<li class="c-list-dot__item">クレジットカード<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_07.png"class="-approval"></li>
						<li class="c-list-dot__item">電子マネー<br><span class="c-text-small">＊ご利用いただけません。</span></li>
						<li class="c-list-dot__item">コード払い<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_09.png"class="-approval"></li>
					</ul>
				</section>

				<section class="l-spacer -small -both">
					<h2 class="c-title-medium">駐車場の事前精算機</h2>
					<p>現金の他、以下のキャッシュレス決済をご利用いただけます。<br><a href="/parking/" class="c-text-underline">駐車場のご利用についてくわしくはこちらをご確認ください。</a></p>
					<p>
					<ul class="c-list-dot">
						<li class="c-list-dot__item">クレジットカード<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_10.png"class="-approval"></li>
						<li class="c-list-dot__item">電子マネー<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_11.png"class="-approval"></li>
						<li class="c-list-dot__item">コード払い<br><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/approval_12.png"class="-approval"></li>
					</ul>
					</p>
				</section>

				<section class="l-spacer -small -both" id="bus">
					<h2 class="c-title-medium">大型車両でお越しのお客様へ</h2>
					<p>当施設には、大型車両（キャンピングカーやバスなど）の駐停車スペースがございません。マイクロバスを含むバスでのご来場はお控えください。<br>
					また、周辺道路等での駐停車は、交通の妨げとなります。近隣住民の方へのご迷惑にもなりますので、併せてご遠慮くださいますようお願いいたします。</p>
				</section>

			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>