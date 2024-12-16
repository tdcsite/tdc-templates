
<!-- go to CSS line 3106 for flex percentage based on number of doctors --> 

<section class="section section-features light-bg">
	<div class="shell">
		<div class="section-body">
			
			<div class="section-header">
				<h1>Top Rated Dentists in <?php echo $city?></h1>
				<h2>Meet The Doctors</h2>
			</div>
			
			<ul class="features">
				
				<!-- DOCTOR 1 START -->
				<li class="feature half-feature">
					<div class="feature-inner">
						<div class="feature-single-image"> 
							<a href="<?php echo $baseurl ?>doctor-name1"><img src="<?php echo $baseurl ?>images/dental-services/doctor.jpg"  alt="<?php echo $nameShort ?>"></a> 
						</div>

						<div class="feature-content">
							<h5>Meet <?php echo $nameShort ?></h5>
							<p>Dr. <?php echo $name; ?> </p>
							<a href="<?php echo $baseurl ?>doctor-name1" class="btn btn-blue">Learn more</a>
						</div>
					</div>
				</li>
				<!-- DOCTOR 1 END -->

				<!-- DOCTOR 2 START -->
				<li class="feature half-feature">
					<div class="feature-inner">
						<div class="feature-single-image">
							<a href="<?php echo $baseurl ?>doctor-name2"><img src="<?php echo $baseurl ?>images/dental-services/doctor.jpg"  alt="<?php echo $nameShort2 ?>"></a>
						</div>

						<div class="feature-content">
							<h5>Meet <?php echo $nameShort2 ?></h5>
							<p>Dr. <?php echo $name2; ?>  </p>
							<a href="<?php echo $baseurl ?>doctor-name2" class="btn btn-blue">Learn more</a> 
						</div>
					</div>
				</li>
				<!-- DOCTOR 2 END -->

			</ul>
		</div>
	</div>
</section>
