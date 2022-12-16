<?php 

$img = get_template_directory_uri() . '/images/governance.jpg';
// $args = array(
//     'post_type' => 'event',
// );

// $the_query = new WP_Query( $args );
?>

<section class="section section--bg-color p-3 p-lg-0 pt-lg-6 pb-lg-6">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h4 class="mb-6 text-lg-left">Upcoming Events</h4>
            </div>
            <div class="m-auto m-lg-0">
                <a href="/events" class="btn btn-outline-primary">FULL CALENDAR</a>
            </div>
        </div>
        <div class="row owl-carousel upcoming-events owl-theme">
            <?php 
                $eventArr = EM_Events::get(array('limit' => 8));
                
                // $evt = EM_Locations::get(['post_id' => 175]);
                // var_dump($eventArr);

                if(count($eventArr) != 0){
                    foreach( $eventArr as $key => $event) {
                    $feat_image = get_the_post_thumbnail($event->post_id, 'medium', array('class' => "", 'sizes' => "(min-width: 900px) 300px", 'style' => 'height: 200px;
    width: 400px;
    transform: translateX(-20px);'));
                    $loc = EM_Locations::get($event->location_id)[0];
                    $date = date_parse($event->start_date); 
                    $mnthLookup = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
                    $month = $mnthLookup[$date['month'] - 1];
                    $day = $date['day'];
$card = <<<EOT
            <div class="mt-4">
                <div class="b-card__date" title="$event->start_date">
                    <span class="b-card__month">$month</span>
                    <span class="b-card__day">$day</span>
                </div>
                <div class="card b-card" style="overflow-x:hidden">
                    $feat_image
                    <div class="b-card__body">
                        <a href="/events/$event->post_name" class="b-card__title">
                            $event->event_name
                        </a>
                        <a href="/location/$loc->location_slug" class="b-card__venue">
                            $loc->location_name
                        </a>
                    </div>
                </div>
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
