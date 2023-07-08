<?php 

// Range Field
// https://www.advancedcustomfields.com/resources/range/

$range = esc_html(get_field('range'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/Range</h1>

    <p>Range Number: <?= $range; ?></p>

</div>


