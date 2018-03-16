<?
/*
Template Name: Certificate Template
*/
?>




<?php get_header(  ); ?>

    <!-- ---------- CERTIFICATE AREA START ---------- -->
    <section class="certificate-area">
        <div class="container width-57">

            <!-- TOP HEADING -->
            <div class="row">
                <div class="col-md-12">
                    <div class="certificate-text">
                        <h3>Проверка Документов</h3>
                        <p>Диплом <span>Тренерского курса с правом преподавания Микроблейдинг/Перманентный макияж</span> имеет статус документа установленного образца. Чтобы убедиться, что Ваш диплом - подлинник, проверьте его на наличие следующих элементов защиты.</p>
                    </div>
                </div>
            </div>

            <!-- CERTIFICATE IMAGE -->
            <div class="row">
                <div class="col-md-12">
                    <div class="certificate-image">
                        <div class="main-certificate">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-of-student.png" alt="">
                        </div>
                        <div class="main-certificate-part-1">
                            <p>Живая подпись руководителя</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-part-1.png" alt="">
                        </div>
                        <div class="main-certificate-part-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-part-2.png" alt="">
                            <p>Уникальный номер проверки подлинности</p>
                        </div>
                        <div class="main-certificate-part-3">
                            <p>Печать компании</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/certificate-part-3.png" alt="">
                        </div>
                        <div class="line-connect-1"></div>
                        <div class="line-connect-2"></div>
                        <div class="line-connect-3"></div>
                    </div>
                </div>
            </div>

            <!-- CERTIFICATE QUERY FORM -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="certificate-query-form-area">
                        <div class="certificate-query-form-heading">
                            <h3>Проверьте свой сертификат</h3>
                            <p>Введите данные с вашего сертификата, чтобы проверить его на подлинность</p>
                        </div>
                        <form action="">
                            <div class="certificate-query-form">
                                <input type="text" name="surname" placeholder="Фамилия">
                                <input type="text" name="certificate_number" placeholder="Номер сертификата">
                                <input type="submit" value="Проверить">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- UNSUCCESSFULL CHECK -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="certificate-check-message">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-close.png" alt="">
                        <h3>Сертификат не прошел проверку</h3>
                        <p class="unsuccessfull-para">Пожалуйста, проверьте правильность заполнения данных и нажмите </p>
                        <button type="button" class="check-again-btn">Проверить еще раз</button>
                        <h4>Почему не получилось проверить диплом:</h4>
                        <p class="error-message">Проверьте  правильность ввода данных</p>
                        <p class="error-message">Проверьте раскладку клавиатуры</p>
                    </div>
                </div>
            </div>

            <!-- SUCCESSFULL CHECK -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="certificate-check-message">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-wiiner-cup.png" alt="">
                        <h3>подлинность подтверждена</h3>
                        <p class="successfull-para">Диплом выдан <span>Ивановой Елене</span></p>
                        <p class="certificate-given-date">23.12.2017</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ---------- CERTIFICATE AREA END ---------- -->


    <?php get_footer( ); ?>



