<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<div class="c-lang <?php echo $class; ?>">
  <div class="display_selectedItem"><span class="display_selectedItem3">Language</span><span class="display_selectedItem2"></span></div>
  <ul class="select_box">
      <li><?php echo do_shortcode('[gt-link lang="ja" label="日本語" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="en" label="English" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="zh-TW" label="繁體字" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="zh-CN" label="简体字" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="ko" label="한국어" widget_look="" /]'); ?></li>
  </ul>
</div>

<script>
$(function(){
  var selectedItem = $("ul.select_box li.selected").text();
  var selectBox = $("ul.select_box");
  var selectItems = $("ul.select_box li");
  var display = $(".display_selectedItem");
  var display2 = $(".display_selectedItem2");

  selectBox.hide();

  display.on("click",function(){
    selectBox.show();
    event.stopPropagation(); // クリックイベントの伝播を止める
  });

  selectItems.on("click",function(){
    selectItems.removeClass("selected");
    $(this).addClass("selected");
    selectBox.hide();
  });

  $(document).on("click", function(event){
    var target = $(event.target);
    if (!target.closest("ul.select_box").length && !target.hasClass("display_selectedItem")) {
      selectBox.hide();
    }
  });

})
</script>