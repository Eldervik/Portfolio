<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<h2><?php>the_content();?></h2>
	</div><!-- .entry-header -->
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	<header class="entry-header">
		<p><?php the_title(); ?></p>
	</header><!-- .entry-content -->
