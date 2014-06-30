<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage wp-ratchet
 * @since wp-ratchet 0.0.1
 */

if (!current_user_can('manage_options') ) {
    error_reporting(0);
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('|', 1 ,right); ?><?php bloginfo('name'); ?></title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set a shorter title for iOS6 devices when saved to home screen -->
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">

    <!-- Include the compiled Ratchet CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>//dist/css/ratchet.min.css">
    <?php wp_head(); ?>
  </head>
  <body>