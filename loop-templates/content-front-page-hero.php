<?php
?>
<section id="start" class="fullheight">
    <div style="background-color:<?php the_field('hero_color');?>">
        <div class="fullheight">
            <h1 class="text-center"><?php the_field('hero_title');?></h1>
            <h2 class="text-center"><?php the_field('hero_sub-title');?></h2>
            <img src="<?php the_field('hero_front_image');?>" class="front-image" style="color:white">
            <div id="languages">
                <?php $languages = get_field('front_page_programming_language'); 
                    if($languages){
                        foreach($languages as $post){?>
                            <div>
                                <?php setup_postdata($post);
                                get_template_part('loop-templates/programming-languages');?>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
    </div>
</section>