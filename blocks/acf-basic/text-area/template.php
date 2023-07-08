<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/textarea/

$textArea = esc_html(get_field('text_area'));

?>

<div class="outline outline-4 outline-red-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Text Area</h1>

    <p>Text Area:<?= $textArea; ?></p>

</div>


