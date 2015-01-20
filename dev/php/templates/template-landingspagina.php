<?php
/*
Template Name: Landingspagina
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


	<div class="full-bg-doelgroep">
		<div class="u-gridContainer">
			<div class="u-gridRow">		
				<div class="u-gridCol4 box-doelgroep">
					 <a href="/mkb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mkb.png"></a> <br>
					 <b>MKB</b> 
				</div>

				<div class="u-gridCol4 box-doelgroep">
					<a href="/zzp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/zzp.png"></a> <br>
					<b>ZZP</b>
				</div>

				<div class="u-gridCol4 box-doelgroep">
					<a href="/particulieren"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/particulieren.png"></a> <br>
					<b>PARTICULIEREN</b>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
