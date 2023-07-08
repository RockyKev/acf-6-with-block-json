<?php 

// URL Field
// https://www.advancedcustomfields.com/resources/url/

$url = esc_attr(get_field('url'));

// do_action( 'qm/debug', $block );


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/URL</h1>

    <p>URL: <a href="<?=$url; ?>"><?=$url; ?></a></p>


</div>


