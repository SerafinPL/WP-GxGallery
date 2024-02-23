<footer id="site-footer" class="header-footer-group">

	<div class="section-inner">

		<div class="footer-credits">

			<p class="footer-copyright">&copy;
				<?php echo date_i18n(_x('Y', 'copyright date format', 'twentytwenty')); ?>
				<a href="https://kubakoder.pl/" target="_blank">kubakoder.pl</a>
			</p><!-- .footer-copyright -->


		</div><!-- .footer-credits -->

		<a class="to-the-top" href="#site-header">
			<span class="to-the-top-long">
				<?php printf(__('To the top %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>'); ?>
			</span><!-- .to-the-top-long -->
			<span class="to-the-top-short">
				<?php printf(__('Up %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&uarr;</span>'); ?>
			</span><!-- .to-the-top-short -->
		</a><!-- .to-the-top -->

	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>