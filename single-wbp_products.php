<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php if (is_singular()) { ?>
				<!-- Is singular -->
				<?php if ( ! is_singular( array('page', 'attachment', 'post') ) ) { ?>
					<h1>
						<?php
							$customPostType = get_post_type();
							$postTypeObject = get_post_type_object( $customPostType );
							echo $postTypeObject->labels->singular_name;
						?>
					</h1>
				<?php } else { ?>
					<?php
					$categories = get_the_category();
					foreach ($categories as $category) {
						echo '<h1>' . $category->name . '</h1>'; 
						echo '<div class="description">' . $category->description . '</div>';
					}
				?>		
				<?php } ?>
			<?php } ?>
			
		</div>
	</div>
	<div class="b2">
		<div class="cntr post">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php if( has_post_thumbnail() ) : ?>
							<div class="featured-image">
								<?php the_post_thumbnail('medium'); ?>
							</div>
						<?php endif; ?>
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
						
						<div class="wbp-products">
							<div class="wbp-products__container">
								<?php if( ICL_LANGUAGE_CODE=='fr' ) { ?>
									<?php if( have_rows('field_54dcdc7abfa76') ): ?>
										<div class="wbp-products__container__documents">
											<div class="wbp-products__container__documents__container">
												<h3>Documents et downloads</h3>
												<div class="wbp-products__container__documents__container__list">
													<?php while ( have_rows('field_54dcdc7abfa76') ) : the_row();?>
														<div class="wbp-products__container__documents__container__list__item">
												        	<div class="wbp-products__container__documents__container__list__item__name__excerpt">
													        	<h4><?php echo get_sub_field('field_54dcdc7baca0a'); ?></h4>
																<div class="excerpt"><?php echo get_sub_field('field_54dcdc7bacade'); ?></div>
												        	</div>
												        	<div class="wbp-products__container__documents__container__list__item__file">
													        	<a href="<?php echo get_sub_field('field_54dcdc7bacb8f'); ?>" class="button" target="_blank"><?php _e('View', 'wbp-products'); ?></a>
												        	</div>
														</div>
												    <?php endwhile; ?>
												</div>
											</div>
										</div>
									
									<?php else : ?>
									<?php endif; ?>
								<?php } elseif( ICL_LANGUAGE_CODE=='nl' ) { ?>
									<?php if( have_rows('field_54dcdc7abfa76') ): ?>
										<div class="wbp-products__container__documents">
											<div class="wbp-products__container__documents__container">
												<h3>Documenten en downloads</h3>
												<div class="wbp-products__container__documents__container__list">
													<?php while ( have_rows('field_54dcdc7abfa76') ) : the_row();?>
														<div class="wbp-products__container__documents__container__list__item">
												        	<div class="wbp-products__container__documents__container__list__item__name__excerpt">
													        	<h4><?php echo get_sub_field('field_54dcdc7baca0a'); ?></h4>
																<div class="excerpt"><?php echo get_sub_field('field_54dcdc7bacade'); ?></div>
												        	</div>
												        	<div class="wbp-products__container__documents__container__list__item__file">
													        	<a href="<?php echo get_sub_field('field_54dcdc7bacb8f'); ?>" class="button" target="_blank"><?php _e('View', 'wbp-products'); ?></a>
												        	</div>
														</div>
												    <?php endwhile; ?>
												</div>
											</div>
										</div>
									
									<?php else : ?>
									<?php endif; ?>
								<?php } ?>
							</div>
						</div>
						
						<?php if ( current_user_can('supplier') || current_user_can('administrator') ) : ?>
							<div class="wbp-products" style="margin-top: 2em;">
								<div class="wbp-products__container">
									<?php if( ICL_LANGUAGE_CODE=='fr' ) { ?>
										<?php if( have_rows('field_54dcdf462ef9d') ): ?>
											<div class="wbp-products__container__documents">
												<div class="wbp-products__container__documents__container">
													<h3>Documents et downloads pour distributeurs</h3>
													<div class="wbp-products__container__documents__container__list">
														<?php while ( have_rows('field_54dcdf462ef9d') ) : the_row();?>
															<div class="wbp-products__container__documents__container__list__item">
													        	<div class="wbp-products__container__documents__container__list__item__name__excerpt">
														        	<h4><?php echo get_sub_field('field_54dcdf46ac350'); ?></h4>
																	<div class="excerpt"><?php echo get_sub_field('field_54dcdf46ac413'); ?></div>
													        	</div>
													        	<div class="wbp-products__container__documents__container__list__item__file">
														        	<a href="<?php echo get_sub_field('field_54dcdf46ac4d7'); ?>" class="button" target="_blank"><?php _e('View', 'wbp-products'); ?></a>
													        	</div>
															</div>
													    <?php endwhile; ?>
													</div>
												</div>
											</div>
										
										<?php else : ?>
										<?php endif; ?>
									<?php } elseif( ICL_LANGUAGE_CODE=='nl' ) { ?>
										<?php if( have_rows('field_54dcdf462ef9d') ): ?>
											<div class="wbp-products__container__documents">
												<div class="wbp-products__container__documents__container">
													<h3>Documenten en downloads voor leveranciers</h3>
													<div class="wbp-products__container__documents__container__list">
														<?php while ( have_rows('field_54dcdf462ef9d') ) : the_row();?>
															<div class="wbp-products__container__documents__container__list__item">
													        	<div class="wbp-products__container__documents__container__list__item__name__excerpt">
														        	<h4><?php echo get_sub_field('field_54dcdf46ac350'); ?></h4>
																	<div class="excerpt"><?php echo get_sub_field('field_54dcdf46ac413'); ?></div>
													        	</div>
													        	<div class="wbp-products__container__documents__container__list__item__file">
														        	<a href="<?php echo get_sub_field('field_54dcdf46ac4d7'); ?>" class="button" target="_blank"><?php _e('View', 'wbp-products'); ?></a>
													        	</div>
															</div>
													    <?php endwhile; ?>
													</div>
												</div>
											</div>
										
										<?php else : ?>
										<?php endif; ?>
									<?php } ?>
								</div>
							</div>
						<?php endif ?>
						
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
					</div>
					
					<!-- <?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?> -->
					
				
					<?php endwhile; else: ?>
				
						<p>Sorry, no posts matched your criteria.</p>
				
				<?php endif; ?>			
			</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>