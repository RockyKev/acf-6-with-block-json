# Advanced Custom Fields 6 + Blocks.json

This wordpress theme is using [Advanced Custom Fields 6](https://www.advancedcustomfields.com/resources/acf-blocks-with-block-json/) + [Blocks.json](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/) to create WordPress Blocks using PHP. 

This repo is a more of a reference guide for ACF 6 + Blocks.json, rather than a full-blown wordpress theme. 

Use these examples to help you create ACF Blocks quickly with PHP.

## Features: 

* All ACF fields listed here has a cooresponding block: https://www.advancedcustomfields.com/resources/
* These blocks are written as 'bare bones' as possible, to explain how to get it to work.
* Tailwind is used to quickly lay out UI elements. It's not required.
* Blocks are listed inside the `/blocks` folder, and broken into categories. Each block contains:
    * REQUIRED: `block.json` file, to contain the block metadata. NOTE: to use `register_block_type()`, the file must have `block.json` in the filename.
    * REQUIRED: `template.php` manages the view for both the WordPress Editor AND the User Frontend.
    * OPTIONAL: `style.css` if the block has custom css. This must be declared in `block.json`
    * OPTIONAL: `script.js` if the block has custom js. This must be declared in `block.json`
* Blocks are registered in the `/blocks/register-blocks.php` file using [register_block_type()](https://developer.wordpress.org/reference/functions/register_block_type/);




## Resources:
* https://joeyfarruggio.com/wordress/register-acf-blocks/#register-block