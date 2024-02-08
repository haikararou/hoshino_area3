<?php

$className = 'test';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title');
$textarea = get_field('textarea');
$rows = get_field('repeater');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
  <div class="test-item">
    <h2 class="test-title"><?php echo $title ?></h2>
    <p class="test-text"><?php echo $textarea; ?></p>
    <ul class="test-repeater-list">
    <?php
      if($rows){
        foreach($rows as $row) {
          echo '<li>';
          echo $row['re-list'];
          echo '</li>';
        }
      }
    ?>
    </ul>
  </div>
</div>