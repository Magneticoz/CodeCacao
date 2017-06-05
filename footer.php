<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage CodeCacao
 */
?>
<footer class="black-bg">
    <div class="container">
        <div class="col-sm-12 yellow text-uppercase text-center"><p>Read something more <a href="https://www.codecacao.com/about.html">About Us</a>, Check reasons to <a href="https://www.codecacao.com/join_us.html">Join Us</a><br>Review <a href="https://www.codecacao.com/work.html">our Work</a>, or simply <a href="https://www.codecacao.com/contact.html">Contact us</a></p></div>
        <div class="col-sm-12 white text-center"><ul class="footer-soc">
            <li><a href="https://www.facebook.com/Codecacao-1780399962277874/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.png"></a></li>
            <li><a href="https://twitter.com/Codecacao1" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter.png"></a></li>
            <li><a href="https://www.linkedin.com/in/code-cacao-3711a8139/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/linkedin.png"></a></li>
        </ul></div>
        <div class="col-sm-12 yellow text-uppercase text-center"><p><span class="copy">Copyright </span>Code Cacao 2017</p></div>
    </div>
</footer>


<div id="viewPortSize" style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255); font-size: 12px; display: none;" class="bottom_right">Inner: 1920 x 731<br>Outer: 1920 x 1160</div></body>
<?php wp_footer(); ?>

</body>
</html>
