<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/password/

$password = esc_html(get_field('password'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/Password</h1>

    <p>Preferrably you pass it like this:</p>
    <pre>$value = get_field( "password", "option");</pre>
    <p>Password: <?= $password; ?></p>

</div>


