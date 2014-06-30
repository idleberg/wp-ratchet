<?php
/**
 * Popover navigation to browse categories and view pages 
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */
?>
<!-- Popover -->
<div id="browse" class="popover">
  <ul class="table-view">
    <li class="table-view-divider"><?php _e('Categories'); ?></li>
    <?php
      $categories = get_categories(); 
      foreach ($categories as $category) {
        $option = '<li class="table-view-cell"><a href="'.get_category_link( $category->term_id ).'">';
        $option .= $category->cat_name.'</a>';
        $option .= '<span class="badge">'.$category->category_count.'</span>';
        $option .= '</li>';
        echo $option;
      }
    ?>

    <li class="table-view-divider"><?php _e('Pages'); ?></li>
    <?php
    $pages = get_pages(); 
    foreach ( $pages as $page ) {
      $option = '<li class="table-view-cell"><a href="' . get_page_link( $page->ID ) . '">';
      $option .= $page->post_title;
      $option .= '</a></li>';
      echo $option;
    }
    ?>
  </ul>
</div>