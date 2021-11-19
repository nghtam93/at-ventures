<?php
/**
 * Template part for displaying posts
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
?>

<div class="entry-content">
	<?php the_title( '<h1>', '</h1>' );?>
	<?php the_content(); ?>
</div>

<?php
	related_category_fix(
		array(
			'posts_per_page'	=> 4,
			'related_title'		=> __( 'Resources', 'dntheme' ),
			'template_type'     => '', // slider , widget
			'template'			=> null,
			'set_taxonomy' 		=> null,
		)
	);
