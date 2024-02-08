<?php
/*Template Name: お問い合わせ */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">お問い合わせ</h1>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-s">
		<article class="l-contents">
			<p class="-mgB-s">下記の入力フォームに必要事項をご入力のうえ、お問い合わせください。<br>
			なお、お問い合わせをいただいてから、ご連絡までにお時間をいただく場合がございます。ご了承ください。</p>
			<ul class="c-list-kome">
				<li class="c-list-kome__item">ご宿泊・ご婚礼につきましては以下よりお問い合わせください<br><a href="https://hoshinoresorts.com/ja/hotels/hoshinoyakaruizawa/" target="_blank" class="c-text-underline">星のや軽井沢</a>　｜　<a href="https://www.blestoncourt.com/" target="_blank" class="c-text-underline">軽井沢ホテルブレストンコート</a>　｜　<a href="https://hoshinoresorts.com/ja/hotels/beb5karuizawa/" target="_blank" class="c-text-underline">BEB5軽井沢</a>　</li>
				<li class="c-list-kome__item">団体バスでのご利用は<a href="<?php echo home_url('/facility-guide/bus'); ?>" class="c-text-underline">こちら</a></li>
				<li class="c-list-kome__item">採用についてのお問合せは<a href="<?php echo home_url('/area-recruit'); ?>" class="c-text-underline">こちら</a></li>
				<li class="c-list-kome__item">ポップアップショップやイベントの出店のご希望は現在承っておりません。</li>
			</ul>
			<div class="l-spacer -medium">
				<?php echo do_shortcode('[contact-form-7 id="198a905" title="お問い合わせ"]'); ?>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>