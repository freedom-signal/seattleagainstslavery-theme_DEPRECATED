<?php
/*
Template Name: About
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image', 'about' ); ?>

<?php if ( get_field( 'approach', $post->ID ) ): ?>
	<section class="flexible flexible--content">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--container">
					<?= get_field( 'approach', $post->ID ); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_template_part( 'template-parts/flexible', 'staff' ); ?>
<?php get_template_part( 'template-parts/flexible', 'students' ); ?>
<?php get_template_part( 'template-parts/flexible', 'directors' ); ?>
<?php get_footer();?>
