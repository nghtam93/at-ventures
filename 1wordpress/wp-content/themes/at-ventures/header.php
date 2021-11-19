<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div class="wrapper">
    <header class="header -fix">
        <div class="container d-flex align-items-center">
          <div class="d-lg-none me-3">
              <a href="#" class="menu-mb__btn">
                <span class="iconz-bar"></span>
                <span class="iconz-bar"></span>
                <span class="iconz-bar"></span>
              </a>
          </div>

          <?php
          $logo_img = get_field('logo', 'option');
          $taglogo = (is_home()) ? 'h1' : 'p'; ?>

          <<?php echo $taglogo; ?> class="logo">
              <a href="<?php echo site_url(); ?>" class="" title="<?php bloginfo("name"); ?>">
                <?php echo wp_get_attachment_image( $logo_img, 'full' ); ?>
              </a>
          </<?php echo $taglogo; ?>>

          <nav class="main__nav ms-auto d-none d-lg-block">
            <?php
              wp_nav_menu(
              array(
                 'theme_location'  => 'primary',
                 'container'       => 'ul',
                 'container_class' => '',
                 'menu_id'         => '',
                 'menu_class'      => 'el__menu',
              ));
            ?>
          </nav>

          <?php get_search_form() ?>

        </div>
    </header>