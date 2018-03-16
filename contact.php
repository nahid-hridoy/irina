<?
/*
Template Name: Contact Template
*/
?>

    <?php

    $footer_address = cs_get_option ('irina_address');
    $footer_working_hour = cs_get_option ('irina_working_hour');
    $footer_phn_no = cs_get_option ('irina_footer_phone');
    $footer_callus_phn_no = cs_get_option ('irina_call_us_phone');
    $c_p_address = cs_get_option ('contact_page_address_infos');

    ?>



<?php get_header(  ); ?>

    <!-- ---------- BREADCUMB AREA START ---------- -->
    <section class="breadcumb-area breadcumb-area-bg">
        <div class="container width-71">
            <div class="row">
                <div class="col-md-10">
                    <div class="breadcumb-text">
                        <h4>Контакты</h4>
                        <p>Как с нами связаться</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- BREADCUMB AREA END ---------- -->

    <input type="hidden" id="StartDate">

    <!-- ---------- CONTACT AREA START ---------- -->
    <section class="contact-area">
        <div class="container width-71">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-info">
                        <h4>Свяжитесь с нами</h4>
                        <p><?php echo $footer_phn_no; ?></p>
                        <!-- <p>г.Санкт- Петербург, <br>Каменностровский проспект, 18</p> -->
                        <p><?php echo $c_p_address; ?></p>
                    </div>

                    <div class="contact_page_form">
                        <?php dynamic_sidebar( 'contact-page-form' ); ?>
                        <!-- <div class="contact-form-area">
                            <input type="text" name="name" placeholder="Имя">
                            <input type="text" name="telephone" placeholder="Телефон">
                            <textarea name="message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                            <input type="submit" value="Отправить">
                        </div> -->
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="googleMap" class="googleMap">
                        <?php dynamic_sidebar( 'contact-page-map' ); ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- CONTACT AREA END ---------- -->

    


<?php get_footer( 'contact' ); ?>