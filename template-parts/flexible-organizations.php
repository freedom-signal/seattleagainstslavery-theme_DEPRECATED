<?php $organizations = get_field( 'orgs' );

if ( $organizations['category'] ):
	$the_query = new WP_Query( array(
		'post_type' => 'resource',
		'tax_query' => array(
			array(
				'taxonomy' => 'type',
				'field'    => 'term_id',
				'terms'    => $organizations['category'],
			)
		),
	) );

	if ( $the_query->have_posts() ): ?>
		<section class="flexible flexible--organizations">
			<div class="main-container">
				<div class="main-grid">
					<div class="flexible--organizations--container">
						<?php if ( $organizations['title'] ): ?>
							<h2><?= $organizations['title']; ?></h2>
						<?php endif; ?>
						<?php if ( $organizations['subtitle'] ): ?>
							<h3><?= $organizations['subtitle']; ?></h3>
						<?php endif; ?>
						<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<div class="flexible--organizations--single">
								<a href="<?= get_field('url'); ?>"><?php the_title() ?></a>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;
	wp_reset_postdata();
endif; ?>
