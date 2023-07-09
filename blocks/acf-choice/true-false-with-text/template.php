<?php 

// True False Field
// https://www.advancedcustomfields.com/resources/true-false/

$boolean = get_field('true-false');

$booleanAsString = $boolean ? 'true' : 'false';

// true-false
// text

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/True False With Text</h1>

    <p>Test boolean: <?= $booleanAsString; ?></p>

</div>


