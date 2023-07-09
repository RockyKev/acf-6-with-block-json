<?php

// Checkbox Field
// https://www.advancedcustomfields.com/resources/checkbox/


$checkbox = get_field('checkbox');

$addParagraph = esc_html($checkbox['add_paragraph']) ?: '';
$addQuote = esc_html($checkbox['add_quote']) ?: '';
$addSpan = esc_html($checkbox['add_span']) ?: '';

// checkbox
// add_paragraph
// add_quote
// add_span

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Checkbox With Text</h1>

    <p>The Checkboxes: <?= $checkbox; ?></p>

    <?php if ($addParagraph) {
        echo "<p>$addParagraph</p>";
    } ?>

    <?php if ($addQuote) {
        echo "<blockquote>$addQuote</blockquote>";
    } ?>

    <?php if ($addSpan) {
        echo "<span>$addSpan</span>";
    } ?>


</div>