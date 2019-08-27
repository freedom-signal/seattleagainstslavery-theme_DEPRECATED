<article id="post-<?php the_ID(); ?>" <?php post_class(
	'content--post-container'
); ?>>

	<section class="content--post-date">
		<?php foundationpress_entry_date(); ?>
  </section>
  
	<section class="content--post-content">
    <?php if (has_post_thumbnail()):

      $classes = 'content--post-content--image';
      $url = get_the_post_thumbnail_url();
      ?>
      
      <a href="<?php the_permalink(); ?>">
        <div class="<?= $classes ?>"
          style="background-image: url(<?= $url ?>);">
        </div>
      </a>
    <?php
    endif; ?>

    <div class='content--post-content--header'>
      <?php the_title(
        '<h2 class="content--post-content--title"><a href="' .
          esc_url(get_permalink()) .
          '">',
        '</a></h2>'
      ); ?>
        
      <span class="content--post-content--meta">
        <?php foundationpress_entry_meta(); ?>
      </span>
    </div>
      
		<div class="entry-content">
			<?php the_excerpt(); ?>
      
      <a href="<?php the_permalink(); ?>"
				   class="button button-small button-right button-round secondary"><?= __(
       	'Read more',
       	'foundationpress'
       ) ?></a>
    </div>
    
	</section>
</article>
