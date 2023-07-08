<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/number/

$number = esc_html(get_field('number'));

?>

<div class="outline outline-4 outline-red-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Number</h1>

    <p>Your number: <?= $number; ?></p>

</div>


