<!-- Footer
============================================= -->
<footer id="footer" class="dark">

	<div class="container">

	</div>

	<!-- Copyrights
	============================================= -->
	<div id="copyrights">

		<div class="container clearfix">

			<div class="col_half">
				Copyright © 2017 CHERPP<br>
			</div>

			<div class="col_half col_last tright">
				<div class="fright clearfix">
					<a href="<?php  bloginfo('template_url');  ?>/#" class="social-icon si-small si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>

					<a href="<?php  bloginfo('template_url');  ?>/#" class="social-icon si-small si-borderless si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>

					<a href="<?php  bloginfo('template_url');  ?>/#" class="social-icon si-small si-borderless si-gplus">
						<i class="icon-gplus"></i>
						<i class="icon-gplus"></i>
					</a>

					<a href="<?php  bloginfo('template_url');  ?>/#" class="social-icon si-small si-borderless si-pinterest">
						<i class="icon-pinterest"></i>
						<i class="icon-pinterest"></i>
					</a>

					<a href="<?php  bloginfo('template_url');  ?>/#" class="social-icon si-small si-borderless si-linkedin">
						<i class="icon-linkedin"></i>
						<i class="icon-linkedin"></i>
					</a>
				</div>

				<div class="clear"></div>

				<i class="icon-envelope2"></i> email@cherpp.ca
			</div>

		</div>

	</div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/readmore.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?php  bloginfo('template_url');  ?>/js/functions.js"></script>

<?php  wp_footer();  ?>

<!-- Highlight parent page link when on child page -->
<?php if (is_page()) {   //  displaying a child page ?>
    <script type="text/javascript">
        jQuery("li.current-page-ancestor").addClass('current-menu-item');
    </script>
<?php } ?>

</body>
</html>
