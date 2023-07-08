<?php 

// Date Time Field
// https://www.advancedcustomfields.com/resources/date-time-picker/

$datetime = get_field('date_time_picker'); 

do_action( 'qm/debug',  'date-time object' );
do_action( 'qm/debug',  get_field('date_time_picker') );
do_action( 'qm/debug',  $datetime );

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-green-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-advanced/Date Time</h1>

    <p>Test Date Time: <?= $datetime; ?></p>

</div>


