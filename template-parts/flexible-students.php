<?php
if ( get_field( 'students' ) ):
	$students = get_field( 'students' );
elseif ( get_sub_field( 'students' ) ):
	$students = get_sub_field( 'students' );
endif;

if ( $students['category'] ):
	$the_query = new WP_Query( array(
		'posts_per_page' => - 1,
		'post_type'      => 'team',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'tax_query'      => array(
			array(
				'taxonomy' => 'organization',
				'field'    => 'term_id',
				'terms'    => $students['category'],
			)
		),
	) );

	if ( $the_query->have_posts() ): ?>
		<section class="flexible flexible--students">
			<div class="main-container">
				<div class="main-grid">
					<div class="flexible--students--container">
						<?php if ( $students['title'] ): ?>
							<h1 class="flexible--students--title"><?= $students['title']; ?></h1>
						<?php endif; ?>
						<?php while ( $the_query->have_posts() ): $the_query->the_post(); ?>
							<div class="flexible--students--single">
								<?php if ( get_field( 'email' ) ): ?>
								<a href="mailto:<?php the_field( 'email' ); ?>">
									<?php endif; ?>
									<?php
									$thumbnail = get_stylesheet_directory_uri() . '/dist/assets/images/member.png';
									if ( has_post_thumbnail() ):
										$thumbnail = get_the_post_thumbnail_url();
									endif; ?>
									<div class="flexible--students--single-image" style="background-image: url('<?= $thumbnail; ?>')">
										<div class="flexible--students--single-image--hover">
											<?= __( 'Email Me!', 'foundationpress' ); ?>
										</div>
									</div>
									<div class="flexible--students--single-content">
										<?php the_title( '<h2>', '</h2>' ); ?>
										<h3><?php the_field( 'title' ); ?></h3>

										<?php if ( get_field( 'email' ) ): ?>
											<a class="flexible--students--single-content--email" href="mailto:<?php the_field( 'email' ); ?>">
												<?php the_field( 'email' ); ?>
											</a>
										<?php endif; ?>
									</div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif;
	wp_reset_postdata();
endif; ?>


