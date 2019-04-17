<div class="wrapper-portfolio col-md-6 col-lg-4">
    <article class="card portfolios">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('featured-image', ['class' => 'img-fluid']); ?>
        </a>
        <div class="portfolioinfo">
            <a href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
            <main>
                <p> <?php the_excerpt(); ?></p>
            </main>
            <footer>
                <p><?php _e('Bransch: ', 'understrap'); the_terms( $post->ID, 'us_bransches', '', ' / ' ); ?><br>
                    <?php if ($client = get_field('Client')){
                        ?>
                        <?php _e('Client: ', 'understrap'); ?><a href="<?php echo $client ?>"><?php echo $client ?></a>
                        <?php
                    }
                ?></p>
                <?php if ($project_hours = get_field('project_hours')){
                        ?>
                            <p><?php echo $project_hours ?> Hours</p>
                        <?php
                    }
                ?>
            </footer>
        </div>
    </article>
</div>
