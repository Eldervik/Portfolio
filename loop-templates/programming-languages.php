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
    <div class="around-knowledge">
        <div class="text-light" style="width:<?php echo get_post_field('post_content');?>">
            <header class="">
                <h2><?php>the_title();?></h2>
            </header><!-- .entry-header -->
            <div class="">
                <p>Experience: <?php the_content(); ?></p>
            </div><!-- .entry-content -->
        </div>
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>
</article><!-- #post-## -->