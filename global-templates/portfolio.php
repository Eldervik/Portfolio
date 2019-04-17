<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$portfolios = new WP_Query([
    'post_type' => 'us_portfolios',
    'posts_per_page' => -1,
]);
if($portfolios->have_posts()){
    ?>
        <div class="wrapper" id="wrapper-portfolio">
            <div class="container">
                <h1 class="col-12"><?php _e('Portfolio', 'understrap');?></h1>
                <div class="row">
                    <?php
                        while($portfolios->have_posts()){
                            $portfolios->the_post();
                            get_template_part( 'sidebar-templates/sidebar', 'portfolio' ); ?>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    <?php
}
?>
