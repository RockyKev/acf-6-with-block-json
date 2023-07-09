<?php 

// Image Field
// https://www.advancedcustomfields.com/resources/image/

// image

$image = get_field('image');
$size = 'medium';

$img_src = esc_url(wp_get_attachment_image_url( $image, 'medium' ));
$img_srcset = esc_attr(wp_get_attachment_image_srcset( $image, 'medium' ));
$img_alt = esc_attr($image['alt']);
$img_sizes = "(max-width: 50em) 87vw, 680px";

do_action( 'qm/debug', 'Image tag' );
do_action( 'qm/debug', $image );

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

<h1 class="text-4xl underline pb-4">ACF-content/Image</h1>

    <p>Test email: <?= $email; ?></p>

    <img src="<?=  $img_src; ?>"
     srcset="<?= $img_srcset; ?>"
     sizes="<?= $img_sizes;?> " alt="<?= $img_alt; ?>">


</div>


