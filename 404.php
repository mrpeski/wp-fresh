<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package icsan
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

			<section class="error-404 not-found p-6 p-lg-9">
				<header class="page-header" style="text-align:center">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'icsan' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content" style="text-align:center">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'icsan' ); ?></p>

					<?php
					get_search_form();

					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
