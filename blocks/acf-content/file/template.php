<?php

// File Field
// https://www.advancedcustomfields.com/resources/file/

$file = get_field('file');

if ($file) {

    $url = esc_attr($file['url']);
    $title = esc_attr($file['title']);
    $caption = esc_html($file['caption']);
    $icon = esc_attr($file['icon']);

    // Override the icon if it's a image
    if ($file['type'] == 'image') {
        $icon =  esc_attr($file['sizes']['thumbnail']);
    }

    $showCaption = $caption ? true : false;
};





$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-content/File</h1>

    <p>Test File below</p>

    <?php if ($showCaption) {
        echo '<div class="wp-caption">';
    } ?>

    <a href="<?= $url; ?>" title="<?= $title; ?>">
        <img src="<?= $icon; ?>" />
        <span><?= $title; ?></span>
    </a>

    <?php if ($showCaption) {
        echo '</div>';
    } ?>

</div>