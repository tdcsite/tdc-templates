<?php
include( '../client/data.php' );

$metaTitle = 'Office Technology in ' . $city . ' - ' . $profession . ' in ' . $zip;
$metaDesc = $businessName . ' provides ' . $SEOkeywords . ' Schedule an appointment with our top rated ' . $profession . ' in ' . $city;

$bannerHeading = 'Technology';
include( '../inc/header.php' );
?>


<section class="section section-cta2">
	<div class="shell">

		<div class="section-header">
			<h3>State of the Art Dental Technology</h3>
		</div>


		<div class="cta">
			<div class="img"><img src="<?php echo $baseurl ?>images/conebeam.jpg" alt="Cone Beam CT Imaging in <?php $city ?>"> </div>
			<article>
				<h4>Cone Beam CT Imaging</h4>
				<p>Our oral imaging system gives our practice the ability to capture high quality digital images, all while limiting dose exposure, which means a safer and quicker dental visit for our patients. Digital images are available for viewing almost immediately and images can even be captured much quicker, using less radiation than standard x-rays.</p>
				 
			</article>
		</div>
		
		<br>
		
		<!-- <div class="cta">
			<div class="img">
				<img src="<?php echo $baseurl ?>images/intraoral.jpg" alt="Intra-Oral Camera in <?php $city ?>"> </div>
			<article>
				<h4>Intra-Oral Scanner</h4>
				<p>The Intra-Oral scanner allows us to take impressions without the messy impression material that may cause nausea or gagging. It can help us diagnose misaligned teeth and get treatments started much faster. Our scanner can also help us plan and build beautiful smiles to meet your treatment goals.</p>
				 
			</article>
		</div>

		<br> -->
		
		<div class="cta">
			<div class="img">
				<img src="<?php echo $baseurl ?>images/digital-xrays.jpg" alt="Digital X-Rays in <?php $city ?>"> </div>
			<article>
				<h4>Digital X-Rays</h4>
				<p>Digital x-rays use a digital image capture device in place of traditional film, sending an image immediately to a computer. The result is a highly-detailed image of the mouth, and its contrast and resolution can be enhanced to more easily diagnose dental problems and determine the best treatment with less radiation.</p>
				 
			</article>
		</div>
		
		<!-- <br>

		<div class="cta">
			<div class="img">
				<img src="<?php echo $baseurl ?>images/dental-services/laser-dentistry.jpg" alt="Laser Dentistry in <?php $city ?>"> </div>
			<article>
				<h4>Laser Dentistry</h4>
				<p>Laser dentistry has become increasingly popular because it offers many benefits for both dentists and patients. It's an innovative technique used in dental care to provide patients with more precise, minimally invasive, and more effective treatments for cavities, gum surgery, orthodontics, and other oral issues.</p>
			 
			</article>
		</div> -->

	</div>
</section>



<?php include('../inc/footer.php'); ?>
