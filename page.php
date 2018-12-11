<?php get_header(); ?>
<div class="container">
	<div class="main">

		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post();	?>
				<article class="post">
					<h3>
						<!-- Shows the page title name -->
						<?php the_title(); ?>

					</a>
				</h3>

				<!-- DISPLAYS the totality of the page -->
				<?php the_content(); ?>
				<br>

			</article>
		<?php endwhile; ?>	
		<?php else : ?>	
			<?php echo wpautop('Sorry page was not found'); ?>

		<?php endif; ?>	
	</div>
	
</div>

<?php get_footer(); ?>