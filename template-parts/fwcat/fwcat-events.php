<?php

if (function_exists('tribe_get_events')):
    $events = tribe_get_events(array(
        'eventDisplay' => 'upcoming',
        'posts_per_page' => 3,
        'tax_query'=> array(
					array(
						'taxonomy' => 'tribe_events_cat',
						'field' => 'slug',
						'terms' => 'FWCAT'
					)
				)
    ));

    if ($events): ?>
			  <section class="flexible flexible--content events--fwcat">
		      <div class="events-container">

		          <h2 class="title">
		            <span class="spacer"></span>
		            <span><?=__('Upcoming FWCAT Events', 'foundationpress');?></span>
		            <span class="spacer"></span>
		          </h2>


							<?php foreach ($events as $event): ?>
								<div class="single-event">
									<a href="<?=esc_url(tribe_get_event_link($event->ID));?>">
										<h5 class="date">
											<?=tribe_events_event_schedule_details($event->ID);?>
										</h5>
										<h5><?=$event->post_title;?></h5>

										<h5 class="venue">
											<?=tribe_get_venue($event->ID)?>
										</h5>
									</a>
								</div>
							<?php endforeach;?>


          <div class="events-footer">
            <a class="button" href="/events/category/fwcat/list/">
              <?=__('View more FWCAT events ⟶', 'foundationpress');?>
            </a>
          </div>

				</div>
			</div>
	</section>
<?php endif;
endif;?>
