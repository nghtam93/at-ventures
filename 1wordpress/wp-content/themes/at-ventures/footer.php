<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
$logo_img = get_field('logo_footer', 'option');
?>
<footer class="footer">
      <div class="container text-center position-relative">
        <div class="footer__logo">
          <a href="<?php echo site_url(); ?>">
              <?php echo wp_get_attachment_image( $logo_img, 'full' ); ?>
          </a>
        </div>
        <div class="footer__excerpt"><?php the_field('footer_content', 'option'); ?></div>
        <ul class="footer__socical">
          <li><a href="<?php the_field('fb', 'option') ?>" target="_blank"><span class="icon-facebook"></span></a></li>
          <li><a href="<?php the_field('twitter', 'option') ?>" target="_blank"><span class="icon-twitter"></span></a></li>
          <li><a href="<?php the_field('telegram', 'option') ?>" target="_blank"><span class="icon-telegram"></span></a></li>
        </ul>

        <div class="copyright text-center">
          <p><?php the_field('copyright', 'option'); ?></p>
        </div>
        <div class="back-to-top"><span class="icon-arrow-up"></span></div>
      </div>
    </footer>

    <nav id="menu__mobile" class="nav__mobile">
        <div class="nav__mobile__content">
            <?php
              wp_nav_menu(
              array(
                 'theme_location'  => 'primary',
                 'container'       => 'ul',
                 'container_class' => '',
                 'menu_id'         => '',
                 'menu_class'      => 'nav__mobile--ul',
              ));
            ?>

            <ul class="footer__socical">
              <li><a href="<?php the_field('fb', 'option') ?>" target="_blank"><span class="icon-facebook"></span></a></li>
              <li><a href="<?php the_field('twitter', 'option') ?>" target="_blank"><span class="icon-twitter"></span></a></li>
              <li><a href="<?php the_field('telegram', 'option') ?>" target="_blank"><span class="icon-telegram"></span></a></li>
            </ul>
        </div>
    </nav>
</div> <!-- end .wrapper -->
<?php wp_footer(); ?>
</body>
</html>
