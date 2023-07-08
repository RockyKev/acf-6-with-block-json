<?php 

// Text Field
// https://www.advancedcustomfields.com/resources/text/

$text = esc_html(get_field('text'));

?>

<div class="outline outline-4 outline-yellow-500 py-4 my-4">

    <h1 class="text-4xl underline pb-4">ACF-basic/Text</h1>

    <p>Text: <?= $text; ?></p>

</div>


