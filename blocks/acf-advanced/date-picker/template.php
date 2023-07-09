<?php 

// Date Picker Field
// https://www.advancedcustomfields.com/resources/date-picker/

$datePattern = 'd/m/Y'; // must match ACF pattern
$dateObject = DateTime::createFromFormat( $datePattern, get_field('date_picker') );
// Format: https://www.php.net/manual/en/datetime.format.php#refsect1-datetime.format-parameters
$date = $dateObject->format('F j, Y'); 


// do_action( 'qm/debug',  'date object' );
// do_action( 'qm/debug',  get_field('date_picker') );
// do_action( 'qm/debug',  $date );

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-green-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/Date</h1>

    <p>Date Output: <?= $date; ?></p>

</div>


