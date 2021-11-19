<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
?>
<div class="new__item ef--border">
	<a href="<?php the_permalink(); ?>">
	  <div class="new__item__thumb">
	    <div class="dnfix__thumb">
	      <?php the_post_thumbnail('small',array( 'class' => 'img-fluid','alt'   => get_the_title() )); ?>
	    </div>
	  </div>
	  <div class="new__item__meta">
	    <div class="new__item__date"><?php echo get_the_time("d/m/Y"); ?></div>
	    <h3 class="new__item__title text__truncate -n2"><?php the_title() ?></h3>
	  </div>
	</a>
</div>