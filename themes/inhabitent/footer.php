<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			<!-- </div><! #content -->


              <!-- </div><! #content -->

              <footer id="colophon" class="site-footer" role="contentinfo">
                  <!-- <div class="site-info"> -->
                    <div class="contact">
                          <h3>Contact Info</h3>
                          <p class="email">
                              <a href="info@inhabitent.com"><i class="fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</a>
                          </p>

                          <p class="phone">
                              <a href="tel:778-456-7891"><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</a>
                          </p>

                          <div class="social">
                              <p><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> </p>
                              <p><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </p>
                              <p><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
                          </div> <!-- social -->
                      </div> <!-- contact -->

                      <div class="business-hours">
                          <h3>Business Hours</h3>
                          <p><span class="day">Monday-Friday:</span> 9am to 5pm</p>
                          <p><span class="day">Saturday:</span> 10am to 2pm</p>
                          <p><span class="day">Sunday:</span> Closed</p>
                      </div> <!--business hours -->
                      <div class="site-info">
                          <!--<a href="<?php echo esc_url( 'https://inhabitent.org/' ); ?>"><?php printf( esc_html( 'Copyright &copy; 2016 Inhabitent' ), '' ); ?></a>-->
                          Copyright &copy; 2016 Inhabitent
                      </div><!-- .site-info -->

                      <div class="footer-logo">

                                 <img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text.svg'; ?>" class="logo" alt="Inhabitent company logo"/>
                             </a>
                      </div><!--footer-logo-->

                  <!-- </div> <!-footer content -->



              </footer><!-- #colophon -->
          <!-- </div><!- #page -->

          <?php wp_footer(); ?>

      </body>
  </html>
