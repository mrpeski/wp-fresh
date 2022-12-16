<?php 

$img = get_template_directory_uri() . '/images/education.png';

$args = array(
    'post_type' => 'page',
    'posts_per_page' => 5, 'order' => 'ASC',
    'post_parent' => 20
);

$the_query = new WP_Query( $args );
?>

<section style="background:hsla(200, 33%, 70%, 0.1)" class="pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-24 col-lg-6 d-lg-flex" style="align-items: center;">
                <div class="text-center text-md-left">
                    <h3 class="h5"  style="font-weight: 700;color: black">Value-Added Services</h3>
                    <p>The ICSAN Advantage</p>
                </div>
            </div>
            <div class="col-lg-18">
                <div class="owl-carousel hero owl-theme" style="padding: 20px 0">
                    <?php if ( $the_query->have_posts() ):
                        while ( $the_query->have_posts() ) :  ?>
                        
                        <?php $the_query->the_post(); 
                        $image = get_the_post_thumbnail_url($post->post_id, 'full');
                        $mini_image = get_post_meta(get_the_ID(),'mini-image', true);

                        $image = $mini_image ? $mini_image : $img;
                        ?>
                                <a href="<?php echo get_permalink() ?>">
                                    <div class="pop-service">
                                        <img src="<?php echo $image ?>" class="pop-service__image"/>
                                        <span class="pop-service__text"><?php the_title() ?></span>
                                    </div>
                                </a>
                    <?php endwhile;  ?>
                    <?php endif ?>
                </div>
        <?php  wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
