<?php 

// User Field
// https://www.advancedcustomfields.com/resources/user/

$email = esc_html(get_field('email'));

$user = get_field('user');

// do_action('qm/debug', 'user Object');
// do_action('qm/debug', $user);
// do_action('qm/debug', $user['nickname']);

$additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
?>

<div class="outline outline-4 outline-orange-500 py-4 my-4 <?= $additionalClasses; ?>">

    <h1 class="text-4xl underline pb-4">ACF-relational/User</h1>

    <p>The user selected is: <?=  $user['display_name'];?> (ID:<?=  $user['ID'];?>) </p>

</div>


