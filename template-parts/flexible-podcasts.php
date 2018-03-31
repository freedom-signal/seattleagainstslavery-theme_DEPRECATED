<?php $podcasts = get_field( 'podcast' );
if ( $podcasts['podcasts'] ): ?>
	<section class="flexible flexible--podcasts">
		<?php if ( $podcasts['title'] ): ?>
			<h2><?= $podcasts['title']; ?></h2>
		<?php endif; ?>
		<div class="flexible--podcasts--container">
			<?php if ( $podcasts['podcasts'] ): ?>
				<?php foreach ( $podcasts['podcasts'] as $podcast ): ?>
					<div class="flexible--podcasts--single">
						<a href="<?= $podcast['url']; ?>"><?= $podcast['title']; ?></a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>
