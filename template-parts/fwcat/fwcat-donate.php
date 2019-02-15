<?php
if ( get_field( 'fwcat-donate' ) ):
	$donate = get_field( 'fwcat-donate' );
elseif ( get_sub_field( 'fwcat-donate' ) ):
	$donate = get_sub_field( 'fwcat-donate' );
endif;
if ( $donate ): ?>
	<section class="flexible flexible--donate">
		<div class="main-container">
			<div class="main-grid">
				<div class="flexible--donate--container">
						<div class="flexible--donate--single">
							<div class="flexible--donate--background">
								<div class="flexible--donate--single-image">
									<img src="<?= $donate['icon']; ?>"/>
								</div>
								<div class="flexible--donate--single-content">
									<h3 class="flexible--donate--single-content--title"><?= $donate['title']; ?></h3>
									<?= $donate['content']; ?>
									<div class="sas-donate-form">
										<div class="sas-donate-form--input-group">
											<span class="sas-donate-form--input-group--label sas-donate-form--input-group--label-symbol">
												<?= __( '$', 'foundationpress' ) ?>
											</span>
											<input type="text" name="amount" class="sas-donate-form--input-group--field" placeholder="xx" tabindex="-1"/>
											<span class="sas-donate-form--input-group--label sas-donate-form--input-group--label-cents">
												<?= __( '.00', 'foundationpress' ); ?>
											</span>
											<span class="sas-donate-form--input-group--label sas-donate-form--input-group--label-currency">
												<?= __( 'USD', 'foundationpress' ); ?>
											</span>
										</div>
										<div class="sas-donate-form--credit-card">
											<?php if ( $donate['form'] && function_exists( 'gravity_form' ) ):
												gravity_form_enqueue_scripts( $donate['form'], true );
												gravity_form( $donate['form'], false, false, false, null, true );
											endif; ?>
										</div>
										<?php $text = __( 'Contribute', 'foundationpress' ); ?>
										<?php if ( $donate['button_text'] ):
											$text = $donate['button_text'];
										endif; ?>
										<button class="sas-donate-form--button">
											<?= $text; ?>
										</button>
									</div>
								</div>
							</div>
						</div>
				</div>
				<?php if ( $donate['donation_footer'] ): ?>
					<div class="flexible--donate--footer">
						<?= $donate['donation_footer']; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
