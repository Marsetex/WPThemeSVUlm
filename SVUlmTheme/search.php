<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">

				<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
					<main id="main" class="site-main" role="main">

					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'wp-bootstrap-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content" style="margin-bottom: 15px;">
							<p><?php esc_html_e( 'Nicht das passende gefunden?', 'wp-bootstrap-starter' ); ?></p>

							<?php
								get_search_form();
							?>
						</div><!-- .page-content -->
						
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

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

					endif; ?>

					</main><!-- #main -->
				</section><!-- #primary -->

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
	
	
<?php
get_footer();
