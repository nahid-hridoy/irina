<?php


//Favicon
 $fav_logo = cs_get_option('irina_fav_logo');
 $fav_logo_array = wp_get_attachment_image_src( cs_get_option('irina_fav_logo'), 'large' );



 //LOGO
 $header_logo = cs_get_option('irina_logo');
 $header_logo_array = wp_get_attachment_image_src( cs_get_option('irina_logo'), 'large' );



if (!empty($header_logo)) {
    $header_logo = $header_logo_array[0];
}else{
    $header_logo = ''.get_template_directory_uri().'/assets/img/top-header-logo.png';
}




// if (!empty($hero_bg)) {
//     $hero_bg = $hero_bg_array[0];
// }else{
//     $hero_bg = ''.get_template_directory_uri().'/assets/img/hero-bg.png';
// }


if (!empty($fav_logo)) {
    $fav_logo = $fav_logo_array[0];
}else{
    $fav_logo = ''.get_template_directory_uri().'/assets/img/favicon.png';
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>Irina:Landing Page</title> -->
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo $fav_logo; ?>">


    <?php wp_head(); ?>

</head>

<body>

    <!--  OFF CANVAS MENU AREA START  -->
    <div class="off-canvas-menu">
        <span class="menu-close"><i class="fa fa-close"></i></span>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'Primary',

                    // 'menu-class' => 'menu',

                ));
            ?>        
        
    </div>

    <div class="off-canvas-overlay"></div>
    <!-- ---------- OFF CANVAS MENU AREA END ---------- -->

    <!-- ---------- TOP BAR AREA START ---------- -->
    <section class="top-area primary-color-bg-red">
        <div class="container width-71">
            <div class="row">
                <div class="col-md-1 col-xs-6">
                    <div class="top-area-logo">
                        <a href="<?php echo site_url( ); ?>">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-header-logo.png" alt=""> -->
                            <img src="<?php echo $header_logo; ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-11 col-xs-6">
                    <div class="top-area-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'Primary',
                                // 'menu-class' => 'menu',
                            ));
                        ?>
                        
                    </div>

                    <div class="top-area-menu-mobile">
                        <a class="menu-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- TOP BAR AREA END ---------- -->