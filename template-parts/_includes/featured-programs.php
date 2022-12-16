<?php 

$img = get_template_directory_uri() . '/images/governance.jpg';
$args = array(
    'post_type' => 'icsan_programs',
    'posts_per_page' => 3, 'order' => 'ASC'
);

$the_query = new WP_Query( $args );
?>
<section class="section">
    <div class="container-fluid pl-2 pr-2 pl-lg-6 pr-lg-6">
        <h4 class="mb-6">
            <span style="color: black">Featured Programs</span>
        </h4>
<?php if ( $the_query->have_posts() ): ?>
        <div class="row">
        <?php while ( $the_query->have_posts() ) :  ?>
                <?php 
                    $the_query->the_post(); 
                    $image = get_the_post_thumbnail_url($post->post_id, 'full');
                    

                ?>
                <div class="col-xs-24 col-md-8 col-lg-8 mt-4">
                <div class="card b-card b-card--special">
                    
                    <img src="<?php echo $image ?>" class="b-card__image"/>

                    <div class="b-card__body">
                        <?php $post_categories = wp_get_post_categories( get_the_ID() );
                            $cats = array();
                                 
                            foreach($post_categories as $c){
                                $cat = get_category( $c );
                                $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug, 'link' => get_post_type_archive_link( get_query_var('post_type') ));
                            }

                            // Get the URL of this category
                            $category_link = get_post_type_archive_link( 'icsan_programs' );
                        ?>
                        <a href="<?php echo $category_link;?>" class="b-card__category"><?php echo $cats[0]['name'];?></a>
                        <a href="<?php echo get_permalink() ?>" class="b-card__title">
                            <?php the_title(); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;  ?>
        </div>
<?php  wp_reset_postdata(); ?>
<?php endif; ?>
        <div class="mt-8 mb-4">
            <span><a href="/programs" class="btn btn-primary">SEE ALL PROGRAMS</a></span>
        </div>
    </div>
</section>
