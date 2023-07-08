<?php 

// Accordion Field
// https://www.advancedcustomfields.com/resources/accordion/

$email = esc_html(get_field('email'));

// TODO: This
// accordion_text_field_1
// accordion_text_field_2
// accordion_text_field_3

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/Accordion With Text</h1>

    <p>Test email: <?= $email; ?></p>

</div>


