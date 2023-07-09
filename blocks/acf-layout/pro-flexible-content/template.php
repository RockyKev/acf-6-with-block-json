<?php

// Flexible Content Field
// https://www.advancedcustomfields.com/resources/flexible-content/

$flexibleContentGroup = get_field('flexible_content_group');

// TODO: fix

// flexible_content_group
// flexible_content_1 -> text
// flexible_content_2 -> text 
// flexible_content_3 -> text
// flexible_content_4 -> text
// flexible_content_5 -> text

// do_action('qm/debug', 'Flexible Content tag');
// do_action('qm/debug', $flexibleContentGroup);


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-layout/PRO Flexible Content</h1>

    <div class="flex flex-column">
    <?php
    foreach ($flexibleContentGroup as $flexibleContent) {

        // do_action('qm/debug', $flexibleContent);
        switch ($flexibleContent['acf_fc_layout']) {
            case "flexible_content_1":
            case "flexible_content_2":
            case "flexible_content_3":
            case "flexible_content_4":
            case "flexible_content_5":
                echo "<div>" . $flexibleContent['text'] . "</div>";
                break;
            default:
                echo "<div>Not part of the flexible content</div>";
        }
    }

    ?>
    </div>

</div>