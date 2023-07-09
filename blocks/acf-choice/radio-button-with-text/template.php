<?php

// Radio Button Field
// https://www.advancedcustomfields.com/resources/radio-button/

// radio
// add_paragraph
// add_quote
// add_span

$radio = get_field('radio');

if ($radio === 'add_paragraph') {
    $addParagraph = esc_html($radio['add_paragraph']);
    $addQuote = '';
    $addSpan = '';
} else if ($radio === 'add_quote') {
    $addParagraph = '';
    $addQuote = esc_html($radio['add_quote']) ?: '';
    $addSpan =  '';
} else if ($radio === 'add_span') {
    $addParagraph = '';
    $addQuote = '';
    $addSpan = esc_html($radio['add_span']) ?: '';
}

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Radio Button With Text</h1>

    <p>The radio: <?= $radio; ?></p>

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