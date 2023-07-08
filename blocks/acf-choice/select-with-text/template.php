<?php 

// Select Field
// https://www.advancedcustomfields.com/resources/select/

$email = esc_html(get_field('email'));

// TODO: Clean up markup
// select
// add_paragraph
// add_quote
// add_span

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Select With Text</h1>

    <p>Test email: <?= $email; ?></p>

</div>


