<?php get_header(); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="blog-single">
							<h2><?php the_title(); ?></h2>
							</br>
							
							<input type="hidden" id="StartDate">
							<img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
							</br>

							<?php echo wpautop( the_content( ) ); ?>
						</div>
					</div>
				</div>
			</div>
			


		<?php endwhile; ?>

<?php get_footer(); ?>