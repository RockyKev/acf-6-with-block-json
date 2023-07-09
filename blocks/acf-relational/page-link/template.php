<?php 

// Page Link Field
// https://www.advancedcustomfields.com/resources/page-link/

$pageLink = get_field('page_link');

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Page-Link</h1>

    <p>Test page link: <?= $pageLink; ?></p>

</div>


