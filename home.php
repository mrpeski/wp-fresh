<?php 

get_header();

$img = get_template_directory_uri() . '/images/img1.jpg';
?>


<section class="sub-header">
    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
            <div class="b-stage">
                <div class="b-stage__1">
                    <div class="b-stage__2">
                        <div class="b-stage__3">
                            <h3 class="b-stage__title">The Leading Professional Body
                                Dedicated to Corporate Governance
                                and Administration</h3>
                            <p class="b-stage__body-text">The Institute of Chartered Secretaries and Administrators of Nigeria (ICSAN) is a
                                leading and recognised professional body dedicated to enhancing the status and
                                practice of corporate governance and administration in both the public and
                                private sectors of the economy.</p>
                            <a href="/about-us" class="btn btn-primary">Learn More</a>
                            
                        </div>
                    </div>
                </div>
                <div class="b-stage__overlay"></div>
                <img  src="<?php echo $img ?>" class="b-stage__image"/>
            </div>
            <div class="b-stage">
                <div class="b-stage__1">
                    <div class="b-stage__2">
                        <div class="b-stage__3">
                            <h3 class="b-stage__title">The Leading Professional Body
                                Dedicated to Corporate Governance
                                and Administration</h3>
                            <p class="b-stage__body-text">The Institute of Chartered Secretaries and Administrators of Nigeria (ICSAN) is a
                                leading and recognised professional body dedicated to enhancing the status and
                                practice of corporate governance and administration in both the public and
                                private sectors of the economy.</p>
                            <a href="/about-us" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="b-stage__overlay"></div>
                <img  src="<?php echo $img ?>" class="b-stage__image"/>
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template-parts/_includes/popular-services'); ?>
<?php get_template_part( 'template-parts/_includes/featured-programs'); ?>
<?php get_template_part( 'template-parts/_includes/upcoming-events'); ?>
<?php get_template_part( 'template-parts/_includes/subscribe'); ?>

            

<?php 

get_footer();
?>