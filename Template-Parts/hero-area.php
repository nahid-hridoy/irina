    <?php
        $hero_area_logo = cs_get_option ('hero_logo');
        $hero_area_logo_array = wp_get_attachment_image_src( cs_get_option('hero_logo'), 'full' );

        $hero_area_bg = cs_get_option ('hero_area_bg');
        $hero_area_bg_array = wp_get_attachment_image_src( cs_get_option('hero_area_bg'), 'full' );

        $hero_area_author_title = cs_get_option ('hero_author_title');
        $hero_area_course_title = cs_get_option ('hero_course_title');
        $hero_area_box_title = cs_get_option ('hero_box_title');
        $hero_area_calligraphy_title = cs_get_option ('hero_course_promotion');

        if(!empty($hero_area_logo)){
                $hero_area_logo = $hero_area_logo_array[0];
           }else{
                $hero_area_logo = ''.get_template_directory_uri().'/assets/img/hero-area-logo.png';
        }

        if(!empty($hero_area_bg)){
                $hero_area_bg = $hero_area_bg_array[0];
           }else{
                $hero_area_bg = ''.get_template_directory_uri().'/assets/img/hero-area-woman.png';
        }
    ?>



    <section class="hero-area primary-color-gradient-light-gold">
        <div class="container width-71">
            <div class="row">
                <div class="col-md-6 text-center pl-hero-text">
                    <div class="hero-area-logo">
                        <img src="<?php echo $hero_area_logo; ?>" alt="">
                    </div>
                    <div class="hero-area-text">
                        <h4><?php echo $hero_area_author_title; ?></h4>
                        <?php echo $hero_area_course_title; ?>
                        <!-- <h1>Микроблейдинг
                            <span>бровей</span>
                        </h1> -->
                        <p class="p-extra-block-text"><?php echo $hero_area_box_title; ?></p>
                        <p class="hero-area-promo-text"><?php echo $hero_area_calligraphy_title; ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-area-woman">
                        <img src="<?php echo $hero_area_bg; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-area-footer">
            <div class="hero-area-footer-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-area-bottom-shape.png" alt="">
            </div>
            <div class="container width-71">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="hero-footer-subscribe-header">
                            <h2>Заработай <span class="span-inline">свой</span> миллион,
                                <span>обучая других</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="hero-footer-subscribe-form">
                            <!-- <form action="">
                                <input type="text" placeholder="Имя" name="Имя">
                                <input type="text" placeholder="Телефон" name="Телефон">
                                <button type="submit">Отправить заявку</button>
                            </form> -->
                            <?php dynamic_sidebar( 'hero-area-form' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>