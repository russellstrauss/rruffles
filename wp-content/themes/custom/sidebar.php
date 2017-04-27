<div id="sidebar">


 


<div id="sidebarright">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(3) ) : ?>


<h3>Archives</h3>	
		<ul>
    <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
  	</ul>	

 <h3>Categories</h3>
	 <ul>
	<?php wp_list_categories('show_count=1&title_li='); ?>
	</ul>


				<h3>Links</h3>
				<ul>
				<?php wp_list_bookmarks('categorize=0&title_li='); ?>
				</ul>

				<h3>Feeds</h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
				</ul>

				


<?php endif; ?>
</div><!--sidebarright-->


<div id="sidebarleft">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
		
<h3>Search</h3>
	<?php include(TEMPLATEPATH . '/searchform.php'); ?>

<?php if (function_exists('akpc_most_popular')) { ?>
<h3>Popular</h3>
<ul>
<?php akpc_most_popular($limit = 5); ?>
</ul>
<?php } ?>

		


				



			<?php endif; ?>
			

								
</div><!--end sidebarleft-->				
</div><!--end sidebar-->