<?php

// Select Field
// https://www.advancedcustomfields.com/resources/select/

$select = get_field('select');

if ($select === 'add_paragraph') {
    $addParagraph = esc_html(get_field('add_paragraph'));
    $addQuote = '';
    $addSpan = '';
} else if ($select === 'add_quote') {
    $addParagraph = '';
    $addQuote = esc_html(get_field('add_quote')) ?: '';
    $addSpan =  '';
} else if ($select === 'add_span') {
    $addParagraph = '';
    $addQuote = '';
    $addSpan = esc_html(get_field('add_span')) ?: '';
}

// do_action( 'qm/debug',  'select-with-text' );
// do_action( 'qm/debug',  $select );
// do_action( 'qm/debug',  $addParagraph );


// select
// add_paragraph
// add_quote
// add_span

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-purple-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-Choice/Select With Text</h1>

    <p>The select: <?= $select; ?></p>

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