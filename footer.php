<?php
/**
 * フッターテンプレート
 */
?>
</main>

<?php if(is_home() || is_front_page()): ?>
  <div class="facility-flex">
    <div class="facility-flex-img">
      <?php get_template_part('inc/areamap'); ?>
      <div class="-home" id="tab-map">
        <ul class="-map_list">
          <li><a href="<?php echo home_url('/harunireterrace'); ?>">ハルニレテラス</a></li>
          <li><a href="<?php echo home_url('/tombo-no-yu'); ?>">星野温泉トンボの湯</a></li>
          <li><a href="<?php echo home_url('/sonmin-shokudo'); ?>">村民食堂</a></li>
          <li><a href="<?php echo home_url('/shop/hungryspot'); ?>">カフェハングリースポット</a></li>
          <li><a href="<?php echo home_url('/church#picchio'); ?>">ピッキオ</a><br><a href="<?php echo home_url('/shop/ikarucafe'); ?>">イカルカフェ</a><br><a href="<?php echo home_url('/kera-ike-icerink'); ?>">ケラ池スケートリンク</li>
          <li><a href="<?php echo home_url('/hotel#hoshinoya'); ?>">星のや軽井沢</a></li>
          <li><a href="http://www.besso-navi.com/" target="_blank">軽井沢別荘Navi</a></li>
          <li><a href="https://yukawatan.blestoncourt.com/" target="_blank">ブレストンコートユカワタン</a></li>
          <li><a href="<?php echo home_url('/church#stonechurch'); ?>">石の教会 内村鑑三記念堂</a></li>
          <li><a href="<?php echo home_url('/church#karuizawachurch'); ?>">軽井沢高原教会</a></li>
          <li><a href="<?php echo home_url('/hotel#hbc'); ?>">軽井沢ホテルブレストンコート</a></li>
          <li><a href="<?php echo home_url('/hotel#beb5'); ?>">星野リゾート BEB5軽井沢</a></li>
        </ul>
      </div>
    </div>
    <div class="facility-flex-txt">
      <div class="home_txt">
        <div class="home_txt_lead">
          <h2 class="c-title-large">星野の森を、散策しよう。</h2>
          <p>エリア全体をつなぐ、森の中の遊歩道。<br>川の流れに沿うように、文化人の歌碑が点在しています。<br>いつもよりも歩調をゆるめて、思うままに、お過ごしください。</p>
        </div>
        <div class="home_flx">
          <figure class="no01">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around01.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>木陰の湯上り処（夏季）</span></figcaption>
            </div>
          </figure>
          <figure class="no03">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around03.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>太鼓橋</span></figcaption>
            </div>
          </figure>
          <figure class="no05">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around05.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>川辺のベンチ</span></figcaption>
            </div>
          </figure>
          <figure class="no02">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around02.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>川床のテラス</span></figcaption>
            </div>
          </figure>
          <figure class="no04">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around04.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>カフェテラスのベンチ</span></figcaption>
            </div>
          </figure>
          <figure class="no06">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/around06.jpg" alt="">
              <figcaption class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-around.svg" alt=""><span>川辺のベンチ</span></figcaption>
            </div>
          </figure>
        </div>
        <div class="monument-list c-border-t">
          <ul>
            <li class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-monument.svg" alt=""><span>北原白秋の文学碑</span></li>
            <li class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-monument.svg" alt=""><span>六川水声の句碑</span></li>
            <li class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-monument.svg" alt=""><span>与謝野寛・明子 鴛鴦の歌碑</span></li>
            <li class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-monument.svg" alt=""><span>中西悟堂の歌碑</span></li>
            <li class="c-text-icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-monument.svg" alt=""><span>沖野岩三郎の歌碑</span></li>
          </ul>
        </div>
        <p>
          <a href="<?php echo get_template_directory_uri(); ?>/assets/img/areamap/areamap_2306image.pdf" target="_blank" class="c-button-block -lightyellow -arrow"><span>星野エリア ガイドマップ（PDF）</span></a>
        </p>
      </div>
    </div>
  </div>
  <div class="c-gmenu-primary -home">
    <ul>
      <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/tombo-no-yu'); ?>" class="c-gmenu-primary__link">温泉</a></li>
      <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/shop'); ?>" class="c-gmenu-primary__link">ショップ&amp;レストラン</a></li>
      <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/activity'); ?>" class="c-gmenu-primary__link">アクティビティ</a></li>
      <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/church'); ?>" class="c-gmenu-primary__link">教会</a></li>
      <li class="c-gmenu-primary__item"><a href="<?php echo home_url('/hotel'); ?>" class="c-gmenu-primary__link">ホテル</a></li>
    </ul>
  </div>
<?php else: ?>
<footer class="l-footer">
  <div class="l-footer__outline">
    <a href="<?php echo home_url('/areamap'); ?>" class="u-transparent">
      <section class="l-footer-map l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ttl-area-map.svg" alt="軽井沢 星野エリアマップ" width="172" height="133"></h2>
        <p class="l-footer-map__text">Karuizawa Hoshino Area Map</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">施設を探す</button>
      </section>
    </a>
    <a href="" class="u-transparent">
      <section class="l-footer-concept l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/txt-copy-white.svg" alt="森が、居場所になる一日。" width="168" height="159"></h2>
        <p class="l-footer-concept__text">ゆれる木洩れ陽、川のせせらぎ、鳥のさえずり。豊かな自然に包まれて、暮らすように一日を。</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">星野エリアで過ごす</button>
      </section>
    </a>
  </div>
<?php endif; ?>

  <?php if(!is_archive('event') && !is_singular('event') && !is_page('ended')): ?>
  <?php get_template_part('event/list-3'); ?>
  <?php endif; ?>

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


  <nav>
    <?php
    $args = ['class' => '-footer'];
    get_template_part('inc/info-menu', null, $args); ?>
  </nav>

  <div class="l-footer__bottom">
    <nav class="l-footer__sitemap">
      <ul>
        <li><a href="<?php echo home_url('/tombo-no-yu'); ?>">星野温泉 トンボの湯</a></li>
        <li><a href="<?php echo home_url('/harunireterrace'); ?>">ハルニレテラス</a></li>
        <li><a href="<?php echo home_url('/sonmin-shokudo'); ?>">村民食堂</a></li>
        <li><a href="<?php echo home_url('/church#picchio'); ?>">ピッキオ</a></li>
        <li><a href="<?php echo home_url('/kera-ike-icerink'); ?>">ケラ池スケートリンク</a></li>
        <li><a href="<?php echo home_url('/church#karuizawachurch'); ?>">軽井沢高原教会</a></li>
        <li><a href="<?php echo home_url('/church#stonechurch'); ?>">石の教会 内村鑑三記念堂</a></li>
        <li><a href="https://yukawatan.blestoncourt.com/" target="_blank">ブレストンコート ユカワタン</a></li>
        <li><a href="<?php echo home_url('/shop/hungryspot'); ?>">カフェ ハングリースポット</a></li>
        <li><a href="<?php echo home_url('/shop/ikarucafe'); ?>">イカルカフェ</a></li>
        <li><a href="http://www.besso-navi.com/" target="_blank">軽井沢 別荘Navi</a></li>
        <li class="no-arw">　</li>
        <li><a href="<?php echo home_url('/hotel#hoshinoya'); ?>">星のや軽井沢</a></li>
        <li><a href="<?php echo home_url('/hotel#hbc'); ?>">軽井沢ホテルブレストンコート</a></li>
        <li><a href="<?php echo home_url('/hotel#beb5'); ?>">BEB5軽井沢</a></li>
      </ul>
    </nav>
  </div>

  <div class="c-border-t l-footer-position">
    <div class="l-footer__bottom">
      <nav>
        <?php get_template_part('inc/other-menu', null, $args); ?>
      </nav>
    </div>
    <div class="l-footer__instagram">
    <a class="c-text-icon instagram" href="https://www.instagram.com/harunireterrace/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-insta.svg" width="16" height="16" class="icon lazyloaded">Instagram</a>
    </div>
    <div class="l-footer__logo">
      <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-en.png" width="170" height="17" alt="Hoshino resorts"></a>
      <p class="l-footer__copyright">Copyright &copy; All rights reserved. Hoshino Resorts Inc.</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
