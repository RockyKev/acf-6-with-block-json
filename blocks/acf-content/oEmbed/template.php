<?php 

// oEmbed Field
// https://www.advancedcustomfields.com/resources/oembed/

$oembed = get_field('oembed');


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="embed-container outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-content/oEmbed</h1>

    <?= $oembed; ?>

</div>


