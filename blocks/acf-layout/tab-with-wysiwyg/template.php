<?php

// Tab Field
// https://www.advancedcustomfields.com/resources/tab/

$email = esc_html(get_field('email'));

// TODO: Fix
// tab_wysiwyg_field_1
// tab_wysiwyg_field_2
// tab_wysiwyg_field_3

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/Tab with WYSIWYG</h1>

    <p>Test email: <?= $email; ?></p>

</div>