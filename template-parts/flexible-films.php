<?php $films = get_field( 'films' );
if ( $films['films'] ): ?>
	<section class="flexible flexible--films">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--films--container">
					<?php if ( $films['title'] ): ?>
						<h2><?= $films['title']; ?></h2>
					<?php endif; ?>
					<?php if ( $films['subtitle'] ): ?>
						<h3><?= $films['subtitle']; ?></h3>
					<?php endif; ?>
					<?php if ( $films['films'] ): ?>
						<?php foreach ( $films['films'] as $film ): ?>
							<div class="flexible--films--single">
								<a href="<?= $film['url']; ?>">
									<span><?= $film['title']; ?></span>
								</a>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
