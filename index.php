<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */
get_header(); ?>

<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
  <a class="icon icon-home pull-left" href="<?php echo site_url(); ?>"></a>
  <a class="icon icon-search pull-right" href="#search"></a>
  <a href="#browse">
    <h1 class="title">
      <?php bloginfo('name'); ?>
      <span class="icon icon-caret"></span>
    </h1>
  </a>
</header>

<!-- Icons in standard bar fixed to the bottom of the screen -->
<div class="bar bar-standard bar-footer">
  <?php $previous = _('Previous page'); previous_posts_link("<span class=\"icon icon-left-nav\"></span> $previous"); ?>
  <?php $next = _('Next page'); next_posts_link("$next <span class=\"icon icon-right-nav\"></span>"); ?>
</div>

<?php get_template_part( 'nav', 'popover' ); ?>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
  <ul class="table-view">
    <!-- Start the Loop. -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li class="table-view-cell media">
      <a href="<?php the_permalink() ?>" class="navigate-right" data-transition="slide-in">
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumbnail', array('class' => 'media-object pull-left'));
        } ?>
        <div class="media-body">
          <?php the_title(); ?>
          <?php the_excerpt(); ?>
        </div>
      </a>
    </li>

    <?php endwhile; else: ?>
     <!-- The very first "if" tested to see if there were any Posts to -->
     <!-- display.  This "else" part tells what do if there weren't any. -->
     <li class="table-view-cell media">
     <span class="media-object pull-left icon icon-close"></span>
      Not found
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    </li>

     <!-- REALLY stop The Loop. -->
     <?php endif; ?>
  </ul>
</div>



<!-- Comment Information -->
<div id="search" class="modal">
  <header class="bar bar-nav">
    <a class="icon icon-close pull-right" href="#search"></a>
    <h1 class="title"><?php _e('Search'); ?></h1>
  </header>

  <div class="content content-padded">

    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
      <input type="search" placeholder="What are you trying to find?" value="<?php the_search_query(); ?>" name="s" id="s">
      <button class="btn btn-positive btn-block" id="searchsubmit"><?php _e('Submit'); ?></button>
    </form>
  </div>
</div>

<?php get_footer(); ?>
