<?php $directors = get_field( 'directors' );
$the_query       = new WP_Query( array(
	'post_type' => 'team',
	'tax_query' => array(
		array(
			'taxonomy' => 'organization',
			'field'    => 'term_id',
			'terms'    => $directors['category'],
		)
	),
) );

if ( $the_query->have_posts() ): ?>
	<section class="flexible flexible--directors">
		<?php if ( $directors['title'] ): ?>
			<h2 class="flexible--directors--title"><?= $directors['title']; ?></h2>
		<?php endif; ?>
		<div class="flexible--directors--container">
			<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
				<div class="flexible--directors--single">
					<a href="mailto:<?php the_field( 'email' ); ?>">
						<?php
						$thumbnail = get_stylesheet_directory_uri() . '/dist/assets/images/member.png';
						if ( has_post_thumbnail() ):
							$thumbnail = get_the_post_thumbnail_url();
						endif; ?>
						<div class="flexible--directors--single-image" style="background-image: url('<?= $thumbnail; ?>')">
							<div class="flexible--directors--single-image--hover">
								<?= __('Questions?', 'foundationpress'); ?>
								<?= __('Email Me!', 'foundationpress'); ?>
							</div>
						</div>
						<div class="flexible--directors--single-content">
							<?php the_title( '<h2>', '</h2>' ); ?>
							<h3><?php the_field( 'title' ); ?></h3>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif;

wp_reset_postdata(); ?>


