<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part('template-parts/blog/blog', 'hero'); ?>

<div class="main-container">
  <div class="main-grid">
    <main class="main-content-full-width">
      
      <?php while (have_posts()):
      	the_post(); ?>
        
        <?php get_template_part('template-parts/blog/blog-post', 'full'); ?>
          
      <?php
      endwhile; ?>
    </main>
  </div>
</div>

<?php get_footer();
