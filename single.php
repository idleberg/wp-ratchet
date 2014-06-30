<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage WP-Ratchet
 */

get_header(); ?>

<!-- Start the Loop. --> 
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Make sure all your bars are the first things in your <body> -->
  <header class="bar bar-nav">
    <h1 class="title"><?php the_title(); ?></h1>
    <a href="<?php echo site_url(); ?>" class="btn btn-link btn-nav pull-left" data-transition="slide-out">
      <span class="icon icon-left-nav"></span>
      <?php _e('Back'); ?>
    </a>
    <?php if(current_user_can('edit_post')) { ?>
    <a href="<?php echo get_edit_post_link(); ?>" class="icon icon-edit pull-right" data-transition="slide-in"></a>
    <?php } ?>
  </header>

  <nav class="bar bar-tab">
    <a class="tab-item" href="#comments-<?php the_id(); ?>">
      <span class="icon icon-compose"></span>
      <span class="tab-label"><?php _e('Comments'); ?></span>
    </a>
    <a class="tab-item" href="#meta-<?php the_id(); ?>">
      <span class="icon icon-info"></span>
      <span class="tab-label">Meta</span>
    </a>
    <a class="tab-item" href="#share-<?php the_id(); ?>">
      <span class="icon icon-share"></span>
      <span class="tab-label"><?php _e('Share') ?></span>
    </a>
    
  </nav>

  <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
  <div class="content">
        <!-- <img class="media-object pull-left" src="http://placehold.it/42x42"> -->
        <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail('thumbnail', array('class' => 'media-object pull-left'));
        } ?>
          <p class="content-padded"><?php the_content(); ?></p>
  </div>

  <?php get_template_part( 'modal', 'share' ); ?>
  <?php get_template_part( 'modal', 'meta' ); ?>
  <?php get_template_part( 'modal', 'comment' ); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
