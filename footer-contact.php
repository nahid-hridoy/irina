    <?php

    $footer_address = cs_get_option ('irina_address');
    $footer_working_hour = cs_get_option ('irina_working_hour');
    $footer_phn_no = cs_get_option ('irina_footer_phone');
    $footer_callus_phn_no = cs_get_option ('irina_call_us_phone');

    ?>

    <!-- ---------- FOOTER AREA START ---------- -->
    <section class="footer-area footer-area-t-2 primary-color-bg-red ptb-25">
        
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
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ---------- FOOTER AREA END ---------- -->


    <?php wp_footer(); ?>
</body>

</html>
