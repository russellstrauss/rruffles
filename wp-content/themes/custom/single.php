<?php get_header(); ?>
<div id="container">
	<div class="single-entry col-xs-12 col-sm-10 col-sm-offset-1">
		<div class="home-link"><a href="<?php bloginfo('url'); ?>">home</a></div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entry-content">
			
			<?php 
				if (get_the_title() != null) {
					$icon = '<img src="' . get_bloginfo('template_directory') . '/images/lock.png" alt="private" />';
					$post_title = str_replace('Private:', $icon, get_the_title());
					echo '<div id="post_'.$post->ID.'" class="entry-title">'. $post_title . '</div>'; 
				}
			?>
															
			<div class="date"> [ <?php echo get_the_date(); ?> | <?php echo get_the_time(); ?> ] </div>
			<div class="clearfix"></div>
							
		 
			<div class="post">
				<?php the_content(); ?>
				<div style="float: right;"> <?php edit_post_link('edit this post.','',''); ?> </div>
				<div class="clearfix"> </div>
			</div><!--end posts-->
			
			<!-- <img src="<?php echo get_bloginfo('template_directory');?>/images/hr/<?php echo rand(1, 33);?>.png" alt="hr" /> -->
		</div>

		<?php endwhile; ?>
		<?php else : ?>
		<!-- no posts -->

		<h2>Sorry, no posts were found</h2>
		<?php endif; ?>


		<ul class="post-links">
			<li class="previous-post">
					<?php previous_post_link('&laquo; %link','previous post') ?><br/>
			</li>
			<li class="next-post">
				<?php next_post_link('%link &raquo;','next post') ?>
			</li>
		</ul>

		<div class="clearfix"> </div>

		<?php comments_template(); ?><br/>
				
	</div><!--end entries-->	
