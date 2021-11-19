<?php
/**
 * The template for displaying archive pages
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */

get_header();
// $term = get_queried_object();
// $term_id = $term->term_id;
?>

<div class="wrap__page -news">

    <section class="page__header">
      <div class="container">
        <?php the_archive_title();?>
        <?php dntheme_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
      </div>
    </section>

    <main class="site-main" role="main">
        <div class="archive__content">
            <div class="container">
                <?php
                if ( have_posts() ) :
                    echo ' <div class="row">';
                    while ( have_posts() ) : the_post(); ?>
                         <div class="col-md-6 col-lg-4">
                            <?php get_template_part( 'template-parts/content','archive'); ?>
                        </div>
                    <?php
                    endwhile;
                    echo '</div>';
                    dntheme_paging_nav();
                else :
                    get_template_part( 'template-parts/page', 'none' );
                endif;
                ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer();
