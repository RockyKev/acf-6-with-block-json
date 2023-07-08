<?php 

// Flexible Content Field
// https://www.advancedcustomfields.com/resources/flexible-content/

$email = esc_html(get_field('email'));

// TODO: fix

// flexible_content_group
// flexible_content_1 -> text
// flexible_content_2 -> text 
// flexible_content_3 -> text
// flexible_content_4 -> text
// flexible_content_5 -> text


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/PRO Flexible Content</h1>

    <p>Test email: <?= $email; ?></p>

</div>


