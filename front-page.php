<?php
    get_header();
?>

    <div class="hero-container">
        <!--Slide One-->
        <div class="card">
            <img src="<?php echo get_template_directory_uri();; ?>\assets\images\tahiti.png" class="hero-image" alt="tahiti">
            <div class="card-title"><strong>WELCOME</strong> TO TAHITI</div>
            <div class="card-more">Your vacation starts here</div>
        </div>
        <!--Slide Two-->
        <div class="card">
            <img src="<?php echo get_template_directory_uri();; ?>\assets\images\tahiti-2.png" class="hero-image" alt="tahiti">
            <div class="card-title"><strong>Title</strong> Text</div>
            <div class="card-more">Additional Text</div>
        </div>
        <!--Slide Three-->
        <div class="card">
            <img src="<?php echo get_template_directory_uri();; ?>\assets\images\tahiti-3.png" class="hero-image" alt="tahiti">
            <div class="card-title"><strong>Title</strong> Text</div>
            <div class="card-more">Additional Text</div>
        </div>
    </div>
</div>



<?php
    get_footer();
?>