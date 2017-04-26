<?php
/*
	Template Name: About
*/
?>




<?php get_header(); ?>

<div id="container">

<div id="entries">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="date" style="float: left;"><?php the_title(); ?></div>

<div class="post" style="margin-top: 250px; text-align: justify; border: 1px solid black; padding: 50px 50px 36px 50px;">
<?php the_content(); ?>
</div><!--end posts-->

 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

</div><!--end entries-->
