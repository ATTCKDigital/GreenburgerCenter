		</main>
	</div>
	<footer class="component-footer" role="contentinfo">
		<?php /* echo Utils::render_template('components/component_footer/footer.php'); */ ?>
	</footer>
	<?php
		if (get_field('show_gdpr', 'options')) {
			// Show the GDPR pop-up if the option is enabled
			echo Utils::render_template('components/component_footer/gdpr.php');
		}
	?>
	<?php wp_footer(); ?>
	</body>
</html>
