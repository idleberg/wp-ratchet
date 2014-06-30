<?php
/**
 * Modal for sharing on posts and pages 
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */
?>
<!-- Share Post -->
<div id="share-<?php the_id(); ?>" class="modal">
  <header class="bar bar-nav">
    <a class="icon icon-close pull-right" href="#share-<?php the_id(); ?>"></a>
    <h1 class="title"><?php _e('Sharing Buttons'); ?></h1>
  </header>

  <div class="content content-padded">
    <p>Share this post with your friends on popular social networking sites or by mail</p>
    <a href="https://twitter.com/intent/tweet?text=<?php urlencode(the_title()); ?>&amp;url=<?php the_permalink(); ?>" class="btn btn-block">Twitter</a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn btn-block">Facebook</a>
    <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="btn btn-block">Google+</a>
    <a href="mailto:?subject=<?php urlencode(the_title()); ?>&amp;body=<?php urlencode(the_excerpt()); the_permalink(); ?>" class="btn btn-block">Mail</a>
  </div>
</div>