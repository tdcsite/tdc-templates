<?php

include( '../../client/data.php' );

$metaTitle = 'Implant Dentist in ' . $city . ', ' . $state . ' - Dental Implants ' . $zip;
$metaDesc = $businessName . ' provides dental implants in ' . $city . '. Schedule an appointment with our ' . $city . ' implant dentist.';

$bannerHeading = 'Dental Implants';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>
<div class="wrapper">
	<div class="shell">

<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>Implant Dentist in <?php echo $city ?></h1>
					
					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/dental-implants2.jpg" alt="Implants Dentist in <?php echo $city ?>">
					</div>
					
					
					<p>If you have a missing tooth that's impacting your comfort or confidence, a dental implant could be your solution. </p>
					<p><strong>Dental implants</strong> have had a considerable impact on modern dentistry – offering a highly viable solution to replacing missing teeth. <br><br>A dental implant is essentially an artificial tooth that is placed, or implanted, into your jaw where a dental crown is then capped on for a complete tooth that looks and even feels like a real tooth.  The best part is that the new replacement tooth will function as seamlessly as your regular tooth.</p>
					

					
					<h3 class="article-title">Dental implants can replace:</h3>
					<ul>
						<li>A single tooth</li>
						<li>Multiple teeth</li>
						<li>All of your teeth <em>(implant dentures)</em>
						</li>
					</ul>

					
					<h3 class="article-title">Dental implants benefit you by:</h3>
					<ul>
						<li>Preventing teeth from shifting to close the gap caused by a missing tooth</li>
						<li>Preserving bone and stability for your teeth</li>
						<li>Enhancing the appearance of your smile</li>
					</ul>
					<br>
					<h2>Reasons you should consider getting a dental implant:</h2><br>

					<div class="dental-plan has-img"> <img src="<?php echo $baseurl ?>images/dental-services/generic-smile3.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
						<p>Missing Teeth</p>
					</div>
					
					<div class="dental-plan has-img"> <img src="<?php echo $baseurl ?>images/dental-services/denture.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $state ?>">
						<p>Dislike Dentures</p>
					</div>
					
					<div class="dental-plan has-img"> <img src="<?php echo $baseurl ?>images/dental-services/emergency.png" alt="<?php echo $bannerHeading ?> in <?php echo $zip ?>">
						<p>Other Dental Issues</p>
					</div>
					
					
					<br>
					 

					<h2 class="article-title">Discuss Your Options with Our Implant Dentist</h2>
					<p>To find out whether or not you are a good candidate for dental implants, please call us at <?php echo $phone ?> for more information.
					</p><br>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>

