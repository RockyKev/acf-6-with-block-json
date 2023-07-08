<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/email/

$email = esc_html(get_field('email'));

?>

<div class="outline outline-4 outline-green-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Email</h1>

    <p>Test email: <?= $email; ?></p>

</div>


