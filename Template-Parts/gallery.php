    <?php

        $gallery_img = cs_get_option ('gallery_img');
        $gallery_img_array = explode( ',', $gallery_img );
    ?>

    <div class="full-width-carousel">
        <div class="container-fluid">
            <div class="row">
                <div class="full-width-carousel-main">
                    
                    <?php

                        foreach( $gallery_img_array as $single_gallery_img ):

                            $final_gallery_img = wp_get_attachment_image_src( $single_gallery_img,'full' );
                    ?>
                    <div class="single-img-f-w">
                        <img src="<?php echo $final_gallery_img[0]; ?>" alt="">
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>