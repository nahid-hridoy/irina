    <?php

       
       $c_f_title = cs_get_option ('c_f_title');
       $c_f_sub_title = cs_get_option ('c_f_sub_title');
       $c_f_area_bg = cs_get_option ('c_f_img_1');
       $c_f_area_bg_array = wp_get_attachment_image_src( cs_get_option('c_f_img_1'), 'full' );
       
       $c_f_feature_bg = cs_get_option ('c_f_img_2');
       $c_f_feature_bg_array = wp_get_attachment_image_src( cs_get_option('c_f_img_2'), 'full' );

       //$course_infos = cs_get_option ('course_feature_lists');

       if(!empty($c_f_area_bg)){
            $c_f_area_bg = $c_f_area_bg_array[0];
       }else{
            $c_f_area_bg = ''.get_template_directory_uri().'/assets/img/pen-section-bg.png';
       }

       if(!empty($c_f_feature_bg)){
            $c_f_feature_bg = $c_f_feature_bg_array[0];
       }else{
            $c_f_feature_bg = ''.get_template_directory_uri().'/assets/img/certification-pen-image.png';
       }

       $feature_title_1 = cs_get_option ('c_f_i_1_t');
       $feature_title_2 = cs_get_option ('c_f_i_2_t');
       $feature_title_3 = cs_get_option ('c_f_i_3_t');
       $feature_title_4 = cs_get_option ('c_f_i_4_t');
       $feature_title_5 = cs_get_option ('c_f_i_5_t');
       $feature_title_6 = cs_get_option ('c_f_i_6_t');


       $feature_desc_1 = cs_get_option ('c_f_i_1_d');
       $feature_desc_2 = cs_get_option ('c_f_i_2_d');
       $feature_desc_3 = cs_get_option ('c_f_i_3_d');
       $feature_desc_4 = cs_get_option ('c_f_i_4_d');
       $feature_desc_5 = cs_get_option ('c_f_i_5_d');
       $feature_desc_6 = cs_get_option ('c_f_i_6_d');


       $feature_icon_1 = cs_get_option ('c_f_i_1_i');
       $feature_icon_array_1 = wp_get_attachment_image_src( cs_get_option('c_f_i_1_i'), 'full' );

       if(!empty($feature_icon_1)){
            $feature_icon_1 = $feature_icon_array_1[0];
       }else{
            $feature_icon_1 = ''.get_template_directory_uri().'/assets/img/certification-icon-1.png';
       }

       $feature_icon_2 = cs_get_option ('c_f_i_2_i');
       $feature_icon_array_2 = wp_get_attachment_image_src( cs_get_option('c_f_i_2_i'), 'full' );

       if(!empty($feature_icon_2)){
            $feature_icon_2 = $feature_icon_array_2[0];
       }else{
            $feature_icon_2 = ''.get_template_directory_uri().'/assets/img/certification-icon-4.png';
       }

       $feature_icon_3 = cs_get_option ('c_f_i_3_i');
       $feature_icon_array_3 = wp_get_attachment_image_src( cs_get_option('c_f_i_3_i'), 'full' );

       if(!empty($feature_icon_3)){
            $feature_icon_3 = $feature_icon_array_3[0];
       }else{
            $feature_icon_3 = ''.get_template_directory_uri().'/assets/img/certification-icon-3.png';
       }

       $feature_icon_4 = cs_get_option ('c_f_i_4_i');
       $feature_icon_array_4 = wp_get_attachment_image_src( cs_get_option('c_f_i_4_i'), 'full' );

       if(!empty($feature_icon_4)){
            $feature_icon_4 = $feature_icon_array_4[0];
       }else{
            $feature_icon_4 = ''.get_template_directory_uri().'/assets/img/certification-icon-5.png';
       }

       $feature_icon_5 = cs_get_option ('c_f_i_5_i');
       $feature_icon_array_5 = wp_get_attachment_image_src( cs_get_option('c_f_i_5_i'), 'full' );

       if(!empty($feature_icon_5)){
            $feature_icon_5 = $feature_icon_array_5[0];
       }else{
            $feature_icon_5 = ''.get_template_directory_uri().'/assets/img/certification-icon-2.png';
       }

       $feature_icon_6 = cs_get_option ('c_f_i_6_i');
       $feature_icon_array_6 = wp_get_attachment_image_src( cs_get_option('c_f_i_6_i'), 'full' );

       if(!empty($feature_icon_6)){
            $feature_icon_6 = $feature_icon_array_6[0];
       }else{
            $feature_icon_6 = ''.get_template_directory_uri().'/assets/img/certification-icon-6.png';
       }

   ?>

   <style type="text/css">
       .pen-section-body:after {
            background: url('<?php echo $c_f_feature_bg; ?>');
            position: absolute;
            left: 50%;
            top: 50%;
            height: 700px;
            width: 700px;
            content: "";
            z-index: -1;
            margin-left: -350px;
            margin-top: 0px;
            background-size: cover;
            background-position: center;
            background-color: transparent;
        }
   </style>

    <div class="creative-pen-section" style="background-image: url('<?php echo $c_f_area_bg; ?>');">
        <div class="container">
            <div class="row">
                <div class="pen-section-body">

                    <div class="pen-section-header">
                        <h3><?php echo $c_f_title; ?></h3>
                        </br>
                        <h4><?php echo $c_f_sub_title; ?></h4>
                    </div>

                    <div class="col-md-6">
                        <div class="single-feature-item one">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_1; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_1; ?></h2>
                            <?php echo wpautop( $feature_desc_1 ); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-feature-item two">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_2; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_2; ?></h2>
                            <?php echo wpautop( $feature_desc_2 ); ?>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="single-feature-item three left-padding">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_3; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_3; ?> </h2>
                            <?php echo wpautop( $feature_desc_3 ); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-feature-item right-padding four">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_4; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_4; ?></h2>
                            <?php echo wpautop( $feature_desc_4 ); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-feature-item five">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_5; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_5; ?></h2>
                            <?php echo wpautop( $feature_desc_5 ); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-feature-item six">
                            <div class="feature-icon">
                                <img src="<?php echo $feature_icon_6; ?>" alt="">
                            </div>
                            <h2><?php echo $feature_title_6; ?></h2>
                            <?php echo wpautop( $feature_desc_6 ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>