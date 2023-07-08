<?php 

// Repeater Field
// https://www.advancedcustomfields.com/resources/repeater/

$email = esc_html(get_field('email'));

// TODO: fix markup
// repeater
// wysiwyg

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/PRO Repeater with WYSIWYG</h1>

    <p>Test email: <?= $email; ?></p>

</div>


