<?php $organizations = get_field( 'orgs' );
if ( $organizations['orgs'] ): ?>
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
					<?php foreach ( $organizations['orgs'] as $organization ): ?>
						<div class="flexible--organizations--single">
							<a href="<?= $organization['url']; ?>"><?= $organization['title']; ?></a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
