<?php 

// Number Field
// https://www.advancedcustomfields.com/resources/number/

$number = esc_html(get_field('number'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">


    <h1 class="text-4xl underline pb-4">ACF-basic/Number</h1>

    <p>Your number: <?= $number; ?></p>

</div>


