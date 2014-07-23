<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tererê
 */
?>
</div><!--#page!-->
</div><!-- #main .wrapper -->
</div><!-- #fundo -->

<?php wp_footer(); ?>
<div class="border"></div>
<footer id="colophon" role="contentinfo" style="bottom: 0; width: 100%;">
    <div class="site-info">
        <div class="centro-result">
            <div class="sf-r">
                <div class="social-medias">
                    <span><strong>Tereré</strong> no Facebook:</span><br />
                    <span>
                       <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fterere.com.br%3Ffref%3Dts&amp;width=300&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; background: #fff; overflow:hidden; width:300px; height:290px;" allowTransparency="true"></iframe>
                    </span>
                </div>
                <div class="tweet">
                    <span><strong>Tereré</strong> no Twitter:</span><br />
                    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/TZaionc" data-widget-id="487641423412346880">Tweets de @TZaionc</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="cod-qr">
                    <span><strong>Tereré</strong> no Celular:</span><br />
                    <div style="width: 100px; float: left;">
                        <img src="<?= bloginfo('template_url') ?>/img/img-codigo-qr-terere.png" alt="Código QR Erva-Mate Tereré"/>
                    </div>
                    <div style="width: 100px; float: right;">
                        <img src="<?= bloginfo('template_url') ?>/img/img-cod-android.png" alt="Android Tereré"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
    <span class="sf">
        <div class="adrs">
            <?php do_action('terere_credits'); ?>
            <address>
             <span>Rua Antônio Zaions, 100</span><br />
             <span><strong>Telefone:</strong> (42) 3543 1220 – Fax: (42) 3543 1188</span><br />
             <span>CEP 84635-000 – Paulo Frontin – Paraná – Brasil</span>
            </address>
            <span class="copy">Tereré &COPY; <?php echo date(Y); ?> | Desenvolvido por <a href="http://www.stylusgrafy.com.br" title="StylusGrafy. Marketing e Propaganda"></a></span>
        </div>
    </span>     
</footer><!-- #colophon -->
</body>
</html>