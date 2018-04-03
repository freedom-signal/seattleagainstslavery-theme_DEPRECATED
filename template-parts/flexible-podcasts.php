<?php $podcasts = get_field( 'podcast' );
if ( $podcasts['podcasts'] ): ?>
	<section class="flexible flexible--podcasts">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--podcasts--container">
					<?php if ( $podcasts['title'] ): ?>
						<h2><?= $podcasts['title']; ?></h2>
					<?php endif; ?>
					<?php if ( $podcasts['podcasts'] ): ?>
						<?php foreach ( $podcasts['podcasts'] as $podcast ): ?>
							<div class="flexible--podcasts--single">
								<a href="<?= $podcast['url']; ?>"><?= $podcast['title']; ?></a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
