<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incopro
 */

?>

            </div><!-- row -->
		</div><!-- #main -->
	</section><!-- section -->

  <?php incopro_footer_callout(); ?>

	<footer>
    <div id="footer">
      <div class="sponsors pull-left">
        <ul>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/adermis.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/bambino.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/indasec.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/indaslip.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/nene.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/nuvenia.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/sabanindas.png" alt=""></a></li>
          <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sponsors/unknown.png" alt=""></a></li>
        </ul>
      </div> <!-- end .sponsors.pull-right -->
      <div class="logo-and-social pull-right">
        <img class="pull-left" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-alt.png">
        <a href="#" class="icon ion-social-facebook pull-left"></a>
      </div>
    </div> <!-- #footer ends -->

    <a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
  </footer> <!-- end footer -->
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/basics.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
