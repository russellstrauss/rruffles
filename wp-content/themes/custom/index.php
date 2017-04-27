<?php get_header(); ?>

<div id="container"> <!-- closes in footer -->
	<div class="entries container">
		<ul class="navigation">
			<li> <a href="archives">archives</a> </li>
			<li> <a href="about">about</a> </li>
		</ul>
	<?php 
		$post = 1;
		if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<div class="entry">
				
				<?php 
					if (get_the_title() != null) {
						$icon = '<img src="' . get_bloginfo('template_directory') . '/images/lock.png" alt="private" />';
						$post_title = str_replace('Private:', $icon, get_the_title());
						echo '<div id="post_'.$post->ID.'" class="entry-title col-xs-6"><a href="'.get_permalink().'">'. $post_title .'</a></div>'; 
					}
				?>
																
				<div class="date col-xs-6"> [ <?php echo get_the_date(); ?> | <?php echo get_the_time(); ?> ] </div>
				<div class="clearfix"></div>
								
			 
				<div class="post">
					<?php the_content(); ?>
					<div class="edit-post"> <?php edit_post_link('[edit.]','',''); ?> </div>
					<div class="comments-link">
						<?php if (get_comments_number() > 0) { ?>
							 <a href="<?php the_permalink();?>"> 
							 
							 <?php
							 if (get_comments_number() == 1) echo '1 comment </a>';
							 else echo get_comments_number() . ' comments </a>';
						} ?>
					</div>
					<div class="post-comment">
						<a href="<?php the_permalink();?>">post a comment</a>
					</div>
				</div><!--end posts-->
			</div>
		
		 <?php endwhile; ?>
		 <?php else : ?>	
			 <h2>No entries here.</h2>
		 <?php endif; ?>
	
	
	<?php next_posts_link('&laquo; Previous Entries') ?><br/>
	<?php previous_posts_link('&raquo; Next Entries') ?>
	
	
	</div><!--end entries-->
	
	<?php get_footer(); ?>