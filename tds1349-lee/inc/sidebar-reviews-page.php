<div id="sidebar" class="sidebar">
	<br><br>
	<center>
	<h4>Share Your Experience:<br>&#11088; &#11088; &#11088; &#11088; &#11088;</h4>
	</center>
	<div class="review-btn">
		<!--<a href="<?php echo $yelpReviewUs?>" target="_blank" class="yelp"><img src="<?php echo $baseurl?>images/ico-yelp.png" alt="Review Us on Yelp">Review Us on Yelp</a>
		<br><br>-->
		
		<a href="<?php echo $googleReviewUs?>" target="_blank" class="google"><img src="<?php echo $baseurl?>images/ico-google.png" alt="Review Us on Google">Review Us on Google</a>
		<br><br>
		
		<a href="<?php echo $facebookReviewUs?>" target="_blank" class="fb"><img src="<?php echo $baseurl?>images/ico-fb.png" alt="Review Us on Facebook">Review Us on Facebook</a>
	</div>


	<ul class="widgets">
		
		<li class="widget widget-offers">
			<div class="widget-head">
				<h4>Services</h4>
			</div>
			
			<div class="widget-body">
				<ul class="sidebar-list">
					<?php include ('services-list-all.php'); ?>
				</ul>
			</div>
		</li>
		
		<li class="widget widget-callout">
			<div class="callout">
				<div class="callout-content"><p>Schedule Today</p></div>

				<div class="callout-actions"><a href="<?php echo $baseurl;?>appointment" class="btn btn-darkorange">Request Appointment</a></div>

				<div class="callout-phone"> <span>Call Now</span><br/><strong><?php echo $phone ?></strong></div>
			</div>
		</li>
		
	</ul>

</div> 