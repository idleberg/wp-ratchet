<?php
/**
 * Modal for display meta-data of posts and pages 
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */
?>
<!-- Meta Information -->
<div id="meta-<?php the_id(); ?>" class="modal">
  <header class="bar bar-nav">
    <a class="icon icon-close pull-right" href="#meta-<?php the_id(); ?>"></a>
    <h1 class="title">Meta</h1>
  </header>

  <div class="content content-padded">
    <p><?php _e('Title'); ?>: <?php the_title(); ?><br/>
      <?php _e('ID'); ?>: <?php the_id(); ?><br/>
      <?php _e('Author'); ?>: <?php the_author_posts_link(); ?><br/>
      <?php _e('Published'); ?>: <?php the_date(); ?><br/>
      <?php _e('Shortlink'); ?>: <?php echo wp_get_shortlink(); ?><?php the_tags(); ?><br/>
      <?php the_tags(); ?></p>
  </div>
</div>