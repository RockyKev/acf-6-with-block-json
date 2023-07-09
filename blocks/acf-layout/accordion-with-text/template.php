<?php

// Accordion Field
// https://www.advancedcustomfields.com/resources/accordion/

$text1 = esc_html(get_field('accordion_text_field_1'));
$text2 = esc_html(get_field('accordion_text_field_2'));
$text3 = esc_html(get_field('accordion_text_field_3'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-yellow-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/Accordion With Text</h1>

    <p>Accordion Text Field 1: <?= $text1; ?></p>
    <p>Accordion Text Field 2: <?= $text2; ?></p>
    <p>Accordion Text Field 3: <?= $text3; ?></p>

</div>