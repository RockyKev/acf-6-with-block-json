<?php 

// Time Picker Field
// https://www.advancedcustomfields.com/resources/time-picker/

$time = esc_html(get_field('time'));

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-green-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-advanced/Time Picker</h1>

    <p>Time Selected: <?= $time; ?></p>

</div>


