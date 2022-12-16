<?php
/**
 * Template Name: Books Page
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
$args = array(
    'post_type' => 'icsan_resources',
    'posts_per_page' => 10, 'order' => 'ASC',
    'category_name' => 'books'
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
                    // var_dump($the_query->posts);
                    $image = get_the_post_thumbnail_url($post->post_id, 'medium');

                ?>
                <div class="col-8">
                    <img src="<?php echo $image ?>" class="b-card__image"/>
                    <div class="b-card__body">
                        <?php $post_categories = wp_get_post_categories( get_the_ID() );
                            $cats = array();
                                 
                            foreach($post_categories as $c){
                                $cat = get_category( $c );
                                $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
                            }
                        ?>
                        <a href="#" class="b-card__category"><?php echo $cats[0]['name'];?></a>
                        <a href="<?php echo get_permalink() ?>" class="b-card__title">
                            <?php the_title(); ?>
                        </a>
                    </div>
                </div>
        <?php endwhile;  ?>
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
