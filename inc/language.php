<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<div class="c-lang <?php echo $class; ?>">
  <div class="display_selectedItem"><span class="display_selectedItem3">Language</span><span class="display_selectedItem2"></span></div>
  <ul class="select_box">
      <li><?php echo do_shortcode('[gt-link lang="ja" label="JA" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="en" label="EN" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="zh-TW" label="繁" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="zh-CN" label="簡" widget_look="" /]'); ?></li>
      <li><?php echo do_shortcode('[gt-link lang="ko" label="韓" widget_look="" /]'); ?></li>
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


<style>
/* .c-lang {
  position: relative;
  background: #F8F8F0;
  text-align: center;
  height: 32px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  width: 200px;
  border-radius: 6px;
} */

/* .l-header-menu {
  position: relative;
  z-index: 90;
} */


/* .display_selectedItem {
  width: 100%;
}

.display_selectedItem3 {
  position: relative;
}
.display_selectedItem3::before {
			content: '';
			width: .4em;
			height: .4em;
			display: block;
			position: absolute;
			left: -1.3em;
			top: 0;
			bottom: 0;
			margin: auto;
			transform: rotate(135deg);
			border-top: 1px solid currentColor;
			border-right: 1px solid currentColor;
		}


.select_box {
  width: 100%;
  position: absolute;
  top:26px;
  left:0;
  background: #F8F8F0;
  border-radius: 6px;
  padding: 10px 0 16px;
}
.select_box li {
  cursor: default;
}
.select_box li + li {
  margin-top: 16px;
}
html:lang(auto) .display_selectedItem2::after {
  content:" : JA"
}
html:lang(ja) .display_selectedItem2::after {
  content:" : JA"
}
html:lang(en) .display_selectedItem2::after {
  content:" : EN"
}
html:lang(zh-TW) .display_selectedItem2::after {
  content:" : 繁"
}
html:lang(zh-CN) .display_selectedItem2::after {
  content:" : 簡"
}
html:lang(ko) .display_selectedItem2::after {
  content:" : 韓"
} */
</style>