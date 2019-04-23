<section id="languages">
    <div>
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
</section>