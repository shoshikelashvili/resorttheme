<?php
    get_header();
    
    $current_page_id = get_the_ID();
    
    class slider{
        public $title;
        public $description;
        public $image;
        public $image_title;

        function __construct($title, $description, $image, $image_title) {
            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->image_title = $image_title;
        }
    }

    class infographic{
        public $image;
        public $description;
        public $link;
        public $image_title;

        function __construct($image, $description, $link, $image_title)
        {
            $this->image = $image;
            $this->description = $description;
            $this->link = $link;
            $this->image_title = $image_title;
        }
    }

    class island{
        public $image;
        public $title;
        public $description;
        public $price;
        public $image_title;

        function __construct($image, $description, $title, $price, $image_title)
        {
            $this->image = $image;
            $this->description = $description;
            $this->title = $title;
            $this->price = $price;
            $this->image_title = $image_title;
        }
    }

    //Construct sliders array
    $sliders = array();
    $slider_posts = get_posts( array('post_type' => 'slider', 'order' => 'ASC'));

    foreach($slider_posts as $post)
    {
        $slider = new slider($post->post_title, $post->post_content, get_the_post_thumbnail_url($post->ID), get_post(get_post_thumbnail_id($post->ID))->post_title);
        array_push($sliders, $slider);
    }
    
    //Construct infographics array
    $infographics = array();

    if(have_rows('infographic', $current_page_id))
    {
        while( have_rows('infographic', $current_page_id) )
        {
            $row = the_row();
            $infographic = new infographic(get_sub_field('image')['url'], get_sub_field('description'), get_sub_field('link'), get_sub_field('image')['title']);
            
            array_push($infographics, $infographic);
        };
    }

    //Construct islands array
    $islands = array();
    $island_posts = get_posts( array('post_type' => 'island', 'numberposts' => 4));
    foreach($island_posts as $post)
    {
        $island = new island(
            get_the_post_thumbnail_url($post->ID), 
            $post->post_content, 
            $post->post_title, 
            get_field('price',$post->ID), 
            get_post(get_post_thumbnail_id($post->ID))->post_title);
        
        array_push($islands,$island);
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
        <?php foreach($infographics as $infographic): ?>
        <div class="info-card">
            <div class="info-data">
                <div class="info-image-container">
                    <img src="<?php echo $infographic->image ?>" class="info-image" alt="<?php echo $infographic->image_title ?>">
                </div>
                <div class="info-description"><?php echo $infographic->description ?></div>
                <a class="info-link" href="<?php echo $infographic->link?>">Learn More</a>
            </div>
        </div>
        <?php endforeach; ?>
</div>

<div id="islands">
    <div class="islands-title"><strong>Discover</strong> Tahiti</div>
    <div class="card-group">
        <?php foreach($islands as $island): ?>
            <div class="card">
                <img src="<?php echo $island->image ?>" class="card-img-top" alt="<?php echo $island->image_title ?>">
                <div class="card-body">
                <h5 class="card-title"><?php echo $island->title ?></h5>
                <div class="card-text"><?php echo $island->description ?></div>
                </div>
                <div class="card-footer">
                    <div class="text-unmuted">FROM <strong>$<?php echo number_format($island->price) ?></strong></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle.png" class="footer-img" alt="arrow">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php
    get_footer();
?>