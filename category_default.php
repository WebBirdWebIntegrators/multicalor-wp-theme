<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr page">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="list-products">
						<div class="list-products__container">
							<div class="list-products__container__list1">

									<div class="list-products__container__list1__item">
										<div class="list-products__container__list1__item__image">
											<a href="<?php echo get_the_permalink();?>">
												<?php the_post_thumbnail('thumbnail'); ?>
											</a>
										</div>
										<div class="list-products__container__list1__item__content">
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
											<a href="<?php echo get_the_permalink();?>" class="button">Meer info</a>
										</div>
									</div>

							</div>
						</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
			</div>
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
