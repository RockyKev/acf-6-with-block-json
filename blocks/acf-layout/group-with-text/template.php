<?php 

// Group Field
// https://www.advancedcustomfields.com/resources/group/

$email = esc_html(get_field('email'));

// TODO: This
// group_text_1
// group_text_2
// group_text_3

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/Group With Text</h1>

    <p>Test email: <?= $email; ?></p>

</div>

