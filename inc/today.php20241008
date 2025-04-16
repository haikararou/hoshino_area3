<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<section class="c-today <?php echo $class; ?>">
  <!-- ?php date_default_timezone_set ('Asia/Tokyo'); ? -->
<?php
//配列を使用し、要素順に(日:0〜土:6)を設定する
$week = [
  'sun', //0
  'mon', //1
  'tue', //2
  'wed', //3
  'thu', //4
  'fri', //5
  'sat', //6
];
$date = date_i18n('w');
?>
  <p class="c-today__date"><?php echo date_i18n("Y/m/d");?> <?php echo $week[$date];?></p>
  <div class="c-today__temp <?php echo $class; ?>">
    <span class="js-weather-icon"><i class="fa-solid fa-cloud"></i></span>
    <span class="js-weather-temp <?php echo $class; ?>"></span>℃
  </div>
</section>