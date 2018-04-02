<?php

function register_cpt() {

	$labels = array(
		'name'          => __( 'Team Members', 'foundationpress' ),
		'singular_name' => __( 'Team Member', 'foundationpress' ),
	);

	$args = array(
		'has_archive' => true,
		'label'       => __( 'Team Members', 'foundationpress' ),
		'labels'      => $labels,
		'menu_icon'   => 'dashicons-admin-users',
		'public'      => true,
		'rewrite'     => array( 'slug' => 'team', 'with_front' => true ),
		'show_ui'     => true,
		'supports'    => array( 'title', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'team', $args );

	register_taxonomy( 'organization', array( 'team' ), array(
			'hierarchical'   => true,
			'label'          => 'Organization',
			'singular_label' => 'Organization',
			'rewrite'        => array(
				'slug'       => 'team',
				'with_front' => false
			)
		)
	);

	register_taxonomy_for_object_type( 'categories', 'team' );
}

add_action( 'init', 'register_cpt' );
