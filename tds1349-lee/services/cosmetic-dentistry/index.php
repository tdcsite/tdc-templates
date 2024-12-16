<?php

include( '../../client/data.php' );

$metaTitle = 'Cosmetic Dentist in ' . $city . ', ' . $state . ' - Cosmetic Dentistry ' . $zip;
$metaDesc = $businessName . ' provides cosmetic dentistry in ' . $city . '. Schedule an appointment with our ' . $city . ' cosmetic dentist.';

$bannerHeading = 'Cosmetic Dentistry';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>
<div class="wrapper">
	<div class="shell">


<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>Cosmetic Dentist in <?php echo $city; ?></h1>

					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/cosmetic-dentistry.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city; ?>">
					</div>

					<h2 class="article-title">Make Lasting First Impressions</h2>
					<p>A dazzling smile is a necessary asset in today’s society. A nice smile gives you the ability to make lasting first impressions, which comes with many benefits.</p>

					<div class="contents-quote"><?php echo $businessName;?> offers <strong>cosmetic dentistry services in <?php echo $city; ?></strong> that are designed to improve the appearance of your smile through the use of advanced dental procedures.</div>
					
					<p>For example, a nice smile can help give you the confidence you need to succeed. <strong>Cosmetic dentistry</strong> can give you a smile to smile about. When you look in the mirror, you will be completely happy with what you see. That's what cosmetic dentistry is all about. </p>

					<div class="clear clearfix"></div>
					<h3>We offer a variety of cosmetic dental options to enhance your smile:</h3>
					<ul>
						<li>Dental Implants</li>
						<li>Dental Crowns</li>
						<li>Dental Veneers</li>
						<li>Teeth Whitening</li>
						<li>Dental Bonding</li>
						<li>Dental Bridges</li>
						<li>And more</li>
					</ul>
					
					<br>
					<a href="<?php echo $baseurl?>services" class="btn-dental">View All Services</a><br><br>
					
					<br>
					<h2 class="article-title">Call Us Today</h2>
					<p>If you want to improve your smile or if you have any questions regarding our cosmetic dentistry services, then please call our office at
						<?php echo $phone;?>. We’re happy to answer any questions, inquiries, or concerns you may have.
					</p>

				</div>
			</article>
		</div>
<!-- END CONTENT -->
		
		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>