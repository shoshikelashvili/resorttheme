<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    wp_head();
    ?>
</head>
<body>
    <div id="main">
        <header>
            <div id="navigation">
                <div id="logo">
                    <img src="<?php echo get_template_directory_uri();; ?>\assets\images\logo.png"></img>
                </div>
                <div id="menus">

                    <nav class="navbar navbar-expand-lg navbar-light"> 
                        <div class="container"> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav"> 
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'top',
                                        'menu_class'=>'navbar-nav'
                                    )
                                    );
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>