<?php 

// Post Object Field
// https://www.advancedcustomfields.com/resources/post-object/

$postObject = get_field('post_object');
// do_action('qm/debug', 'Post Object');
// do_action('qm/debug', $postObject);

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-orange-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Post Object</h1>

    <p>Post Example: <?= $postObject->post_title; ?>(ID: <?= $postObject->ID; ?>)</p>
</div>


