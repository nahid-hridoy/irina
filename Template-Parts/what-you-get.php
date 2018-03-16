    <?php

	    $w_y_g_title = cs_get_option('cp_title');
	    $w_y_g_sub_title = cs_get_option('cp_sub_title');
	    $w_y_g_phone_title = cs_get_option('cp_phn_title');
	    $w_y_g_phone_no = cs_get_option('cp_phn_no');
	    $w_y_g_btn_txt = cs_get_option('cp_center_btn');
	    //$w_y_g_btn_link = cs_get_option('cp_center_btn_link');

	    $w_y_g_left_infos = cs_get_option('cp_list_datas');
	    $w_y_g_right_infos = cs_get_option('cp_list_datas_right');


	    $w_y_g_1 = cs_get_option ('cp_center_img_1');
	    $w_y_g_array_1 = wp_get_attachment_image_src( cs_get_option('cp_center_img_1'), 'full' );

	    if(!empty($w_y_g_1)){
	        $w_y_g_1 = $w_y_g_array_1[0];
	    }else{
	        $w_y_g_1 = ''.get_template_directory_uri().'/assets/img/promo-image-2.png';
	    }


	    $w_y_g_2 = cs_get_option ('cp_center_img_2');
	    $w_y_g_array_2 = wp_get_attachment_image_src( cs_get_option('cp_center_img_2'), 'full' );

	    if(!empty($w_y_g_2)){
	        $w_y_g_2 = $w_y_g_array_2[0];
	    }else{
	        $w_y_g_2 = ''.get_template_directory_uri().'/assets/img/promo-image-1.png';
	    }
    

    ?>

    <div class="third-section">
        <div class="container">
            <div class="row">
                <div class="third-section-body">

                    <div class="third-section-header clearfix">
                        <div class="col-md-8 s-1">
                            <h2><?php echo $w_y_g_title; ?></h2>
                            <h4><?php echo $w_y_g_sub_title; ?></h4>
                        </div>
                        <div class="col-md-4 s-2-phn-no">
                            <h3 class="g-color"><?php echo $w_y_g_phone_title; ?></h3>
                            <a href="tel:<?php echo $w_y_g_phone_no; ?>" class="phn-no-company"><?php echo $w_y_g_phone_no; ?></a>
                        </div>
                    </div>

                    <div class="third-section-content">

                        <div class="col-md-4">
                            <div class="third-left-section">
	                            <?php foreach( $w_y_g_left_infos as $w_y_g_left_info  ): ?>
									<?php echo wpautop( $w_y_g_left_info['cp_left_info'] ); ?>
                            	<?php endforeach; ?>
                               
                                <input type="submit" class="course-details-pop-up" value="<?php echo $w_y_g_btn_txt; ?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="third-center-section">
                                <img class="imgA1" src="<?php echo $w_y_g_1; ?>" alt="">
                                <img class="imgB1" src="<?php echo $w_y_g_2; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="third-right-section">

                            	<?php foreach( $w_y_g_right_infos as $w_y_g_right_info  ): ?>

                            		<?php echo wpautop( $w_y_g_right_info['cp_right_info'] ); ?>
	                                
	                            <?php endforeach; ?>


                                <!-- <p>Учебное пособие с готовой программой ведения курса от «А» до «Я»</p>
                                <p>Способы привлечения учеников без особых вложений</p>
                                <p>Правовые аспекты обучающей деятельности. Подводные камни в работе владельца школы </p>
                                <p>Готовые маркетинговые материалы для продвижения </p>
                                <p>Рекламу и пиар от наших источников</p>
                                <p>Контакты оптовых материалов по низким ценам</p> -->
                            </div>
                        </div>



                    </div>


                </div>

            </div>
        </div>
    </div>