<?php 

// Checkbox Field
// https://www.advancedcustomfields.com/resources/checkbox/

$email = esc_html(get_field('email'));

// TODO: Fix template

// checkbox
// add_paragraph
// add_quote
// add_span


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Checkbox With Text</h1>

    <p>Test email: <?= $email; ?></p>

</div>


