<?php
/**
 * Single portfolio partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article class="article-single" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->
<aside>
        <p><?php _e('Bransch: ', 'understrap'); the_terms( $post->ID, 'us_bransches', '', ' / ' ); ?><br>
        <?php if ($client = get_field('Client')){
                        ?>
                        <?php _e('Client: ', 'understrap'); ?><a href="<?php echo $client ?>"><?php echo $client ?></a>
                        <?php
                    }
                ?><br>
                <?php if ($project_hours = get_field('project_hours')){
                        ?>
                            <?php echo $project_hours ?> Hours
                        <?php
                    }
                ?></p>
    </aside>
