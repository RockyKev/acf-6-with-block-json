<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/text/

$range = esc_html(get_field('range'));

?>

<div class="outline outline-4 outline-purple-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Range</h1>

    <p>Range Number: <?= $range; ?></p>

</div>


