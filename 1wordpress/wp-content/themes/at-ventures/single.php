<?php
/**
 * The template for displaying all single posts
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
get_header(); ?>
<div class="wrap__page -news">
    <div class="container">
        <main class="site-main" role="main">


            <div class="dn__breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))bcn_display();?>
            </div>

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
