<?php $organizations = get_field( 'orgs' );
if ( $organizations ): ?>
	<section class="flexible flexible--organizations">
		<?php if ( $organizations['title'] ): ?>
			<h2><?= $organizations['title']; ?></h2>
		<?php endif; ?>
		<?php if ( $organizations['subtitle'] ): ?>
			<h3><?= $organizations['subtitle']; ?></h3>
		<?php endif; ?>
		<div class="flexible--organizations--container">
			<?php foreach ( $organizations['orgs'] as $organization ): ?>
				<div class="flexible--organizations--single">
					<a href="<?= $organization['url']; ?>"><?= $organization['title']; ?></a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
<?php endif; ?>
