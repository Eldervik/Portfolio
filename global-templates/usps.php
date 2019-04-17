<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$usps = new WP_Query([
    'post_type' => 'usps',
    'posts_per_page' => 3,
]);
if($usps->have_posts()){
    ?>
        <div class="wrapper" id="wrapper-usps">
            <div class="container">
                <div class="row">
                    <?php
                        while($usps->have_posts()){
                            $usps->the_post();
                            get_template_part( 'sidebar-templates/sidebar', 'usps' ); ?>
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
