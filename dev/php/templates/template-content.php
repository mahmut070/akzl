<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer grid-home">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h4 class="website-titel"><?php the_title(); ?></h4>
				<div class="u-gridRow">					
					<div class="u-gridCol8">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
					<div class="u-gridCol4">
						  <?php include_once('sidebar.php'); ?>
					</div>
				</div>			
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
