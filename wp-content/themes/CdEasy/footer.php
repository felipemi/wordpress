<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 */
?>
</div><!-- #main -->

<footer id="footer">
    <div id="colophon">
        <div id="site-info">
            <div class="social-medias">
                <div class="facebook"> 
                    <a href="http://www.facebook.com.br" title="<?php _e('Facebook Cd Easy', 'cdeasy') ?>" rel="generator">
                        Facebook
                    </a>
                </div>
                <div class="twitter">
                    <a href="http://www.twitter.com" title="<?php _e('Twitter Cd Easy', 'cdeasy') ?>" rel="generator">
                       Twitter
                   </a>
                </div>
            </div>
            <div class="desenvolvido">
                <p>Desenvolvido por: 
                    <span id="generator-link">
                        <a href="http://www.stylusgrafy.com.br" title="<?php _e('StylusGrafy Marketing e Propaganda', 'cdeasy') ?>" rel="generator">
                            <img src="<?= bloginfo('template_url') ?>/img/icon-stylusgrafy-marketing-propaganda.png" alt="Logo StylusGrafy. Marketing e Propaganda" width="95"/>
                        </a>
                    </span>
                </p>
            </div>
        </div><!-- #site-info -->

    </div><!-- #colophon -->
</footer><!-- #footer -->

</div><!-- #wrapper --> 

<?php wp_footer(); ?>

</body>
</html>