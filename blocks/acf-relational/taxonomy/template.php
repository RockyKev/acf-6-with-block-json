<?php 

// Taxonomy Field
// https://www.advancedcustomfields.com/resources/taxonomy/

$taxonomy = get_field('taxonomy');
// do_action('qm/debug', 'taxonomy Object!!');
// do_action('qm/debug', $taxonomy);
// do_action('qm/debug', $taxonomy[0]->name);


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-orange-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/Taxonomy</h1>

    <p>Taxonomy Example: <?= $taxonomy[0]->name; ?>  with <?= $taxonomy[0]->count; ?> counts (<?= $taxonomy[0]->taxonomy; ?>) </p> 


</div>


