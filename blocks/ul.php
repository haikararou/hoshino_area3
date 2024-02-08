
<?php
$className = 'ul';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
$rows = get_field('ul');
$listtype = get_field_object('list-type');
$value = $listtype['value'];

?>
<ul class="c-list<?php echo $value; ?>">
<?php
    if($rows){
    foreach($rows as $row) {
    echo '<li class="c-list';
    echo $value;
    echo '__item">';
    echo $row['li'];
    echo '</li>';
    }
    }
?>
</ul>