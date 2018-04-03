<?php $brochures = get_field( 'brochures' );
if ( $brochures['brochures'] ): ?>
	<section class="flexible flexible--brochures">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--brochures--container">
					<?php if ( $brochures['title'] ): ?>
						<h2><?= $brochures['title']; ?></h2>
					<?php endif; ?>
					<?php if ( $brochures['subtitle'] ): ?>
						<h3><?= $brochures['subtitle']; ?></h3>
					<?php endif; ?>
					<?php foreach ( $brochures['brochures'] as $brochure ): ?>
						<div class="flexible--brochures--single">
							<a href="<?= $brochure['url']; ?>"><?= $brochure['title']; ?></a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
