<?php
/*Template Name: 教会 */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -pagetitile">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large lang-ja">教会</h1>
    <h1 class="c-title-ex-large lang-en">Church</h1>
    <h1 class="c-title-ex-large lang-tw">教会</h1>
    <h1 class="c-title-ex-large lang-cn">教会</h1>
    <h1 class="c-title-ex-large lang-ko">教会</h1>
    <p>木立を抜けて丘をのぼっていくと、2つの教会に辿り着きます。日常から離れ、木洩れ陽に包まれて、ゆっくり深呼吸しませんか。</p>
  </div>
</section>





<section class="l-spacer -mgB-l" id="karuizawachurch">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/church/karuizawa.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <h3 class="c-title-large">軽井沢高原教会</h3>
        <div class="l-spacer -em2">
          <p>丘の上にある、三角屋根の教会です。教会とその隣に佇む牧師館は、どなたでも訪れることができます。<br>
          軽井沢は、1886 年の英国国教会宣教師来訪を機に、教会文化が育まれてきた場所です。「軽井沢高原教会」は1921 年「芸術自由教育講習会」を原点に誕生しました。北原白秋や島崎藤村など、当時の文化人が集った歴史を持ちます。誰もが自由に集い語り合う精神は今なお受け継がれ、世代を越えて親しまれています。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="https://www.karuizawachurch.org/" target="_blank" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -mgB-l" id="stonechurch">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/church/stonechurch.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <h3 class="c-title-large">石の教会 内村鑑三記念堂</h3>
        <div class="l-spacer -em2">
          <p>キリスト教者・内村鑑三は、形式や制度にとらわれない、教会の在り方を説きました。<br>
          彼にとって、教会とは神が創造した世界そのもののことでした。そしてその豪壮たる世界の中におかれているいのちは、ありのままで祈ることができると考えていました。こうした思想が、「石の教会 内村鑑三記念堂」の礎となっています。<br>
          フランク・ロイド・ライトを師と仰ぐケンドリック・ケロッグは、この土地の個性を感じ取り、彼の思想をオーガニック建築で表現しました。堅固な石のアーチ、その間から光が差して緑が茂り、水が流れるこの教会は、自然との対話の中から生まれた唯一無二の祈りの空間です。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="https://www.stonechurch.jp/" target="_blank" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>

<!-- <script>
  $(document).ready(function() {
    var h1 = $("h1").text();
    var result = h1.replace("(I.e.", "Church");
    $("h1").text(result);

    var nav = $(".c-gmenu-primary__link").text();
    var result2 = nav.replace("(I.e.", "Church");
    $(".c-gmenu-primary__link").text(result2);

    var pan = $(".c-breadcrumb__item").text();
    var result3 = pan.replace("(I.e.", "Church");
    $(".c-breadcrumb__item").text(result3);
  });
</script> -->


