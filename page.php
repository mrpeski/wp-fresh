<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package icsan
 */

get_header();

$meta_print_value = get_post_meta(get_the_ID(),'subtitle',true);
$default_image = get_template_directory_uri() . '/images/our-services.jpg';

while ( have_posts() ) : the_post();
?>

<section>
    <div class="container-fluid">
        <div class="b-sub-header">
            <div class="b-sub-header__pos">
                <div class="b-sub-header__texts">
                    <div style="" class="pl-6 pr-6">
                        <?php the_title( '<span>', '</span>' ); ?>
                        <h3 class="b-sub-header__subtitle"><?php echo($meta_print_value); ?></h3>
                        <?php if ( is_active_sidebar( 'special_top' ) ) : ?>
                        	<div id="" class="" role="complementary">
                        		<?php dynamic_sidebar( 'special_top' ); ?>
                        	</div><!-- #special-top -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="b-sub-header__overlay"></div>
            <?php 
                // echo the_post_thumbnail('full', ['class' => 'b-sub-header__image']) 
                $image = get_the_post_thumbnail_url($post->post_id, 'full');
                
                if($image) {
                    echo "<img src='$image' class='b-sub-header__image'/>";
                } else {
                    echo "<img src='$default_image' class='b-sub-header__image'/>";
                }
            ?>
            
        </div>
    </div>
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
		    <div class="row pt-2 pb-8 justify-content-between">
        <div class="col-lg-16">
            <div id="main-content">
                <?php echo do_shortcode( '[breadcrumb]' ); ?>
            <?php
			
			get_template_part( 'template-parts/content', 'page' );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

    		endwhile; // End of the loop.
    		?>
    		
		    </div>
        </div>
		<div class="col-lg-6">
		  <div class="b-sidebar">
		    <?php // get_template_part( 'template-parts/_includes/sidebar' ); ?>
		    <?php get_sidebar(); ?>
            </div>
		</div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/_includes/upcoming-events'); ?>
<?php get_template_part( 'template-parts/_includes/subscribe'); ?>
<?php
get_footer();
