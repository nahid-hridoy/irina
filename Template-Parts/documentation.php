    <?php

    //certification or documetation images

    $certification_img = cs_get_option ('documentations_img');
    $certification_img_array = explode(',', $certification_img);

    ?>

    <div class="certificate-section">
        <div class="container">
            <div class="row">

                <div class="certificate-section-body">

                    <div class="col-md-12">
                        <div class="certificate-section-header">
                            <h2>Документы,</h2>
                            <h3>подтверждающие деятельность школы</h3>
                        </div>
                    </div>

                    <?php 
                        foreach( $certification_img_array as $single_documentation ):
                            $single_documentation_final = wp_get_attachment_image_src( $single_documentation,'full' );

                    ?>

                    <div class="col-md-4">
                        <div class="certificate-section-img">
                            <img src="<?php echo $single_documentation_final[0]; ?>" alt="">
                        </div>
                    </div>

                <?php endforeach; ?>
                    

                </div>

            </div>
        </div>
    </div>