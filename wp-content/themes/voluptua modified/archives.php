<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="container">
	<div style="text-align: center;" id="entries">
		<p style="text-decoration: underline;"> Archives </p>
		<ul class="archives">
			<?php wp_get_archives('type=yearly&show_post_count=1'); ?>
		</ul>
		</div><!--end entries-->
</div>
