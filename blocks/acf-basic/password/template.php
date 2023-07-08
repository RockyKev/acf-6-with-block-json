<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/password/

$password = esc_html(get_field('password'));

?>

<div class="outline outline-4 outline-orange-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Password</h1>

    <p>Preferrably you pass it like this:</p>
    <pre>$value = get_field( "password", "option");</pre>
    <p>Password: <?= $password; ?></p>

</div>


