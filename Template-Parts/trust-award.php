    <?php

        //awards
        $award_area_img = cs_get_option ('award_img');
        $award_area_img_array = wp_get_attachment_image_src( cs_get_option('award_img'), 'large' );

        

        if(!empty($award_area_img)){
                $award_area_img = $award_area_img_array[0];
           }else{
                $award_area_img = ''.get_template_directory_uri().'/assets/img/trust-trophy-image.png';
        }

        

        $top_awards = cs_get_option ('main_awards');
        $list_awards = cs_get_option ('list_awards');

        $award_icon_img = cs_get_option ('list_award_icon');
        $award_icon_array = wp_get_attachment_image_src( cs_get_option('list_award_icon'), 'large' );

        // if(!empty($award_icon_img)){
        //         $award_icon_img = $award_icon_array[0];
        //    }else{
        //         $award_icon_img = ''.get_template_directory_uri().'/assets/img/trust-icon-4.png';
        // }



        //trust
        $trust_title = cs_get_option ('trust_title');
        $trust_sub_title = cs_get_option ('trust_sub_title');
        $author_intro = cs_get_option ('author_intro');
        $trust_info_lists = cs_get_option ('trust_list');

        $trust_img = cs_get_option ('trust_img');
        $trust_img_array = wp_get_attachment_image_src( cs_get_option('trust_img'), 'large' );

        

        if(!empty($trust_img)){
                $trust_img = $trust_img_array[0];
           }else{
                $trust_img = ''.get_template_directory_uri().'/assets/img/trust-woman-image.png';
        }

    ?>

    <div class="trust-section">
        <div class="container">
            <div class="row">
                <div class="trsust-body">

                    <div class="trust-body-top">
                        <div class="col-md-6">
                            <div class="trust-description">

                                <div class="trust-desc-header">
                                    <h3><?php echo $trust_title; ?></h3>
                                    <h4><?php echo $trust_sub_title; ?></h4>
                                    <?php echo wpautop( $author_intro ); ?>
                                </div>

                                <div class="trust-desc-list">
                                    <ul>
                                        <?php foreach( $trust_info_lists as $trust_info_list ): ?>
                                            <li><?php echo $trust_info_list['trust_infox'] ; ?></li>
                                        <?php endforeach; ?>
                        
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="trust-image">
                                <img src="<?php echo $trust_img; ?>" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="trust-body-middle">

                        <?php foreach( $top_awards as $top_award ): ?>
                            <div class="col-md-4">
                                <div class="trust-single-text-block">
                                    <?php echo wpautop($top_award['top_award_info']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        

                    </div>


                    <div class="trust-body-bottom">

                        <div class="col-md-6">
                            <div class="trust--bottom-image">
                                <img src="<?php echo $award_area_img; ?>" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="trust-bottom-desc-list">
                                <ul>

                                    <?php foreach( $list_awards as $list_award  ): ?>

                                        <!-- <li style="background: url(<?php echo $list_award['list_award_icon']; ?>);background-repeat: no-repeat;">
                                            <?php echo $list_award['list_award_info']; ?>
                                        </li> -->

                                        <li>
                                            <?php echo $list_award['list_award_info']; ?>
                                        </li>

                                    <?php endforeach; ?>
                                    

                                </ul>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>