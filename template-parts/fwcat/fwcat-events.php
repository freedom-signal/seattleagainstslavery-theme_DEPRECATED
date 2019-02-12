<?php

if(function_exists('tribe_get_events')):
$events = tribe_get_events( array(
	'eventDisplay'		=>	'upcoming',
  'posts_per_page' => 3,
  'tag' => 'FWCAT'
) );

if ( $events ): ?>
	<section class="flexible flexible--content events--fwcat">
				<div class="events-container">

					<h2 class="title">
						<span class="spacer"></span>
						<span><?= __( 'Upcoming FWCAT Events', 'foundationpress' ); ?></span>
						<span class="spacer"></span>
					</h2>

					<div class="events-wrapper">

						<?php foreach ( $events as $event ): ?>
							<div class="single-event">
								<a href="<?= esc_url( tribe_get_event_link( $event->ID ) ); ?>">
                  <h4 class="date">
                    <?= tribe_events_event_schedule_details( $event->ID ); ?>
                  </h4>
                  <h4><?= $event->post_title; ?></h4>

									<h4>
										<?= tribe_get_venue( $event->ID ) ?>
									</h4>
								</a>
							</div>
						<?php endforeach; ?>
		
					</div>

          <div class="events-footer">
            <a class="button" href="/events/category/fwcat/list/">
              <?= __( 'View More', 'foundationpress' ); ?>
            </a>
          </div>

				</div>
			</div>
	</section>
<?php endif;
endif; ?>
