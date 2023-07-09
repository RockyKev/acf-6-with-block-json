<?php 

// Relationship Field
// https://www.advancedcustomfields.com/resources/relationship/

$relationship = get_field('relationship');

// do_action('qm/debug', 'Relationship Object');
// do_action('qm/debug', $relationship);

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-orange-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Relationship</h1>

    <div>
    <?php 
    foreach ($relationship as $wpObject) {
        echo "<p>Post Example: " . $wpObject->post_title . " (ID: " . $wpObject->ID .")</p>";
    }

?> 
    </div>

</div>


