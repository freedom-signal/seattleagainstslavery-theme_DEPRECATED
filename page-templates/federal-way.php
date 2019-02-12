<?php
/*
Template Name: FWCAT
*/
get_header();

if ( have_rows( 'content_section' ) ):
	while ( have_rows( 'content_section' ) ) : the_row();
		if ( get_row_layout() == 'cta_section' ):
			get_template_part( 'template-parts/flexible', 'cta' );
		elseif ( get_row_layout() == 'row_section' ):
			get_template_part( 'template-parts/flexible', 'columns' );
		elseif (get_row_layout() == 'content_section'):
			get_template_part( 'template-parts/flexible', 'content' );
		endif;
	endwhile;
endif;

get_template_part('template-parts/fwcat/fwcat', 'events');
get_footer();
