<?php

// Tab Field
// https://www.advancedcustomfields.com/resources/tab/


$wysiwyg1 = get_field('tab_wysiwyg_field_1');
$wysiwyg2 = get_field('tab_wysiwyg_field_2');
$wysiwyg3 = get_field('tab_wysiwyg_field_3');



// tab_wysiwyg_field_1
// tab_wysiwyg_field_2
// tab_wysiwyg_field_3

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-yellow-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/Tab with WYSIWYG</h1>

    <div class="wysiwyg-1"><?= $wysiwyg1; ?></div>
    <div class="wysiwyg-2"><?= $wysiwyg2; ?></div>
    <div class="wysiwyg-3"><?= $wysiwyg3; ?></div>

</div>