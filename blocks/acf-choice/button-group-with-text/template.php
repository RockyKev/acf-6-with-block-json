<?php

// Button Group Field
// https://www.advancedcustomfields.com/resources/button-group/

// button_group
// add_more_to_apples

$buttonSelected = get_field('button_group');
$showAppleText = false;
$addMoreToApples = '';

if (str_contains($buttonSelected, 'apple')) {
    $showAppleText = true;
    $addMoreToApples = esc_html(get_field('add_more_to_apples'));
}


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Button Group With Text</h1>

    <p>The button selected was: <?= $buttonSelected; ?></p>

    <p>If there's more content, it'll show up below:</p>

    <hr />
    <?php if ($showAppleText): ?>
        <p> <?= $addMoreToApples; ?></p>
    <?php endif; ?>
    <hr />

</div>