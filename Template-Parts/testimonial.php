
       <div class="testimonial-carousel">
        <div class="container">
            <div class="row">
                <div class="testi-carousel-body">
                    <div class="col md-12">
                        <p class="testi-carousel-header">OT3bIBbI</p>
                    </div>
                    <div class="col-md-12">
                        <div class="main-testi-carousel">
                            
                            <?php
                                global $post;
                                $args = array( 'posts_per_page' => 100, 'post_type'=> 'testimonial_review', 'orderby' => 'menu_order', 'order' => 'ASC' );
                                $myposts = get_posts( $args );
                                foreach( $myposts as $post ) : setup_postdata($post); 
                            ?>  

                            <div class="single-testi-carousel clearfix">
                                <div class="top-card">
                                    <h3 class="date-t-c"><?php echo get_the_date(); ?></h3>
                                    <p class="quote-testi">
                                        
                                        <?php
                                            echo wp_trim_words( get_the_content(), 44, '...' );
                                        ?>
                                    </p>
                                    <a href="#" class="testi-learn-more">Подробнее</a>
                                </div>

                                <div class="author">
                                    <p>С уважением,
                                        <span class="author_name"><?php the_title(); ?></span>
                                    </p>
                                </div>
                            </div>
                            
                            <?php endforeach; wp_reset_query(); ?>

                            

                           

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>