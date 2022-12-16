<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package icsan
 */

$img = get_template_directory_uri() . '/images/toTop.svg';
// $img = get_template_directory_uri() . '/images/governance.jpg';

?>

	</div><!-- #content -->

	<footer class="pt-6 footer">
    <div class="container">
        <div class="row justify-content-between" style="padding: 10px 0; padding-bottom: 20px">
            <div class="col-lg-6 text-center text-lg-left order-1 order-xs-2 d-flex mb-6" style="flex-direction: column;">
                <h3 class="h6 mb-2 mt-2">About Us</h3>
                <?php
	                wp_nav_menu( array(
		                'theme_location'  => 'footer1',
		                'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
		                'container'       => 'nav',
		                'container_class' => '',
		                'container_id'    => '',
		                'menu_class'      => 'nav nav-footer flex-column',
		                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'          => new WP_Bootstrap_Navwalker(),
	                ) );
	                ?>
            </div><div class="col-lg-6 text-center text-lg-left order-1 order-xs-2 d-flex mb-6" style="flex-direction: column;">
                <h3 class="h6 mb-2 mt-2">For Members</h3>
                <?php
		        wp_nav_menu( array(
			        'theme_location'  => 'footer2',
			        'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
			        'container'       => 'nav',
			        'container_class' => '',
			        'container_id'    => '',
			        'menu_class'      => 'nav nav-footer flex-column',
			        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			        'walker'          => new WP_Bootstrap_Navwalker(),
		        ) );
		        ?>
            </div><div class="col-lg-6 text-center text-lg-left order-1 order-xs-2 d-flex mb-6" style="flex-direction: column;">
                <h3 class="h6 mb-2 mt-2">For Students</h3>
                <?php
		        wp_nav_menu( array(
			        'theme_location'  => 'footer3',
			        'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
			        'container'       => 'nav',
			        'container_class' => '',
			        'container_id'    => '',
			        'menu_class'      => 'nav nav-footer flex-column',
			        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			        'walker'          => new WP_Bootstrap_Navwalker(),
		        ) );
		        ?>
            </div><div class="col-lg-6 text-center text-lg-left order-1 order-xs-2 d-flex mb-6" style="flex-direction: column;">
                <h3 class="h6 mb-2 mt-2">Follow Us</h3>
                <div class="text-center text-md-left">
                    <a href="https://twitter.com/ICSANlnstitute" target="_blank" class="p-1">
                        <span class="social twitter circle">Twitter</span>
                    </a>
                    <a href="https://www.linkedin.com/company/institute-of-chartered-secretaries-and-administrators-of-nigeria-icsan/" target="_blank" class="p-1">
                        <span class="social linkedin circle">LinkedIn</span>
                    </a>
                    <a href="https://web.facebook.com/ICSANInstitute" target="_blank" class="p-1">
                        <span class="social facebook circle">Facebook</span>
                    </a>
                    
                    <h4 class="h6 mb-2 mt-6">Hits Counter</h4
                    <p class='out'>
                        <?php 
                            echo do_shortcode('[bear_counter]');
                        ?>
                    </p>
                    
                </div>
            </div>
            <span id="toTop" class="toTop" onclick="window.scrollTo({top: 0,left: 0,behavior: 'smooth'})">
                <img src="<?php echo $img; ?>" class="img-fluid">
            </span>
        </div>
    </div>
<!--Begin Comm100 Live Chat Code-->
<div id="comm100-button-138"></div>
<script type="text/javascript">
  var Comm100API=Comm100API||{};(function(t){function e(e){var a=document.createElement("script"),c=document.getElementsByTagName("script")[0];a.type="text/javascript",a.async=!0,a.src=e+t.site_id,c.parentNode.insertBefore(a,c)}t.chat_buttons=t.chat_buttons||[],t.chat_buttons.push({code_plan:138,div_id:"comm100-button-138"}),t.site_id=235139,t.main_code_plan=138,e("https://vue.comm100.com/livechat.ashx?siteId="),setTimeout(function(){t.loaded||e("https://standby.comm100vue.com/livechat.ashx?siteId=")},5e3)})(Comm100API||{})
</script>
<!--End Comm100 Live Chat Code-->
    <div class="mt-4">
        <div class="container"  style="border-top: 1px solid #707070">
            <div class="row justify-content-center">
                <div class="col-24 col-lg-14">
                    <p class="text-center pt-4 pb-4 m-0 text-md-left">© <?php echo date('Y'); echo " ";echo bloginfo('title') ?>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-10 col-12">
                    <?php
        		        wp_nav_menu( array(
        			        'theme_location'  => 'footer4',
        			        'depth'	          => 1, // 1 = no dropdowns, 2 = with dropdowns.
        			        'container'       => null,
        			        'container_class' => '',
        			        'container_id'    => '',
        			        'menu_class'      => 'nav justify-content-center justify-content-md-between nav-footer pt-4 pb-4',
        			        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        			        'walker'          => new WP_Bootstrap_Navwalker(),
        		        ) );
        		      ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77105629-3', 'auto');
    ga('send', 'pageview');
</script>


<?php wp_footer(); ?>

</body>
</html>
