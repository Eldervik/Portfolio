<?php

// get all related posts for the current post

$related_posts = get_field('related_posts');
if($related_posts){
    ?>
    <h1><?php _e('Related Posts', 'understrap');?></h1>

    <?php foreach($related_posts as $post){
        setup_postdata($post);
        get_template_part('loop-templates/content');

    }
    wp_reset_postdata();
}