<section id="endorsment">
    <div class="wrapper" id="frontpage-usps">
        <div class="container">
            <div class="row">
                <?php $usps = get_field('front_page_usps'); 
                if($usps){
                    foreach($usps as $post){?>
                        <div class="col-md-4">
                            <div class="usps">
                                <?php setup_postdata($post);
                                get_template_part('loop-templates/content');?>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                }?>
            </div>
        </div>
    </div>
</section>