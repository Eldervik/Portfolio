<?php
?>
<section id="start" class="fullheight">
    <div style="background-color:<?php the_field('hero_color');?>">
        <div class="fullheight">
            <h1 class="text-center"><?php the_field('hero_title');?></h1>
            <h2 class="text-center"><?php the_field('hero_sub-title');?></h2>
            <img src="<?php the_field('hero_front_image');?>" style="color:white">
        </div>
    </div>
</section>
<section id="endorsment">
    <div class="wrapper" id="frontpage-usps">
        <div class="container">
            <div class="row">
                <?php $usps = get_field('front_page_usps'); 
                foreach($usps as $usp){
                    echo  
                    '<div class="col-md-4">
                        <div class="usps">' . '<h1>' . $usp->post_title . '</h1>' . '<p>' . $usp->post_content . '</p>' . "</div>
                    </div>";
                }?>
            </div>
        </div>
    </div>
</section>
<section id="projects">

</section>