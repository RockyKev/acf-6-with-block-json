<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/text/

$text = esc_html(get_field('text'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/Text</h1>

    <p>Text: <?= $text; ?></p>

</div>


