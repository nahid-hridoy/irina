    <?php

    $cta_top = cs_get_option('cta_top_title');
    $cta_middle = cs_get_option('cta_middle_title');
    $cta_bottom = cs_get_option('cta_bottom_title');

    ?>

    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="call-to-action-body">
                    <div class="col-md-3">
                        <img class="cta-small-d-1" src="<?php echo get_template_directory_uri(); ?>/assets/img/diamond.png" alt="">
                    </div>
                    <div class="col-md-6 c-t-a-inner-txt">
                        <h3><?php echo $cta_top;?></h3>
                        <h3 class="color-cta"><?php echo $cta_middle;?></h3>
                        <h3><?php echo $cta_bottom;?></h3>
                    </div>
                    <div class="col-md-3">
                        <img class="cta-small-d-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/diamond.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>