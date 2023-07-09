<?php

// Button Group Field
// https://www.advancedcustomfields.com/resources/button-group/

// button_group
// add_more_to_apples

$buttonGroupData = get_field('button_group');
$buttonValue = $buttonGroupData['value'];
$buttonLabel = $buttonGroupData['label'];

$showAppleText = false;
$addMoreToApples = '';

if (str_contains($buttonLabel, 'Apple')) {
    $showAppleText = true;
    $addMoreToApples = esc_html(get_field('add_more_to_apples'));
}

do_action( 'qm/debug',  'select-with-text' );
do_action( 'qm/debug',  $buttonValue );
do_action( 'qm/debug',  $buttonLabel );
do_action( 'qm/debug',  str_contains($buttonLabel, 'Apple') );



$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Button Group With Text</h1>

    <p>The button selected was: <?= $buttonValue; ?></p>

    <p>If there's more content, it'll show up below:</p>

    <hr />
    <?php if ($showAppleText): ?>
        <p> <?= $addMoreToApples; ?></p>
    <?php endif; ?>
    <hr />

</div>