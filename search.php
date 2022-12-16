<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package icsan
 */

get_header();
?>
	<main id="main" class="site-main container">
		<div class="row pt-2 pb-8 justify-content-between">
        <div class="col-lg-16">
            <div id="main-content">
        		<?php if ( have_posts() ) : ?>
        
        			<header class="page-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        			<?php // get_search_form(); ?>
        				<h1 class="page-title">
        					<?php
        					/* translators: %s: search query. */
        					printf( esc_html__( 'Search Results for: %s', 'icsan' ), '<span>' . get_search_query() . '</span>' );
        					?>
        				</h1>
        			</header><!-- .page-header -->
        
        			<?php
        			/* Start the Loop */
        			while ( have_posts() ) :
        				the_post();
        
        				/**
        				 * Run the loop for the search to output the results.
        				 * If you want to overload this in a child theme then include a file
        				 * called content-search.php and that will be used instead.
        				 */
        				get_template_part( 'template-parts/content', 'search' );
        
        			endwhile;
        
        			the_posts_navigation();
        
        		else :
        
        			get_template_part( 'template-parts/content', 'none' );
        
        		endif;
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
        </div>
        </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
