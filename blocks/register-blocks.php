<?php

function acf_blocks_json_register_blocks() {

    // TODO: A function that looks through the files and imports all json correctly

    // register all the blocks
    register_block_type(get_template_directory() . '/blocks/acf-basic/email/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-basic/number/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-basic/password/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-basic/range/block.json');
 
    register_block_type(get_template_directory() . '/blocks/acf-basic/text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-basic/text-with-support/block.json');    

    register_block_type(get_template_directory() . '/blocks/acf-basic/text-area/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-basic/url/block.json');

    // 
    register_block_type(get_template_directory() . '/blocks/acf-advanced/color-picker/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-advanced/date-picker/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-advanced/date-time-picker/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-advanced/google-map/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-advanced/time-picker/block.json');


    register_block_type(get_template_directory() . '/blocks/acf-choice/button-group-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-choice/checkbox-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-choice/radio-button-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-choice/select-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-choice/true-false-with-text/block.json');

    register_block_type(get_template_directory() . '/blocks/acf-content/file/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-content/image/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-content/oEmbed/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-content/pro-gallery/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-content/wysiwyg/block.json');

    register_block_type(get_template_directory() . '/blocks/acf-layout/accordion-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/group-with-text/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/message/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/pro-clone/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/pro-flexible-content/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/pro-repeater-with-wysiwyg/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-layout/tab-with-wysiwyg/block.json');


    register_block_type(get_template_directory() . '/blocks/acf-relational/link/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-relational/page-link/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-relational/post-object/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-relational/relationship/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-relational/taxonomy/block.json');
    register_block_type(get_template_directory() . '/blocks/acf-relational/user/block.json');
}

add_action('init', 'acf_blocks_json_register_blocks');
