<?php

// PRO Gallery Field
// https://www.advancedcustomfields.com/resources/gallery/

$galleryImages = get_field('gallery');
$size = 'full';

// TODO: Review
// gallery


$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-blue-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-content/PRO Gallery</h1>

    <?php if ($galleryObject) : ?>
        <div class="m-1 flex flex-wrap">

            <?php foreach ($galleryImages as $image_id) : ?>
                <div class="flex w-1/3 flex-wrap">
                    <div class="w-full p-1 md:p-2">
                        <?php echo wp_get_attachment_image($image_id, $size); ?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>