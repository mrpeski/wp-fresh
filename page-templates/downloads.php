<?php
/**
 * Template Name: Downloads Page
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

$img = get_template_directory_uri() . '/images/governance.jpg';

$meta_print_value = get_post_meta(get_the_ID(),'subtitle',true);

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type' => 'icsan_resources',
    'posts_per_page' => 9, 'order' => 'ASC',
    'category_name' => 'downloads',
    'paged' => $paged
);

$the_query = new WP_Query( $args );
?>

<section>
    <div class="container-fluid">
        <div class="b-sub-header">
            <div class="b-sub-header__pos">
                <div class="b-sub-header__texts">
                    <div style="" class="pl-6 pr-6">
                        <?php the_title( '<span>', '</span>' ); ?>
                        <h3 class="t-48"><?php echo($meta_print_value); ?></h3>
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
                <?php if ( $the_query->have_posts() ): ?>
        <div class="row">
        <?php while ( $the_query->have_posts() ) :  ?>

                <?php $the_query->the_post(); 
                    $image = get_the_post_thumbnail_url($post->post_id, 'medium');
                ?>
                <?php if($image) : ?>
                    <a href="<?php echo get_permalink() ?>">
                        <img src="<?php echo $image ?>" class="b-card__image"/>
                    </a>
                <?php else : ?>
                <a href="<?php echo get_permalink() ?>">
                        <div style="width:200px;height:270px;background:#6da5ecbf;color:white; padding: 12px 20px;position:relative; margin: 10px 20px;">
                            <p style="position:absolute; bottom: 20px;font-size: 18px;
border-top: 2px solid;"><?php the_title(); ?></p>
                        </div>
                    </a>
                <?php endif; ?>
        <?php endwhile;  ?>
        </div>
        <div class="pagination">
            <?php 
                echo paginate_links( array(
                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                    'total'        => $the_query->max_num_pages,
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'format'       => '?paged=%#%',
                    'show_all'     => false,
                    'type'         => 'plain',
                    'end_size'     => 2,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous', 'text-domain' ) ),
                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
                    'add_args'     => false,
                    'add_fragment' => '',
                ) );
            ?>
        </div>
        <?php  wp_reset_postdata(); ?>
<?php endif; ?>
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
