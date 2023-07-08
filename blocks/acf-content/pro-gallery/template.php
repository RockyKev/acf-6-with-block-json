<?php 

// PRO Gallery Field
// https://www.advancedcustomfields.com/resources/gallery/

$email = esc_html(get_field('email'));

// TODO: Fix
// gallery

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-content/PRO Gallery</h1>

    <p>Test email: <?= $email; ?></p>

</div>


