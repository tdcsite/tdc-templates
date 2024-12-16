<?php

include( '../../client/data.php' );

$metaTitle = 'General Dentist in ' . $city . ', ' . $state . ' - General Dentistry ' . $zip;
$metaDesc = $businessName . ' provides general dentistry in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist.';

$bannerHeading = 'General Dentistry';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">

		<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>General Dentist in <?php echo $city ?></h1>
					
					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/general-dentistry.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p>Our practice provides general dentistry procedures including the prevention, diagnosis, and treatment of a wide variety of conditions and diseases that affect your teeth and gums.</p>

					<h2 class="article-title">We Are Committed to Your Oral Health</h2>
					<p>At <?php echo $businessName;?>, we are committed to ensuring your oral health is in excellent condition. </p>
					
					<div class="contents-quote">We make this possible through a variety of different procedures that comprehensively aim to improve or enhance your mouth’s well-being.</div>

					<h3 class="article-title">We offer a wide range of dentistry services including:</h3>
					<ul>
						<li>Dental cleaning</li>
						<li>Dental examinations</li>
						<li>Dental X-rays</li>
						<li>Deep cleaning</li>
						<li>and much more</li>
					</ul>
					
					<br>
					<a href="<?php echo $baseurl?>services" class="btn-dental">View All Services</a><br><br>
					<br>
					
					<h2 class="article-title">Personalized Oral Hygiene</h2>
					<p>At
						<?php echo $businessName;?>, we work with each and every patient to establish a customized dental hygiene plan that incorporates dental exams, x-rays, thorough teeth cleanings, tooth scaling and deep cleaning (if necessary), as well as the use of other diagnostic equipment to prevent and treat conditions that affect your oral health. </p>

					<h2 class="article-title">We’re Here to Help You</h2>
					<p>If you have any questions regarding the general dentistry services we provide, then please call our office at <?php echo $phone;?>.</p><br>

				</div>
			</article>
		</div>
		<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>