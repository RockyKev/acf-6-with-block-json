<?php 

// Message Field

$message = get_field('message');

// TODO: fix this
// message

// $email = esc_html(get_field('email'));

// $additionalClasses = !empty($block['className']) ? $block['className'] : 'no-classes-added';
do_action( 'qm/debug', 'Message tag' );
do_action( 'qm/debug', $block );
do_action( 'qm/debug', $message );

?>


<div class="admin-message-block outline outline-4 outline-blue-500 py-4 my-4">

<h1 class="text-4xl underline pb-4">ACF-layout/Message</h1>

</div>


