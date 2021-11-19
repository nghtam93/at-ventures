<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
global $dn_options;
get_header(); ?>

<div class="wrap__page">

	<section class="page__header">
      <div class="container">
        <div class="text-center">
			<p class="exception__code entry-title">404</p>
			<p class="exception__text">ERROR</p>
		</div>
      </div>
    </section>

	<div class="container">
		<section class="error-404 not-found text-center">

			<header class="page-header">
				<p class="page-title"><?php _e( 'Oops!', 'dntheme' ); ?></p>
				<p><?php _e('Lỗi không tìm thấy trang','dntheme'); ?></p>
			</header><!-- .page-header -->
			<div class="page-content entry-content">
				<p><?php _e( 'Có vẻ như các trang mà bạn đang cố gắng tiếp cận không tồn tại nữa hoặc có thể nó vừa di chuyển.', 'dntheme' ); ?></p>
				<a href="<?php echo site_url(); ?>" class="return__home"><?php _e( 'Về trang chủ', 'dntheme' ); ?></a>
			</div><!-- .page-content -->

		</section><!-- .error-404 -->
	</div>
</div><!-- .wrap -->

<?php get_footer();
