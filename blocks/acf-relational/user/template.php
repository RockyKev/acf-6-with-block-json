<?php 

// User Field
// https://www.advancedcustomfields.com/resources/user/

$email = esc_html(get_field('email'));


// TODO: fix this
// user

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/User</h1>

    <p>Test email: <?= $email; ?></p>

</div>


