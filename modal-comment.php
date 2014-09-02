<?php
/**
 * Modal for commenting on posts and pages (NOT YET WORKING)
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */
?>
<!-- Comment Information -->
<div id="comments-<?php the_id(); ?>" class="modal">
  <header class="bar bar-nav">
    <a class="icon icon-close pull-right" href="#comments-<?php the_id(); ?>"></a>
    <h1 class="title"><?php _e('Comment') ?></h1>
  </header>

  <div class="content">
    <div class="content-padded">
      <form>
        <input type="text" placeholder="<?php _e('Full name') ?>">
        <input type="text" placeholder="<?php _e('Email (required)'); ?>">
        <textarea rows="5"></textarea>
        <button class="btn btn-positive btn-block"><?php _e('Submit') ?></button>
      </form>
    </div>
  </div>
</div>