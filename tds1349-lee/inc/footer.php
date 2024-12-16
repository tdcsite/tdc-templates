<!-- Include file for promos and highlights at the bottom of the site -->
<?php require dirname(__FILE__) . '/promos-highlights.php';?>

<!-- Include file for large footer map -->
<div class="footer-map">
	<?php echo $map ?>
</div>

<!-- FOOTER START -->
<footer class="footer">
	<div class="shell">
		<div class="footer-body">
			<div class="footer-cols">

				<div class="footer-col">
					<div class="footer-content">
						<p>
							<strong><?php echo $businessName ?></strong><br>
							<?php echo $address ?><br/>
							<?php echo $phone ?>
						</p>

						<div class="socials">
							<ul>
								<li><a href="<?php echo $facebookLink ?>" target="_blank"><img src="<?php echo $baseurl ?>images/social/icon-fb.png" alt="<?php echo $businessName ?> on Facebook" /></a>
								</li>
								
								<li><a href="<?php echo $googleLink ?>" target="_blank"><img src="<?php echo $baseurl ?>images/social/icon-google.png" alt="<?php echo $businessName ?> on Google" /></a>
								</li>

								<!--<li><a href="<?php echo $yelpLink ?>" target="_blank"><img src="<?php echo $baseurl ?>images/social/icon-yelp.png" alt="<?php echo $businessName ?> on Yelp" /></a>
								</li>-->

								<li><a href="<?php echo $instagramLink ?>" target="_blank"><img src="<?php echo $baseurl ?>images/social/icon-insta.png" alt="<?php echo $businessName ?> on IG" /></a>
								</li>

							</ul>
						</div>
					</div>
				</div>

				<div class="footer-col">
					<p><strong>Office Hours:</strong><br>
						<?php echo $hours ?>
					</p>
				</div>

				<div class="footer-col">
					<div class="footer-content">
						<p><strong>Links:</strong>

							<ul>
								<li><a href="<?php echo $baseurl ?>">Home</a></li>
								<li><a href="<?php echo $baseurl ?>about">About</a></li>
								<!--<li><a href="<?php echo $baseurl ?>blog">Blog</a></li>-->
								<li><a href="<?php echo $baseurl ?>reviews">Reviews</a></li>
								<li><a href="<?php echo $baseurl ?>contact">Contact</a></li>
								<li><a href="<?php echo $baseurl ?>appointment">Appointment</a></li>
							</ul>

						</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</footer>

<!-- IF YOU WANT TO ADD CLICK TO TEXT REMOVE THESE COMMENTS 
	<a href="sms:<?php echo $sms ?>" class="btn-fixed">Click to Text</a>
-->

<div class="footer-bar">
	<div class="shell">

		<p class="copyright">&copy;
			<?php echo date('Y');?>
			<?php echo $businessName ?> | <a href="<?php echo $baseurl ?>disclaimers/privacy/">Privacy Statement</a> | <a href="<?php echo $baseurl ?>disclaimers/terms/">Terms of Use</a> | <a href="<?php echo $baseurl ?>disclaimers/web-accessibility/">Web Accessibility</a> | <a href="https://www.docsites.com/" target="_blank">Dental Website Design</a> by TheDocSites
			<br><br>
		</p>
	</div>
</div>
<!-- FOOTER END -->

</div> <!-- .wrapper-inner -->

<!-- JS files and sticky nav js -->
<script src="<?php echo $baseurl ?>scripts-functions/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	window.addEventListener( "scroll", function () {
		myFunction();
	}, false );

	function myFunction() {
		if ( $( this ).scrollTop() > 142 && $( this ).width() >= 767 ) {
			$( '.nav' ).addClass( 'nav-fixed-sticky' );
		} else {
			$( '.nav' ).removeClass( 'nav-fixed-sticky' );
		}
	}
</script>
<script src="<?php echo $baseurl ?>scripts-functions/functions.js"></script>

<!-- accessibility widget --> <script data-account="GTnk0NIOAF" src="https://cdn.userway.org/widget.js"></script>

</body>
</html>