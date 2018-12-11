
<!-- Sidebar including widgets - Loads in all pages -->
<div class="sidebar">
			<?php if (is_active_sidebar('sidebar')) : ?>
				<?php  dynamic_sidebar('sidebar'); ?>

			<?php endif; ?>
		</div>
		<div class="clr"></div>

<footer class="footer">
	<div class="container">
		<p><span class="entity">&andand;</span>  <?php the_time('Y'); ?> - <?php bloginfo('name'); ?></p>

	</div>
</footer>

<!-- Hace aparecer el menu de developing -->
<?php wp_footer(); ?>

</body>
</html>