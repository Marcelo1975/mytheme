<footer>
	<div class="footer_widgets">
		<div class="row">
			<?php
			if(is_active_sidebar('mt_footersidebar')){
				dynamic_sidebar('mt_footersidebar');
			}
			?>
		</div>
	</div>
	<div class="main_footer">
		<div class="main_footer_left">
			&copy; Todos os direitos reservados - 
			<?php if(get_theme_mod('mt_privacy_url')): ?>
				<a href="<?php the_permalink(get_theme_mod('mt_privacy_url')); ?>">Política de Privacidade</a>
			<?php endif; ?>
		</div>
		<div class="main_footer_right">
			Criado por M18web | <?php echo date('Y'); ?>
		</div>
		<div class="main_footer_scroll">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/seta-up.png" />
		</div>
	</div>
</footer>
<script type="text/javascript">
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>
</body>
</html>