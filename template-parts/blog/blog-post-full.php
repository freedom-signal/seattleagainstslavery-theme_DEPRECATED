<article id="post-<?php the_ID(); ?>" <?php post_class(
	'content--post-container'
); ?>>

	<section class="content--post-date">
		<?php foundationpress_entry_date(); ?>
  </section>
    
	<section class="content--post-content">


		<div class="entry-content">
			<?php the_content(); ?>
    </div>

    <!-- <div class="content--post-content--meta">
      <?php foundationpress_entry_meta_full(); ?>
    </div> -->
	</section>
</article>
