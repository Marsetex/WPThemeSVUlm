<?php
/**
* Template Name: Frontpage
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>	
	<div id="headerBackground">
		<?php if (has_post_thumbnail( $post->ID ) && !is_single()): ?>
			<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
			<div class="parent">
				<div class="image1"><img src="<?php echo $image[0]; ?>"></div>
				<!--<div class="image2"><img src="<?php echo get_theme_mod( 'wp_bootstrap_starter_logo' ); ?>"></div>				
				<div class="image3">SV Ulm 1948</div>-->
			</div>
		<?php else: ?>
			<img src="<?php header_image(); ?>"/>
		<?php endif; ?>
	</div>
	<header id="masthead" class="site-header navbar-static-top" role="banner">	
        <div id="headerNav" class="container">
            <nav class="navbar navbar-toggleable-md navbar-light">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' )): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img id="logo" src="<?php echo get_theme_mod( 'wp_bootstrap_starter_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <?php
                wp_nav_menu([
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => '',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ]);
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->

 


	<div id="content" class="site-content-no-bottom-padding">
		<div class="container">
			<div class="row">			
				<section id="primary" class="content-area col-sm-12">
					<main id="main" class="site-main" role="main">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</section><!-- #primary -->

			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
	
<?php
get_footer();
