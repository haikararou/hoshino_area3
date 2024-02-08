<?php
$className = 'dl';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$rows = get_field('dl');
$noborder = get_field('noborder');
?>
<dl class="c-list-dl<?php if($noborder): ?> -noBorder<?php endif; ?>">
<?php
if($rows){
foreach($rows as $row) {
echo '<dt>';
echo $row['dt_g']['dt'];
echo '<span>';
echo $row['dt_g']['dt_span'];
echo '</span>';
echo '</dt>';
echo '<dd>';
echo $row['dd'];
echo '</dd>';
}
}
?>
</dl>