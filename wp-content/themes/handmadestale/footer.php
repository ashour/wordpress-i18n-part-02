			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="footer__copyright">
                    &copy;
                    <?php echo esc_html(date('Y')); ?>
                    Copyright <?php bloginfo('name'); ?>.
                    <?php esc_html_e('Powered by', 'handmadestale'); ?>
                    <a href="//wordpress.org" target="_blank">
                        <?php esc_html_e('WordPress'); ?>
                    </a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>
