<?php

include( '../../client/data.php' );

$metaTitle = 'Wisdom Tooth Removal in ' . $city . ', ' . $state . ' - Wisdom Tooth Extraction in ' . $zip;
$metaDesc = $businessName . ' provides Wisdom Tooth Removal in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for Wisdom Tooth Extractions.';

$bannerHeading = 'Wisdom Tooth Removal';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">


<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1><?php echo $bannerHeading ?> in <?php echo $city?></h1>


					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/wisdom-teeth-removal.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p>If your wisdom teeth are causing pain, discomfort, or swelling, schedule a visit with <?php echo $businessName ?> for a proper diagnosis to determine whether or not they should be extracted.</p>

					<h3>Wisdom Tooth Extraction <?php echo $city?></h3>
					<p>If your wisdom teeth are impacted, it is recommended that you remove them. But keep in mind that failing to remove teeth that are growing in at an angle can cause them to be trapped within your jawbone, resulting in pain and a myriad of complications that may require additional treatment.</p>

					<p>Before extracting the teeth, we will take an x-ray to observe the position and condition of your wisdom teeth underneath the gums. When ready for the extraction, a local anesthesia will be administered to numb the area and make the process as comfortable as possible. </p>

					<p>Troublesome wisdom teeth can be extracted at any age, but delaying the process can make removal more troublesome and recovery much slower. If you’re in <?php echo $city?> or surrounding areas, please call our office at <?php echo $phone ?> to discuss more about <strong><?php echo $bannerHeading ?> in <?php echo $city ?></strong>.</p>

				</div>
			</article>
		</div>
<!-- START CONTENT -->

		
		<?php  include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
