<?php

// Repeater Field
// https://www.advancedcustomfields.com/resources/repeater/

$repeaterContent = get_field('repeater');

do_action('qm/debug', 'Repeater tag');
do_action('qm/debug', $repeaterContent);

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/PRO Repeater with WYSIWYG</h1>

    <?php if ($repeaterContent) {
        foreach ($repeaterContent as $content) {
            echo "<div>" . $content['wysiwyg']. "</div>";
        }
    }; 
    ?>

</div>