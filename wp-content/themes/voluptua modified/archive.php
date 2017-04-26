<?php get_header(); ?>

  <div id="container">
    <div id="entries">
    
    <?php

global $wpdb;

$comments = $wpdb->get_results("SELECT * FROM ".$wpdb->prefix."_comments"
   ." ORDER BY comment_post_ID, comment_content");

$prev = NULL;

foreach($comments as $comment) {

  if ($prev && $prev->comment_content == $comment->comment_content
    && $prev->comment_post_ID == $comment->comment_post_ID ) { // add maybe other rules here

    $wpdb->query("DELETE FROM ".$wpdb->prefix."_comments WHERE comment_ID == ".$comment->comment_ID);

  }
  else
    $prev = $comment;
} ?>
    
      <?php if (have_posts()) : ?> <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?> 
      	 <h1> <?php the_time('Y'); ?> </h1>
      

        <?php while (have_posts()) : the_post(); ?>

 
        <div class="results_content">
			<div class="entry-archive">
				
				<?php 
					if (get_the_title() != null) {
						$icon = '<img src="' . get_bloginfo('template_directory') . '/images/lock.png" alt="private" />';
						$post_title = str_replace('Private:', $icon, get_the_title());
						echo '<div id="post_'.$post->ID.'" class="entry-title">'. $post_title . '</div>'; 
					}
				?>
																
				<div class="date"> [ <?php echo get_the_date(); ?> | <?php echo get_the_time(); ?> ] </div>
				<div class="clear"></div>
								
			 
				<div class="post">
					<?php the_content(); ?>
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

      <h3>Not Found</h3><?php endif; ?><?php next_posts_link('&laquo; Previous Entries') ?><br/>
      <?php previous_posts_link('&raquo; Next Entries') ?>
    </div><!--end entries-->
 </div   
    
    <?php //get_sidebar(); ?>

<?php //get_footer(); ?>