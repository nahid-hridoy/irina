    <?php

    $footer_address = cs_get_option ('irina_address');
    $footer_working_hour = cs_get_option ('irina_working_hour');
    $footer_phn_no = cs_get_option ('irina_footer_phone');
    $footer_callus_phn_no = cs_get_option ('irina_call_us_phone');

    ?>

    <!-- ---------- FOOTER AREA START ---------- -->
    <section class="footer-area primary-color-bg-red">
        <div class="footer-area-top">
            <div class="footer-area-top-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-area-bottom-shape.png" alt="">
            </div>
            <div class="container width-71">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-main-header">
                            <h2>Остались вопросы?</h2>
                            <h3>Звоните! Тел.: <a href="tel:<?php echo $footer_callus_phn_no; ?>"><?php echo $footer_callus_phn_no; ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container width-71">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="footer-area-header-text">Контакты</h5>
                    <div class="footer-contact-part">
                        <p>Мы находимся:</p>
                        <?php echo $footer_address; ?>
                        
                    </div>

                    <div class="footer-contact-part">
                        <p>Телефон:</p>
                        <p><?php echo $footer_phn_no; ?></p>
                    </div>
                    <div class="footer-contact-part mb-10 ">
                        <p>Мы работаем:</p>
                        <?php echo $footer_working_hour; ?>
                        
                    </div>
                    <div class="footer-round-shape">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-area-header-text">Навигация</h5>
                    <div class="footer-navigation-menu">
                        <?php dynamic_sidebar( 'footer-menu' ); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-area-header-text">Последние новости</h5>
                    <div class="footer-navigation-menu">
                        <?php dynamic_sidebar( 'footer-post-list' ); ?>
                        <!-- <ul>
                            <li>
                                <a href="">Чего боятся нарощенные ресницы/ 11.11.2017/</a>
                            </li>
                            <li>
                                <a href="">Уникальная техника реконструкции бровей 6D и ее преимущества /11.11.2017/</a>
                            </li>
                            <li>
                                <a href="">Татуаж верхнего века /11.11.2017/</a>
                            </li>
                            <li>
                                <a href="">Набор 27-30 ИЮЛЯ на Фундаментальный курс с «0» /11.11.2017/</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ---------- FOOTER AREA END ---------- -->






    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/range.js"></script>
    <script src="assets/js/main.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>
