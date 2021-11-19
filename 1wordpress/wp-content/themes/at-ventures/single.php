<?php
/**
 * The template for displaying all single posts
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
get_header(); ?>
<div class="single__wrap">

    <section class="single__header">
      <div class="container">
        <div class="dn__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))bcn_display();?>
        </div>
      </div>
    </section>

    <section class="single-content">
        <div class="container">
            <div class="el__header">
              <h1 class="entry-title"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></h1>
              <div class="single__date"><?php echo get_the_time("d/m/Y"); ?></div>
            </div>

            <div class="entry-content"><?php the_content(); ?></div>
        </div>
    </section>


    <div class="container">
        <main class="site-main" role="main">

            <div class="row">
                <div class="col-12 col-lgb-27">
                    <?php get_sidebar('blog'); ?>
                </div>
                <div class="col-12 col-lgb-73">
                	<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content','single');
						endwhile;
					?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer();
