<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/textarea/

$textArea = esc_html(get_field('text_area'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">


    <h1 class="text-4xl underline pb-4">ACF-basic/Text Area</h1>

    <p>Text Area:<?= $textArea; ?></p>

</div>


