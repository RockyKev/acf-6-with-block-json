<?php

// Repeater Field
// https://www.advancedcustomfields.com/resources/repeater/

$repeaterContent = get_field('repeater');


$rows = get_field('repeater_field_name');
if ($rows) {
    echo '<ul class="slides">';
    foreach ($rows as $row) {
        $image = $row['image'];
        echo '<li>';
        echo wp_get_attachment_image($image, 'full');
        echo wpautop($row['caption']);
        echo '</li>';
    }
    echo '</ul>';
}

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/PRO Repeater with WYSIWYG</h1>

    <?php if ($repeaterContent) {
        foreach ($repeaterContent as $content) {
            echo "<div>$content</div>";
        }
    }; 
    ?>

</div>