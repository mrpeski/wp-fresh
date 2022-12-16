<?php
/**
* Template Name: Events Page
*
*/

get_header();

// while ( have_posts() ) : the_post();

$default = get_template_directory_uri() . '/images/events.jpg';
$calendar = get_template_directory_uri() . '/images/calendar_icon.svg';
$pin = get_template_directory_uri() . '/images/location-pin.svg';
$dollar = get_template_directory_uri() . '/images/dollar.svg';

?>


<section class="sub-header">
    <div class="container-fluid">
            <div class="owl-carousel owl-theme">
                <?php 
                $eventArr = EM_Events::get(array('limit' => 3));

                
                if(count($eventArr) != 0){
                    foreach( $eventArr as $key => $event) {
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($event->post_id) );
                    $loc = EM_Locations::get($event->location_id)[0];
                    // var_dump($event);
                    $date = date_parse($event->start_date); 
                    $mnthLookup = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
                    $month = $mnthLookup[$date['month'] - 1];
                    $day = $date['day'];
                    
                    $img = $feat_image ? $feat_image : $default;

$card = <<<EOT
                <div class="b-stage" style="height: 550px">
                <div class="b-stage__1">
                    <div class="b-stage__2">
                        <div class="b-stage__3">
                            <h3 class="b-stage__title">$event->event_name</h3>
                                <p><img src="$calendar" style="width: 25px;display: inline-block;margin-right: 30px;"/> $event->start_date  |   $event->start_time</p>
                                <p><img src="$pin" style="width: 25px;display: inline-block;margin-right: 30px;"/> $loc->location_name, $loc->location_address, $loc->location_town, $loc->location_state</p>
                                <p><img src="$dollar" style="width: 25px;display: inline-block;margin-right: 30px;"/>TBA</p>
                            <a href="/events/$event->post_name" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="b-stage__overlay"></div>
                <img  src="$img" class="b-stage__image"/>
            </div>
EOT;
echo $card;

                    }
                
                } else {
                    $card = <<<EOT
            <div class="col">
                <h4>No upcoming events</h4>
            </div>
EOT;
echo $card;
                }
            
                
                // wp_reset_postdata();
            ?>
            </div>
    </div>
</section>



	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
		    <div class="row pt-2 pb-8 justify-content-between">
        <div class="col-lg-24">
            <div id="main-content">
                <?php echo do_shortcode( '[breadcrumb]' ); ?>
                <div id="calendar"></div>
            <?php
			
// 			get_template_part( 'template-parts/content', 'page' );

// 			// If comments are open or we have at least one comment, load up the comment template.
// 			if ( comments_open() || get_comments_number() ) :
// 				comments_template();
// 			endif;

//     		endwhile; // End of the loop.
    		?>
		    </div>
        </div>
		
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_template_part( 'template-parts/_includes/upcoming-events'); ?>



<?php 

get_footer();
?>