<?php 

// Clone Field (Cloning Group With Text)
// https://www.advancedcustomfields.com/resources/clone/

$clone = get_field("clone");
$cloneGroup = $clone['group'];

$text1 = esc_html($cloneGroup['group_text_1']);
$text2 = esc_html($cloneGroup['group_text_2']);
$text3 = esc_html($cloneGroup['group_text_3']);

// do_action( 'qm/debug', 'Pro Clone' );
// do_action( 'qm/debug', $cloneGroup );

// do_action( 'qm/debug', $text1 );
// do_action( 'qm/debug', $text2 );
// do_action( 'qm/debug', $text3 );


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-yellow-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-layout/PRO Clone</h1>

    <p>Cloned Group Text Field 1: <?= $text1; ?></p>
    <p>Cloned Group Text Field 2: <?= $text2; ?></p>
    <p>Cloned Group Text Field 3: <?= $text3; ?></p>

</div>
