<?php
/**
 * Template Name: Page Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
global $dn_options;
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="page__header">
  <div class="container">
    <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
  </div>
</section>
<div class="page__contact">
  <div class="container">
    <div class="row gx-lg-5">
      <div class="col-md-6 d-md-flex align-items-center">
        <ul class="ul__contact">
          <li class="">
            <span class="icon-map-marker"></span>
            <div class="el__label">Địa chỉ</div>
            <div class="el__value"><?php the_field('address','option') ?></div>
          </li>
          <li class="">
            <span class="icon-email"></span>
            <div class="el__label">Email</div>
            <div class="el__value"><a href="mailto:<?php the_field('email','option') ?>"><?php the_field('email','option') ?></a></div>
          </li>
          <li class="">
            <span class="icon-phone"></span>
            <div class="el__label">Hotline</div>
            <div class="el__value"><?php the_field('hotline','option') ?></div>
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <?php the_content() ?>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_footer();