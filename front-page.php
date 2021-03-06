<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );?>

<?php //get_template_part( 'global-templates/hero' ); ?>

<?php //get_template_part( 'global-templates/usps' ); ?>

<?php //get_template_part( 'global-templates/portfolio' ); ?>
<?php get_template_part( 'loop-templates/content', 'front-page-hero' ); ?>
<?php get_template_part( 'loop-templates/content', 'front-page-endorsments' ); ?>
<?php get_template_part( 'loop-templates/content', 'front-page-projects' ); ?>
<?php get_template_part( 'loop-templates/content', 'front-page-knowledge' ); ?>
<?php get_template_part( 'loop-templates/content', 'front-page-contact' ); ?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'loop-templates/content', 'front-page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
