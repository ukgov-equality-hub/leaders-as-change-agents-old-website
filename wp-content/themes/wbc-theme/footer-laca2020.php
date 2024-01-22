<?php
/**
 * Footer Template
 *
 * The template for displaying the footer
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>

</div><!-- end of #wrapper -->
</div><!-- end of #container -->


<div class="laca2020cta">
	<div class="padding">
		<h2>JOIN US.<br>BE THE CHANGE.</h2>
	    <br> 
        <br> 
        <br> 
		<a href="mailto: enquiries@leadersaschangeagents.com" target="_blank" class="laca2020button" >Contact Us</a>
	</div>
</div>


<footer id="footer" class="site-footer" role="contentinfo" itemscope="itemscope" itemtype="http://schema.org/WPFooter">



    <div class="container">

		<div class="footer-logo">
			<a href="/" rel="home" itemprop="url" title="Leaders As Change Agents">
			<img src="/wp-content/themes/wbc-theme/img/logoFooter-laca2020.svg"  alt="Leaders As Change Agents" itemprop="image" >
			</a>
		</div>



		<div class="menu-social-container">
			<h3>Follow us:</h3>
			<a class="ow-button-hover sow-social-media-button-facebook sow-social-media-button" title="leadersaschangeagents" aria-label="leadersaschangeagents" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/leadersaschangeagents"><span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span></a>
			<a class="ow-button-hover sow-social-media-button-linkedin sow-social-media-button" title="leadersaschangeagents" aria-label="leadersaschangeagents" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/leadersaschangeagents"><span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span></a>
			<a class="ow-button-hover sow-social-media-button-twitter sow-social-media-button" title="uk_laca" aria-label="uk_laca" target="_blank" rel="noopener noreferrer" href="https://twitter.com/uk_laca"><span class="sow-icon-fontawesome sow-fab" data-sow-icon=""></span></a>
		</div><!-- #menu-social-container -->


		<div class="footer-copyright">
			<?php
				$copyright_text = '&copy; ' . date( 'Y' ) . ' <a href="/">Leaders As Change Agents</a>';
				$copyright_text = apply_filters( 'responsive_mobile_copyright_text', $copyright_text );
				echo $copyright_text;
			?>
		</div><!-- .copyright -->



	</div><!-- #footer-wrapper -->


</footer><!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>
