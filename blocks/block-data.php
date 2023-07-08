<?php 

// Dynamic block ID
$block_id = 'my-first-block-' . $block['id'];

// Check if a custom ID is set in the block editor
if( !empty($block['anchor']) ) {
    $block_id = $block['anchor'];
}

// Block classes
$class_name = 'my-first-block';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}
