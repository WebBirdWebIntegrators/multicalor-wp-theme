<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr page">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					
					<?php if( is_page('27') || is_page('509') ) { ?>
						<!-- Gasgestookte luchtverwarmers -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'gasgestookt',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Gasgestookte luchtverwarmers</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						
						<!-- Indirecte luchtverwarmers -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'indirect',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Indirecte luchtverwarmers</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
					
						<!-- Indirecte luchtverwarmers -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'oliegestookt',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Oliegestookte luchtverwarmers</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						
						<!-- Balansventilatie -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'balansventilatie',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Balansventilatie</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						
					<?php } elseif( is_page('29') ) { ?>
						<!-- Luchtkanalen -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'luchtkanalen',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
					<?php } elseif( is_page('187') ) { ?>
						<!-- Roosters -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'roosters',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Roosters</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						<!-- Thermostaten -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'thermostaten',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Thermostaten</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						<!-- Ventilatoren -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'ventilatoren',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Thermostaten</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						<!-- Verdampers -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'verdampers',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Thermostaten</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
						
						<?php } elseif( is_page('700') ) { ?>
						
						<!-- Nieuwbouw -->
						<?php
							// WP_Query arguments
							$args = array (
								'post_type' => 'wbp_products',
								'post_status' => 'publish',
								'wbp_product_categories' => 'nieuwbouw',
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) { ?>
								<div class="list-products">
									<div class="list-products__container">
										<div class="list-products__container__list1">
											<h2>Nieuwbouw</h2>
											<?php while ( $query->have_posts() ) {
												$query->the_post(); ?>
												
												<div class="list-products__container__list1__item">
													<div class="list-products__container__list1__item__image">
														<a href="<?php echo get_the_permalink();?>">
															<?php the_post_thumbnail('medium'); ?>
														</a>
													</div>
													<div class="list-products__container__list1__item__content">
														<h3><?php the_title(); ?></h3>
														<?php the_excerpt(); ?>
														<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
													</div>
												</div>
									
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } else {
								// no posts found
							}
							
							// Restore original Post Data
							wp_reset_postdata();
						?>
					<?php } ?>
					
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					
					<!-- Gallery --> 
					<?php get_template_part( 'assets/gallery' ) ?>
					
				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
				<?php paginate_comments_links() ?>
			</div>
			<?php if( get_field('field_552fb0b78c6c1') === 'disabled' ) { ?>
			<?php } else { ?>
				<div class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>	
</div>

<?php get_footer(); ?>