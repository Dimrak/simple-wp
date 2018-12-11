<?php get_header(); ?>
<div class="container">

	<div class="main">
		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post();	?>
				<article class="post">
					<h3>
						<!-- CREATES a link apart for every post -->
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>

						</a>
					</h3>
					<div class="meta">
						Created by <?php the_author(); ?> on <?php the_date('l jS \of F Y h:i:s A'); ?>
						<!-- Another way the_date => the_time(), by itself it gives 10:18 pm ****  -->

					</div>
					<!-- DISPLAYS an introduction of the text of each post -->
					<?php the_excerpt(); ?>
					<br>
					<!-- Permalink to the post's page for each post -->
					<a class="button" href="<?php the_permalink(); ?>">
						Read more
					</a>
				</article>
			<?php endwhile; ?>	
			<?php else : ?>	
				<?php echo wpautop('Sorry no posts were found'); ?>

			<?php endif; ?>	

		</div>

		
	</div>

	<?php get_footer(); ?>