<?php 

// Flexible Content Field
// https://www.advancedcustomfields.com/resources/flexible-content/

$flexibleContentGroup = get_field('flexible_content_group');

// TODO: fix

// flexible_content_group
// flexible_content_1 -> text
// flexible_content_2 -> text 
// flexible_content_3 -> text
// flexible_content_4 -> text
// flexible_content_5 -> text

// switch ($number) {
//     case 1:
//       echo "The number is 1.";
//       break;
//     case 2:
//       echo "The number is 2.";
//       break;
//     case 3:
//       echo "The number is 3.";
//       break;
//     case 4:
//       echo "The number is 4.";
//       break;
//     case 5:
//       echo "The number is 5.";
//       break;
//     default:
//       echo "The number is not 1, 2, 3, 4, or 5.";
//   }

do_action( 'qm/debug', 'Flexible Content tag' );
do_action( 'qm/debug', $flexibleContentGroup );


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/PRO Flexible Content</h1>

    <p>Test email: <?= $email; ?></p>

</div>


