<div id="sidebar" class="sidebar">
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
