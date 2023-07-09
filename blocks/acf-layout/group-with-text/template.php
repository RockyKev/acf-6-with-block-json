<?php 

// Group Field
// https://www.advancedcustomfields.com/resources/group/

$text1 = esc_html(get_field('group_text_1'));
$text2 = esc_html(get_field('group_text_2'));
$text3 = esc_html(get_field('group_text_3'));


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/Group With Text</h1>

    <p>Group Text Field 1: <?= $text1; ?></p>
    <p>Group Text Field 2: <?= $text2; ?></p>
    <p>Group Text Field 3: <?= $text3; ?></p>

</div>


