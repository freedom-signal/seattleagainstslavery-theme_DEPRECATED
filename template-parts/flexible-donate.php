<?php $donate = get_field( 'donate' );
if ( $donate ): ?>
	<section class="flexible flexible--donate">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--donate--container">
					<?php foreach ( $donate['columns'] as $column ): ?>
						<div class="flexible--donate--single">
							<div class="flexible--donate--background">
								<div class="flexible--donate--single-image">
									<img src="<?= $column['icon']; ?>"/>
								</div>
								<div class="flexible--donate--single-content">
									<h3 class="flexible--donate--single-content--title"><?= $column['column_title']; ?></h3>
									<?= $column['content']; ?>
									<form>
										<div class="input-group">
											<span class="input-group-label input-group-symbol"><?= __( '$', 'foundationpress' ) ?></span>
											<input type="text" class="input-group-field" placeholder="XX">
											<span class="input-group-label input-group-cents"><?= __( '.00', 'foundationpress' ); ?></span>
											<span class="input-group-label input-group-currency"><?= __( 'USD', 'foundationpress' ); ?></span>
										</div>
										<div>
											<?php $text = 'Contribute'; ?>
											<?php if ( $column['button_text'] ):
												$text = $column['button_text'];
											endif; ?>
											<button class="button button-round button-large primary "
											        type="submit"><?= __( $text, 'foundationpress' ); ?></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<?php if ( $donate['section_footer'] ): ?>
					<div class="flexible--donate--footer">
						<h3><?= $donate['section_footer']; ?></h3>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
