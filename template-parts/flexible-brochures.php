<?php $brochures = get_field( 'brochures' );
if ( $brochures ): ?>
	<section class="flexible flexible--brochures">
		<?php if ( $brochures['title'] ): ?>
			<h2><?= $brochures['title']; ?></h2>
		<?php endif; ?>
		<?php if ( $brochures['subtitle'] ): ?>
			<h3><?= $brochures['subtitle']; ?></h3>
		<?php endif; ?>
		<div class="flexible--brochures--container">
			<?php foreach ( $brochures['brochures'] as $brochure ): ?>
				<div class="flexible--brochures--single">
					<a href="<?= $brochure['url']; ?>"><?= $brochure['title']; ?></a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>
