<?php
    get_header();

    class slider{
        public $title;
        public $description;
        public $image;
        public $image_title;
    }

    $sliders = array();

    $slider_posts = get_posts( array('post_type' => 'slider', 'order' => 'ASC'));
    foreach($slider_posts as $post)
    {
        $slider = new slider();
        $slider->title = $post->post_title;
        $slider->description = $post->post_content;
        $slider->image = get_the_post_thumbnail_url($post->ID);
        $slider->image_title = get_post(get_post_thumbnail_id($post->ID))->post_title;

        array_push($sliders, $slider);
    }
?>

    <div class="hero-container">
        <?php foreach($sliders as $slider): ?>
            <div class="card">
                <img src='<?php echo $slider->image ?>' class='hero-image' alt='<?php echo $slider->image_title ?>'>
                <div class='card-title'><?php echo $slider->title ?></div>
                <div class='card-more'><?php echo $slider->description ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div id="infographic">
    <div class="info-title"><strong>WHY</strong> TAHITI?</div>
    <div class="info-container">
        <!--Slide One-->
        <div class="info-card">
            <div class="info-data">
                <div class="info-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahiti.png" class="info-image" alt="tahiti">
                </div>
                <div class="info-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan molestie sollicitudin nibh, nec iaculis est luctus ist amet.</div>
                <a class="info-link" href="google.com">Learn More</a>
            </div>
        </div>
        <!--Slide Two-->
        <div class="info-card">
            <div class="info-data">
                <div class="info-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahiti.png" class="info-image" alt="tahiti">
                </div>
                <div class="info-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan molestie sollicitudin nibh, nec iaculis est luctus ist amet.</div>
                <a class="info-link" href="google.com">Learn More</a>
            </div>
        </div>
        <!--Slide Three-->
        <div class="info-card">
            <div class="info-data">
                <div class="info-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahiti.png" class="info-image" alt="tahiti">
                </div>
                <div class="info-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan molestie sollicitudin nibh, nec iaculis est luctus ist amet.</div>
                <a class="info-link" href="google.com">Learn More</a>
            </div>
        </div>
        <!--Slide Four-->
        <div class="info-card">
            <div class="info-data">
                <div class="info-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tahiti.png" class="info-image" alt="tahiti">
                </div>
                <div class="info-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan molestie sollicitudin nibh, nec iaculis est luctus ist amet.</div>
                <a class="info-link" href="google.com">Learn More</a>
            </div>
        </div>
    </div>
</div>
<div id="islands">
    <div class="islands-title"><strong>Discover</strong> Tahiti</div>
    <div class="card-group">
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discover.png" class="card-img-top" alt="tahiti">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <div class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</div>
            </div>
            <div class="card-footer">
                <div class="text-unmuted">FROM <strong>$2,500</strong></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" class="footer-img" alt="arrow">
            </div>
        </div>
        <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discover.png" class="card-img-top" alt="tahiti">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
                <div class="text-unmuted">FROM <strong>$2,500</strong></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" class="footer-img" alt="arrow">
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discover.png" class="card-img-top" alt="tahiti">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <div class="text-unmuted">FROM <strong>$2,500</strong></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" class="footer-img" alt="arrow">
            </div>
        </div>
        <div class="card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/discover.png" class="card-img-top" alt="tahiti">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            <div class="card-footer">
                <div class="text-unmuted">FROM <strong>$2,500</strong></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" class="footer-img" alt="arrow">
            </div>
        </div>
    </div>
</div>


<?php
    get_footer();
?>