<?php
/**
 * Template Name: State Chapters Page
 * 
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

$args = array(
    'post_type' => 'page',
    'posts_per_page' => 10, 'order' => 'ASC',
    'post_parent' => 58
);

$the_query = new WP_Query( $args );

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
            <?php echo the_post_thumbnail('full', ['class' => 'b-sub-header__image']) ?>
            
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
    		<?php if ( $the_query->have_posts() ): ?>
    		<div class="b-accordion" id="accordionStateChapters">
                <?php while ( $the_query->have_posts() ) :  ?>
                    <?php $the_query->the_post(); ?>
                    <?php 
                    
                    $h = 'heading'.$post->post_name;
                    $c = 'collapse'.$post->post_name;
                    
                    ?>
                        <div class="b-accordion__card">
                            <div class="b-accordion__card-header clearfix" id="<?php echo $h ?>">
                                <div data-toggle="collapse" data-target="<?php echo '#'.$c ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="b-accordion__title">
                                        <?php echo $post->post_title ;?>
                                    </h4>
                                    <span class="b-accordion__arrow"></span>
                                    <span class="b-accordion__arrow-collapsed"></span>
                                </div>
                            </div>

                            <div id="<?php echo $c ?>" class="collapse" aria-labelledby="<?php echo $h ?>" data-parent="#accordionStateChapters">
                                <div class="b-accordion__card-body">
                                    <?php echo $post->post_content ;?>
                                </div>
                            </div>
                        </div>
    		  <?php endwhile;  ?>
    		  </div>
    		  <?php endif; ?>
		    </div>
		<?php  wp_reset_postdata(); ?>
        </div>
		<div class="col-lg-6">
		  <div class="b-sidebar">
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
