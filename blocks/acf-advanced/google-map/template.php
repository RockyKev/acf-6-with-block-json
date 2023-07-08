<?php 

// Google Map Field
// https://www.advancedcustomfields.com/resources/google-map/

// TODO: Can't seem to get this to work without setting up proper api key

// Note: this requires additional setup. Ideally, you are adding this in a appropriate place, and NOT inside this template file. This is simply for explanation purposes. 

// You have been warned.

$googleMapsData = get_field('google_map');
$latitude =  esc_attr($googleMapsData['lat']);
$longitude =  esc_attr($googleMapsData['lng']);

function my_acf_init() {
    acf_update_setting('google_api_key', 'xxx');
}
add_action('acf/init', 'my_acf_init');





$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="google-maps outline outline-4 outline-green-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-advanced/Google Map</h1>
    <h2>Note: Requires api key</h2>

    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?= $latitude; ?>" data-lng="<?= $longitude; ?>"></div>
    </div>

</div>


