<?php

// Enqueue CDN for tailwind

function my_enqueued_scripts() {
    wp_enqueue_script( 'tailwind_cdn', 'https://cdn.tailwindcss.com' , [], '1.0' );

}
add_action( 'wp_enqueue_scripts', 'my_enqueued_scripts' );

// Create a brand new category
// https://gutenberghub.com/how-to-create-custom-block-category
add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 'acf-block-json',
		'title' => 'ACF Block JSON Examples'
	);

	return $categories;
} );

// register all the blocks
register_block_type( get_template_directory() . '/blocks/acf-basic/email/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/number/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/password/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/range/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/text-area/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-basic/url/block.json' );

register_block_type( get_template_directory() . '/blocks/acf-advanced/color-picker/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-advanced/date-picker/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-advanced/date-time-picker/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-advanced/google-map/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-advanced/time-picker/block.json' );


register_block_type( get_template_directory() . '/blocks/acf-choice/button-group-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-choice/checkbox-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-choice/radio-button-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-choice/select-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-choice/true-false-with-text/block.json' );

register_block_type( get_template_directory() . '/blocks/acf-content/file/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-content/image/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-content/oEmbed/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-content/pro-gallery/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-content/wysiwyg/block.json' );

register_block_type( get_template_directory() . '/blocks/acf-layout/accordion-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/group-with-text/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/message/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/pro-clone/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/pro-flexible-content/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/pro-repeater-with-wysiwyg/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-layout/tab-with-wysiwyg/block.json' );


register_block_type( get_template_directory() . '/blocks/acf-relational/link/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-relational/page-link/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-relational/post-object/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-relational/relationship/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-relational/taxonomy/block.json' );
register_block_type( get_template_directory() . '/blocks/acf-relational/user/block.json' );

// TODO: create function that loops through all the blocks.
// https://developer.wordpress.org/reference/functions/register_block_type/#comment-6248



// mkdir -p "" && touch "./nested/folder/deep/more.txt"

// mkdir -p "acf-basic/text/"
// mkdir -p "acf-basic/text-area"
// mkdir -p "acf-basic/number"
// mkdir -p "acf-basic/range"
// mkdir -p "acf-basic/email"
// mkdir -p "acf-basic/url"
// mkdir -p "acf-basic/password"

// mkdir -p "acf-content/image"
// mkdir -p "acf-content/file"
// mkdir -p "acf-content/wyisywyg"
// mkdir -p "acf-content/oEmbed"
// mkdir -p "acf-content/pro-gallery"


// mkdir -p "acf-choice/select-with-text"
// mkdir -p "acf-choice/checkbox-with-text"
// mkdir -p "acf-choice/radio-button-with-text"
// mkdir -p "acf-choice/button-group-with-text"
// mkdir -p "acf-choice/true-false-with-text "

// mkdir -p "acf-relational/link"
// mkdir -p "acf-relational/post-object"
// mkdir -p "acf-relational/page-link"
// mkdir -p "acf-relational/relationship"
// mkdir -p "acf-relational/taxonomy"
// mkdir -p "acf-relational/user"

// mkdir -p "acf-advanced/google-map"
// mkdir -p "acf-advanced/date-picker"
// mkdir -p "acf-advanced/date-time-picker"
// mkdir -p "acf-advanced/time-picker"
// mkdir -p "acf-advanced/color-picker"

// mkdir -p "acf-layout/message"
// mkdir -p "acf-layout/accordion"
// mkdir -p "acf-layout/tab"
// mkdir -p "acf-layout/group"
// mkdir -p "acf-layout/pro-repeater"
// mkdir -p "acf-layout/pro-flexible-content"
// mkdir -p "acf-layout/pro-clone"
