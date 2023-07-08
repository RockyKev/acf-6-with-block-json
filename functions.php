<?php

// Enqueue CDN for tailwind
wp_enqueue_script( 'tailwind_cdn', 'https://cdn.tailwindcss.com' , [], '1.0' );


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
register_block_type( get_template_directory() . '/blocks/acf-basic/text/block.json' );




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
