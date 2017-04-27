<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<h3><?php //comments_number('add Your Comment', '1 Comment', '% Comments' );?></h3>

						
<ul class="commentlist">
	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		<?php //edit_comment_link('e ','',''); ?><?php comment_author_link() ?> <?php echo ' &#8212; ' . get_the_date() . ', ' . get_the_time()  ?>
				<?php if ($comment->comment_approved == '0') : ?>
				<!-- <em>your comment is awaiting moderation.</em> -->
				<?php endif; ?>
				<?php comment_text() ?><br>
		</li>

			<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

</ul>


 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<a name="respond"></a>
					<?php if (get_comments_number() > 0) {
					?>
						<style type="text/css">
							.comment-options {
								border-top: 1px solid black;
								padding-top: 10px;
								clear: both;
							}
						</style>	
					<?php
					} ?>
					<div class="comment-options">		<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Comments for this post have been closed.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Comments for this post have been closed.			
						
						<?php } ?>

				<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>you must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment. or <a href="http://journal.rruffles.com/wp-login.php?action=register">register</a>.</p>
</div><!-- end container -->
				<?php else : ?>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( $user_ID ) : ?>
				<p>logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">logout &raquo;</a></p>
					<?php else : ?>
				
				<p><label class="text">name<?php if ($req) echo " (required)"; ?></label>: <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="textfield" tabindex="1" /></p>
				<p><label class="text">email<?php if ($req) echo " (required)"; ?></label>: <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" class="textfield" tabindex="2" /></p>
				<p><label class="text">website: </label><input type="text" name="url" id="url" value="http://" class="textfield" tabindex="3" /></p>
				
				<?php endif; ?>

	<textarea name="comment" id="comment" class="commentbox" tabindex="4"></textarea>
				
<p><input style="float: right;" alt="Submit" name="submit" type="submit" tabindex="5" value="post"/></p>
								
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				<?php do_action('comment_form', $post->ID); ?>
				</form></div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>