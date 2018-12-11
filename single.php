<!-- Indivial post page -->

<?php get_header(); ?>
<div class="container">
	<div class="main">

		<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post();	?>
				<h3>
					<!-- Shows the post name -->
					<?php the_title(); ?>
				</h3>
				<div class="meta">
					<!-- Shows the author and data created -->
					Created by <?php the_author(); ?> on <?php the_date('l jS \of F | Y h:i:s A'); ?>
				</div>
				<!-- Shows all the post content -->
				<?php the_content(); ?>
			<?php endwhile; ?>	
			<?php else : ?>	
				<?php echo wpautop('Sorry no posts were found'); ?>

			<?php endif; ?>	
			<!-- Have a comment functionallity on each post single.php page -->
			<?php comments_template(); ?>
		</div>
		
	</div>

	

	<?php get_footer(); ?>