<?php 

// Link Field
// https://www.advancedcustomfields.com/resources/link/

$link = get_field('link');
$fullLink = '';

if ( $link ) {
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';

    $fullLink = "<a href='$link_url' target='$link_target'>$link_title</a>";
}
   


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-orange-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Link</h1>

    <p>Test Link: <?= $fullLink; ?></p>

</div>


