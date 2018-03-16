   <?php

       $promotion_top = cs_get_option ('course_promotion_top');
       $promotion_bottom = cs_get_option ('course_promotion_bottom');
       $course_title = cs_get_option ('course_title');
       $course_sub_title = cs_get_option ('course_sub_title');
       $course_area_bg = cs_get_option ('course_background_img');
       $course_area_bg_array = wp_get_attachment_image_src( cs_get_option('course_background_img'), 'large' );
       $course_infos = cs_get_option ('course_feature_lists');

       if(!empty($course_area_bg)){
            $course_area_bg = $course_area_bg_array[0];
       }else{
            $course_area_bg = ''.get_template_directory_uri().'/assets/img/student-group-photo.png';
       }

   ?>


    <div class="third-section mb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/student-area-top-shape.png), url('<?php echo $course_area_bg; ?>');" >
        <div class="container">
            <div class="row mb-bg">
                <div class="third-section-body mb">

                    <div class="third-section-header clearfix">
                        <div class="col-md-12 s-1 mb">
                            <h2> <?php echo $promotion_top; ?> </h2>
                            <h4> <?php echo $promotion_bottom; ?></h4>
                        </div>

                        <div class="col-md-12">
                            <div class="hero-footer-subscribe-form mb">
                              <?php dynamic_sidebar( 'course-area-form' ); ?>
                                <!-- <form action="">
                                    <input type="text" placeholder="Имя" name="Имя">
                                    <input type="text" placeholder="Телефон" name="Телефон">
                                    <button type="submit">Узнать подробнее</button>
                                </form> -->
                            </div>
                        </div>

                    </div>

                    <div class="third-section-content mb">

                        <div class="col-md-6">
                            <div class="mb-cmplx-header">
                                <?php echo $course_title; ?>
                                <h4><?php echo $course_sub_title; ?></h4>
                            </div>
                            <div class="third-left-section mb">
                                <h4>Вы должны знать:</h4>
                                <ul>
                                    <?php foreach( $course_infos as $course_single_info  ): ?>
                                        <li>
                                            <?php echo $course_single_info['must_know_data']; ?>
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