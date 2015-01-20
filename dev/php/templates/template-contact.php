<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer grid-home" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
			<h4 class="website-titel"><?php the_title(); ?></h4>
				<div class="Content-text">

					<div class="u-gridRow">										
						<div class="adress-map u-gridCol12">
							<div id="map_canvas"></div>
						</div>
					</div> <!-- /gridRow -->

					<div class="hr-style super-margin">
						<hr>
					</div>

					<div class="u-gridRow">	
						<div class="adress u-gridCol4">
							<div class="adress-info">
								<p>Administratiekantoor Zeegers & Leeman</p>
								<p>D. Losstraat 24</p>
								<p>3201 EJ Spijkenisse</p>
								<p>Email: info@akzl.nl</p>
								<p>Tel: 0615229522</p>
							</div>
						</div>

						<div class="u-gridCol8">
							<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
							<?php the_content(); ?>
					
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

