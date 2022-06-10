<div id="footer">
    <div id="bottom-navigation">
        <div id="bottom-logo">
            <img src="<?php echo get_template_directory_uri();; ?>\assets\images\logo.png"></img>
        </div>
        <div id="menus">
            <nav class="navbar navbar-expand-lg navbar-light"> 
                <div class="container"> 
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'bottom',
                                'menu_class'=>'navbar-nav'
                            )
                            );
                        ?>
                </div>
            </nav>
        </div>
    </div>
    <div id="copyright">
        @ COPYRIGHT <?php echo date("Y");?>
    </div>
</div>
<?php wp_footer()?>
</body>
</html>