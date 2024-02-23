<?php
/**
 * フッターテンプレート
 */
?>
</main>

<div class="c-bg-white">

  <?php if(!is_archive('event') && !is_singular('event') && !is_page('ended')): ?>
  <?php get_template_part('event/list-3'); ?>
  <?php endif; ?>

<!--
-------------------------------------------------------
-------------------------------------------------------
-------------------------------------------------------
<?php if(is_home() || is_front_page()): ?>
<?php else: ?>
<?php get_template_part('news/list-important'); ?>
<?php endif; ?>

<?php if(is_page('harunireterrace')): ?>
<?php get_template_part('news/list-3-facility'); ?>
<?php endif; ?>

<?php if(is_home() || is_front_page()): ?>
<?php get_template_part('news/list-3'); ?>
<?php get_template_part('news/list-important'); ?>
<?php endif; ?>
-------------------------------------------------------
-------------------------------------------------------
-------------------------------------------------------
-->

  <nav>
    <?php
    $args = ['class' => '-footer'];
    get_template_part('inc/info-menu', null, $args); ?>
  </nav>

  <div class="l-footer-position">
    <div class="l-footer__bottom c-border-b">
      <nav>
        <?php get_template_part('inc/other-menu', null, $args); ?>
      </nav>
    </div>
    <div class="l-footer__bottom">
      <nav class="l-footer__sitemap">
        <ul>
          <li><a href="<?php echo home_url('/tombo-no-yu'); ?>">星野温泉 トンボの湯</a></li>
          <li><a href="<?php echo home_url('/harunireterrace'); ?>">ハルニレテラス</a></li>
          <li><a href="<?php echo home_url('/sonmin-shokudo'); ?>">村民食堂</a></li>
          <li><a href="<?php echo home_url('/church#picchio'); ?>">ピッキオ</a></li>
          <li><a href="<?php echo home_url('/kera-ike-icerink'); ?>">ケラ池スケートリンク</a></li>
          <li><a href="<?php echo home_url('/church#karuizawachurch'); ?>" target="_blank">軽井沢高原教会</a></li>
          <li><a href="<?php echo home_url('/church#stonechurch'); ?>" target="_blank">石の教会 内村鑑三記念堂</a></li>
          <li><a href="https://yukawatan.blestoncourt.com/" target="_blank">ブレストンコート ユカワタン</a></li>
          <li><a href="<?php echo home_url('/shop/hungryspot'); ?>">カフェ ハングリースポット</a></li>
          <li><a href="<?php echo home_url('/shop/ikarucafe'); ?>">イカルカフェ</a></li>
          <li><a href="http://www.besso-navi.com/" target="_blank">軽井沢 別荘Navi</a></li>
          <li class="no-arw"></li>
          <li><a href="https://hoshinoresorts.com/ja/hotels/hoshinoyakaruizawa/" target="_blank">星のや軽井沢</a></li>
          <li><a href="https://www.blestoncourt.com/" target="_blank">軽井沢ホテルブレストンコート</a></li>
          <li><a href="https://hoshinoresorts.com/ja/hotels/beb5karuizawa/" target="_blank">BEB5軽井沢</a></li>
        </ul>
      </nav>
    </div>
    <div class="l-footer__end">
    <div class="l-footer__instagram">
        <a class="c-text-icon instagram" href="https://www.instagram.com/harunireterrace/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-insta.svg" width="16" height="16" class="icon lazyloaded">Instagram</a>
      </div>
      <div class="l-footer__logo">
        <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-en.png" width="170" height="17" alt="Hoshino resorts"></a>
        <p class="l-footer__copyright">Copyright &copy; All rights reserved. Hoshino Resorts Inc.</p>
      </div>
    </div>
  </div>

</footer>

</div>

<?php wp_footer(); ?>
<?php if(is_home() || is_front_page() || is_page('areamap')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modaal.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modaal.js"></script>
<?php endif; ?>

<?php if(is_archive('business-hours')): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mrstickytableheaders.min.js" type="text/javascript"></script>
<script>
$(function(){
  $('#table01').mrstickytableheaders();
});
</script>
<?php endif; ?>

</body>
</html>
