<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<div class="c-lang <?php echo $class; ?>">
  <span class="c-lang__label <?php echo $class; ?> js-lang-button">Language</span>
  <div class="c-lang__list js-lang-select <?php echo $class; ?> ">
    <?php echo do_shortcode('[gt-link lang="ja" label="JA"  widget_look="" /]'); ?>
    <?php echo do_shortcode('[gt-link lang="en" label="EN"  widget_look="" /]'); ?>
    <?php echo do_shortcode('[gt-link lang="zh-TW" label="繁"  widget_look="" /]'); ?>
    <?php echo do_shortcode('[gt-link lang="zh-CN" label="簡"  widget_look="" /]'); ?>
    <?php echo do_shortcode('[gt-link lang="ko" label="韓"  widget_look="" /]'); ?>
  </div>
</div>