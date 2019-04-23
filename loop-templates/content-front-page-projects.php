<section id="projects">
    <div class="display">
        <?php $projects = get_field('front_page_projects'); 
            if($projects){
                foreach($projects as $post){?>
                    <div class="portfolio-wrapper">
                        <?php setup_postdata($post);
                        get_template_part('loop-templates/portfolio-projects');?>
                    </div>
                <?php }
                wp_reset_postdata();
            }
        ?>
    </div>
</section>