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
				© 2017 Centre for Higher Education Research, Policy &amp; Practice<br>
			</div>

			<div class="col_half col_last tright">
				
				<div class="clear"></div>

				<!-- <i class="icon-envelope2"></i> email@cherpp.ca -->
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
