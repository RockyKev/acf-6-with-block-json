<?php 

// Color Field
// https://www.advancedcustomfields.com/resources/color-picker/

$color = get_field('color_picker');

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-green-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-advanced/Color Picker</h1>

    <p><span style="color:<?= $color; ?>">Test Color change</p>

</div>


