<?php 

// Post Object Field
// https://www.advancedcustomfields.com/resources/post-object/

$email = esc_html(get_field('email'));

// TODO: Fix
// post_object

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Post Object</h1>

    <p>Test email: <?= $email; ?></p>

</div>

