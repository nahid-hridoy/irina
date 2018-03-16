<?
/*
Template Name: Blog Template
*/
?>

<?php get_header(  ); ?>


    <!-- ---------- BREADCUMB AREA START ---------- -->
    <section class="breadcumb-area breadcumb-area-bg">
        <div class="container width-71">
            <div class="row">
                <div class="col-md-10">
                    <div class="breadcumb-text">
                        <h4>Новости</h4>
                        <p>Блог о перманентном макияже</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------- BREADCUMB AREA END ---------- -->

    <!-- ---------- BLOG AREA START ---------- -->
    <section class="blog-area">
        <div class="container width-71">
            <div class="row">
                
                <input type="hidden" id="StartDate">
                <?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>

                <!-- SINGLE BLOG CARD START -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog-box">
                        <?php  
                            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        ?>
                        <a href="<?php echo the_permalink(  ); ?>" class="blog-box-bg blog-box-bg-1" style="background-image: url(<?php echo  $url; ?>);" ></a>
                        <div class="blog-box-content">
                            <div class="blog-published-time">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-blog-time.png" alt="">
                                <p class="blog-time"><?php echo get_the_date( ); ?></p>
                            </div>

                            <a href="<?php echo the_permalink(  ); ?>" class="blog-title"><h3><?php echo wp_trim_words( get_the_title(), 4 ); ?> </h3></a>
                            
                            <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?><a href="" class="blog-read-more-btn">Подробнее</a></p>

                        </div>
                    </div>
                </div>
                <!-- SINGLE BLOG CARD END -->


                <?php 
                endwhile;
                // previous_posts_link( );
                // next_posts_link( );
                //echo paginate_links(  );

                else: ?>

                    <div class="col-sm-6 col-md-4">
                        <h2>404-NO POST FOUND</h2>
                    </div>
                <!-- <?php next_posts_link( ); ?> -->
                <?php endif; ?>
              
                
                
                
                
                
            </div>
        </div>
    </section>
    <!-- ---------- BLOG AREA END ---------- -->

    

<?php get_footer(  ); ?>