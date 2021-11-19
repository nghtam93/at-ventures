<?php
/**
 * Template Name: Page About
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
<div class="wrap__page -introduce">

    <section class="page__header">
        <div class="container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
        </div>
    </section>

    <section class="about-content">
      <div class="container">
        <div class="sc__header text-center wow fadeInUp">
          <h2 class="sc__header__title"><span><?php the_field('title') ?></span></h2>
        </div>

        <div class="el row gx-lg-5">
          <div class="col-md-6 order-md-2">
            <div class="el__excerpt">
              <?php the_field('content') ?>
            </div>
          </div>
          <?php $image = get_field('image'); ?>
          <div class="col-md-6">
            <div class="el__thumb">
              <div class="dnfix__thumb">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="sc__header text-center wow fadeInUp">
          <h2 class="sc__header__title"><span><?php the_field('title2') ?></span></h2>
        </div>

        <div class="kgroup__item">
          <div class="row gx-lg-5 align-items-center">
            <div class="col-md-6 order-md-2">
              <div class="kgroup__excerpt"><?php the_field('content2') ?></div>
            </div>
            <?php $image2 = get_field('image2'); ?>
            <div class="col-md-6">
              <div class="kgroup__thumb">
                <?php echo wp_get_attachment_image( $image2, 'full' ); ?>
              </div>
            </div>
          </div>
        </div>

        <?php
        if( have_rows('group_items') ):
          echo '<div class="el2 row gx-lg-40 justify-content-center">';
          $i=0;
            while( have_rows('group_items') ) : the_row(); $i++;
              ?>
              <?php if($i==3) echo '<div class="w-100"></div>'; ?>
                <div class="col-md-4 el__col d-md-flex">
                    <div class="el2__item">
                      <div class="el2__number">
                        <p>NHÓM</p>
                        <p class="-number"><?php echo $i; ?></p>
                      </div>
                      <div class="el2__excerpt"><?php the_sub_field('content') ?></div>
                    </div>
                </div>
            <?php endwhile;
          echo '</div>';
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>

        <?php
        $images = get_field('gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
            <div class="about-slider">
                <?php foreach( $images as $image_id ): ?>
                    <div class="slider__item">
                        <div class="el__thumb">
                          <div class="dnfix__thumb">
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                          </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="text-center">
          <p class="el3__header__title"><?php the_field('text') ?></p>
        </div>

        <?php
        if( have_rows('kenhgd') ):
          echo '<div class="row">';
          $i=0;
            while( have_rows('kenhgd') ) : the_row(); $i++;
                $image_sub = get_sub_field('image');
            ?>
                <div class="col-md-6 d-md-flex">
                    <div class="el3__item">
                      <h3 class="el3__title"><?php the_sub_field('title') ?></h3>
                      <div class="el3__thumb mb-3">
                        <div class="dnfix__thumb">
                          <?php echo wp_get_attachment_image( $image_sub, 'full' ); ?>
                        </div>
                      </div>
                      <div class="el3__excerpt"><?php the_sub_field('content') ?></div>
                    </div>
                </div>
            <?php endwhile;
          echo '</div>';
        else :
          get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>

        <div class="el4__item">
            <?php the_field('content_big') ?>
        </div>
      </div>
    </section>

</div>
<?php endwhile; ?>
<?php get_footer();