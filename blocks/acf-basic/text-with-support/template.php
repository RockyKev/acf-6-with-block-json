<?php

// Text Field with Block Support
// https://www.advancedcustomfields.com/resources/text/
// https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/

$text = esc_html(get_field('text'));

// do_action('qm/debug', 'Text With Blocks');
// do_action('qm/debug', $text);
// do_action('qm/debug', $block);

// SUPPORT OPTIONS
// == Anchor (anchor: true) ==
//  This gives you a anchor ID. <a id="anchor-id" href="https://example.com">Link</a>
$anchorID = $block['anchor'] ?: $block['id'];


// == Align (align: true) ==
//  This determines alignment. 
//  NOTE: On the WP Editor, it's a bit buggy. 
$alignSupport = "text-align: " . $block['align'] . ";" ?: '';

// == Color [background, text] == 
//  Two types of values. Named values vs custom values.
//  Named values have a class: <div class="has-vivid-green-cyan-background-color"></div>
//  Custom values are style injected: <div style="background-color:#ffffff;"></div>
$backgroundColorNamed = ($block['backgroundColor']) ? "has-" . $block['backgroundColor'] . "-background-color" : '';
$backgroundColorCustom = ($block['style']['color']['background']) ? "background-color:" . $block['style']['color']['background'] . ";": '';

$textColorNamed = ($block['textColor']) ? "has-" . $block['textColor'] . "-color" : '';
$textColorCustom = ($block['style']['color']['text']) ? "color:" . $block['style']['color']['text'] . ";": '';

// == Typography == 
//  Two types of values. Named values vs custom values.
//  Named values have a class: <div class="has-x-large-font-size"></div>
//  Custom values are style injected: <div style="font-size: 1.9em;"></div>

$fontSizeNamed = ($block['fontSize']) ? "has-" . $block['fontSize'] . "-font-size" : '';
$fontSizeCustom = ($block['style']['typography']['fontSize']) ? "font-size:" . $block['style']['typography']['fontSize'] . ";": '';

// == AdditionalClasses (true) == 
// Default is true. This allows you to add classes from the editor side
$additionalClasses .= !empty($block['className']) ? $block['className'] : ' no-classes-added';

// FRONTEND
$additionalStyles .= "$backgroundColorCustom $textColorCustom $fontSizeCustom $alignSupport ";
$additionalClasses .= "$backgroundColorNamed $textColorNamed $fontSizeNamed ";
$addAnchorID = "id=$anchorID";
?>

<div <?= $addAnchorID;?> class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>" style="<?= $additionalStyles; ?>">

    <h1 class="text-4xl underline pb-4">ACF-basic/Text</h1>

    <p>Text: <?= $text; ?></p>

</div>