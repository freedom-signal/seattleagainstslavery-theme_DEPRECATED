<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once 'library/cleanup.php';

/** Required for Foundation to work properly */
require_once 'library/foundation.php';

/** Format comments */
require_once 'library/class-foundationpress-comments.php';

/** Register all navigation menus */
require_once 'library/navigation.php';

/** Add menu walkers for top-bar and off-canvas */
require_once 'library/class-foundationpress-top-bar-walker.php';
require_once 'library/class-foundationpress-mobile-walker.php';

/** Create widget areas in sidebar and footer */
require_once 'library/widget-areas.php';

/** Return entry meta information for posts */
require_once 'library/entry-meta.php';

/** Enqueue scripts */
require_once 'library/enqueue-scripts.php';

/** Add theme support */
require_once 'library/theme-support.php';

/** Add Nav Options to Customer */
require_once 'library/custom-nav.php';

/** Change WP's sticky post class */
require_once 'library/sticky-posts.php';

/** Configure responsive image sizes */
require_once 'library/responsive-images.php';

/** Add theme options */
require_once 'library/theme-options.php';

/** Custom post types */
require_once 'library/custom-post-type.php';

/** Don't allow automatic ping backs */
function remove_x_pingback($headers)
{
	unset($headers['X-Pingback']);
	return $headers;
}
add_filter('wp_headers', 'remove_x_pingback');

// Remove the links to xmlrpc.php and wlwmanifest.xml
function removeHeadLinks()
{
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');

// Change the description sent to stripe when a One Time Donation is made.
add_filter(
	'gform_stripe_charge_description',
	'change_stripe_description',
	10,
	5
);

function change_stripe_description(
	$description,
	$strings,
	$entry,
	$submission_data,
	$feed
) {
	return $submission_data['form_title'];
}

//Add memo to stripe reciepts
add_filter( 'gform_stripe_object', 'add_memo_to_stripe', 10, 2 );
function add_memo_to_stripe( $args, $form_id ){
    $args['memo'] = "Seattle Against Slavery is a 501(c)3 nonprofit corporation; tax ID# 27-2026973. Your contribution may be fully tax deductible according to the law, as no goods or services were received in exchange for your gift. Please retain this email for your tax purposes, and consult your financial advisor for further information.";
    return $args;
}

// Make a custon excerpt for blog list
function ce4_excerpt_length($length)
{
	return 60;
}
add_filter('excerpt_length', 'ce4_excerpt_length');

function ce4_excerpt_more($more)
{
	global $post;
	return '...';
}
add_filter('excerpt_more', 'ce4_excerpt_more');

/**
 * Use ACF image field as avatar
 * @author Mike Hemberger
 * @link http://thestizmedia.com/acf-pro-simple-local-avatars/
 * @uses ACF Pro image field (tested return value set as Array )
 */
add_filter('get_avatar', 'tsm_acf_profile_avatar', 10, 5);
function tsm_acf_profile_avatar( $avatar, $id_or_email, $size, $default, $alt ) {
    // Get user by id or email
    if ( is_numeric( $id_or_email ) ) {
        $id   = (int) $id_or_email;
        $user = get_user_by( 'id' , $id );
    } elseif ( is_object( $id_or_email ) ) {
        if ( ! empty( $id_or_email->user_id ) ) {
            $id   = (int) $id_or_email->user_id;
            $user = get_user_by( 'id' , $id );
        }
    } else {
        $user = get_user_by( 'email', $id_or_email );
    }
    if ( ! $user ) {
        return $avatar;
    }
    // Get the user id
    $user_id = $user->ID;
    // Get the file id
    $image_id = get_user_meta($user_id, 'image', true); // CHANGE TO YOUR FIELD NAME
    // Bail if we don't have a local avatar
    if ( ! $image_id ) {
        return $avatar;
    }
    // Get the file size
    $image_url  = wp_get_attachment_image_src( $image_id, 'thumbnail' ); // Set image size by name
    // Get the file url
    $avatar_url = $image_url[0];
    // Get the img markup
    $avatar = '<img alt="' . $alt . '" src="' . $avatar_url . '" class="avatar avatar-' . $size . '" height="' . $size . '" width="' . $size . '">';
    // Return our new avatar
    return $avatar;
}