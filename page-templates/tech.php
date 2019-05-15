<?php
/*
Template Name: Tech
*/
get_header();

if ( have_rows( 'intro_section' ) ):
	while ( have_rows( 'intro_section' ) ) : the_row();
		if ( get_row_layout() == 'content_section' ):
			get_template_part( 'template-parts/flexible', 'content' );
		endif;
	endwhile;
endif;

get_template_part('template-parts/tech/tech', 'overview');

if ( have_rows( 'tech_overview_section' ) ):
	while ( have_rows( 'tech_overview_section' ) ) : the_row();
		if ( get_row_layout() == 'content_section' ):
			get_template_part( 'template-parts/flexible', 'content' );
		endif;
	endwhile;
endif;


get_template_part('template-parts/tech/tech', 'volunteering');
get_footer();
?>
