<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package joshua
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<h1>This is the front-page.php file</h1>

		<main id="main" class="site-main" role="main">
				<h1>This is front-page.php</h1>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'content', 'page' ); ?>

					<div id="front-page-widget-area">
						<div class="front-page-widget-box-1"><?php dynamic_sidebar( "front_page_widget_area1" ) ?></div>
						<div class="front-page-widget-box-2"><?php dynamic_sidebar( "front_page_widget_area2" ) ?></div>
						<div class="front-page-widget-box-3"><?php dynamic_sidebar( "front_page_widget_area3" ) ?></div>
						
					</div>

				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
