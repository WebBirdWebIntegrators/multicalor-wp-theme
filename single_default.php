<?php get_header(); ?>

<div id="body">
	<div class="b2">
		<div class="cntr post">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

						<?php
							$images = get_field('wb_547d824c85fb9');
							if( $images ): ?>
								<div class="gallery">
								    <ul>
								        <?php foreach( $images as $image ): ?>
								            <li>
								                <a href="<?php echo $image['url']; ?>">
									                <div class="layer-enlarge">
										                <div class="layer-enlarge-container">
											            	<div class="layer-enlarge-container-plus">
												            	<i class="fa fa-search-plus"></i>
												            </div>
										                </div>
									                </div>
								                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
								                </a>
								                <p><?php echo $image['caption']; ?></p>
								            </li>
								        <?php endforeach; ?>
								    </ul>
								</div>
							<?php endif; ?>

					</div>

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
