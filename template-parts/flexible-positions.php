<?php $positions = get_field( 'positions' );
if ( $positions['positions'] ): ?>
	<section class="flexible flexible--positions">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--positions--container">
					<ul class="flexible--positions--accordion" data-accordion data-allow-all-closed="true">
						<?php foreach ( $positions['positions'] as $position ): ?>
							<li class="flexible--positions--single" data-accordion-item>
								<a class="flexible--positions--single-title" href="#"><?= $position['title']; ?></a>
								<div class="flexible--positions--single-content" data-tab-content>
									<h3><?= __( 'Responsibilities:', 'foundationpress' ); ?></h3>
									<?= $position['responsibilities']; ?>
									<h3><?= __( 'Desired Skills:', 'foundationpress' ); ?></h3>
									<?= $position['skills']; ?>
									<a
										href="mailto:<?= $position['contact']; ?>?subject=<?= $position['title']; ?> volunteer position"><?= __( 'Apply Now', 'foundationpress' ); ?></a>
								</div>
							</li>
						<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
