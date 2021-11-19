<?php
/**
 * Template Name: Page Home
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

    <?php $banner_img = get_field('header_image'); ?>
    <section class="home-banner" style="background-image:url(<?php echo wp_get_attachment_image_url( $banner_img, 'full' ); ?>);">
      <div class="container">
        <div class="el__meta wow fadeInUp">
          <div>
            <h2 class="el__title"><?php the_field('header_title'); ?></h2>
          </div>
        </div>
      </div>
    </section>

    <?php $intro_image = get_field('intro_image'); ?>
    <section class="home-intro">
      <div class="container">
        <div class="row gx-lg-5">
          <div class="col-md-6 order-md-2">
            <div class="el__meta wow fadeInRight">
              <div class="sc__header">
                <h2 class="sc__header__title"><span><?php the_field('intro_title') ?></span></h2>
              </div>
              <div class="el__excerpt">
                <?php the_field('intro_excerpt') ?>
              </div>
              <a href="<?php the_field('intro_link') ?>" class="sc__readmore">Xem thêm</a>
            </div>
          </div>
          <div class="col-md-6">
            <?php if($banner_img): ?>
              <div class="el__thumb wow fadeInLeft">
                <?php echo wp_get_attachment_image( $intro_image, 'full' ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>

        <?php
        if( have_rows('intro_3box') ):
          echo '<div class="el__boxs row">';
            while( have_rows('intro_3box') ) : the_row();
              $box_image = get_sub_field('image');
              $sub_title = get_sub_field('title');
              $sub_content = get_sub_field('content');
              ?>
              <div class="col-md-4 d-md-flex">
                <div class="el__box ef--border wow fadeInLeft">
                  <?php echo wp_get_attachment_image( $box_image, 'full' ); ?>
                  <h3 class="el__box__title"><?php echo $sub_title ?></h3>
                  <div class="el__box__excerpt"><?php echo $sub_content ?></div>
                </div>
              </div>
            <?php endwhile;
          echo '</div>';
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
      </div>
    </section>

    <section class="home-solution">
      <div class="container">
        <div class="sc__header text-center wow fadeInUp">
          <h2 class="sc__header__title"><span><?php the_field('solution_title') ?></span></h2>
        </div>

        <h3 class="el__title text-center wow fadeInUp"><?php the_field('solution_excerpt') ?></h3>
      </div>

      <?php
        if( have_rows('solution_items') ):
          echo '<div class="home-solution-slider slickfix wow fadeInUp">';
          $i = 0;
            while( have_rows('solution_items') ) : the_row(); $i++;
              $box_image = get_sub_field('image');
              $sub_content = get_sub_field('content');
              ?>
              <div class="el__item">
                <div class="row gx-0 align-items-center">
                  <div class="col-md-6">
                    <div class="el__item__thumb">
                      <div class="dnfix__thumb">
                        <?php echo wp_get_attachment_image( $box_image, 'full' ); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 d-flex align-items-center">
                    <div class="el__item__meta">
                      <h3 class="el__item__title"><span class="-number"><?php echo $i; ?></span></h3>
                      <div class="el__item__excerpt"><?php echo $sub_content ?></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
          echo '</div>';
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </section>


    <?php $term_link = get_field('new_link');?>
    <section class="home-news">
      <div class="container">
        <div class="sc__header text-center wow fadeInUp">
          <h2 class="sc__header__title"><span><?php the_field('new_title') ?></span></h2>
        </div>
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $the_query = new WP_Query( $args ); ?>

        <?php if ( $the_query->have_posts() ) : ?>
          <div class="home-news-slider wow fadeInUp">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="slick__wrap">
              <?php get_template_part( 'template-parts/content','archive'); ?>
            </div>
          <?php endwhile;?>
          </div>
          <?php
          wp_reset_postdata();
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif; ?>
        <div class="text-center wow fadeInUp">
          <a href="<?php echo get_term_link( $term_link ); ?>" class="sc__readmore">Xem thêm</a>
        </div>
      </div>
    </section>
<?php endwhile; ?>
<?php get_footer();