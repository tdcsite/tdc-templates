<?php

include( '../../client/data.php' );

$metaTitle = 'Dental Exam & Cleaning in ' . $city . ', ' . $state . ' - Teeth Cleaning in ' . $zip;
$metaDesc = $businessName . ' provides Dental Exam & Cleaning in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for a Dental Exam & Cleaning.';

$bannerHeading = 'Dental Exam and Cleaning';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>
<div class="wrapper">
	<div class="shell">

<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1><?php echo $bannerHeading ?> in <?php echo $city ?></h1>

					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/generic-smile4.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>
					
					<p>Regular <strong>dental cleanings and exams</strong> are vital to maintaining your oral health and preventing future complications.</p>

					<div class="clearfix"></div>
					
					<h2 class="article-title">Dental Cleanings in <?php echo $city ?></h2>
					<p>The American Dental Association (ADA) recommends that patients visit a dentist twice every year. Most insurances will cover two visits as a result of this recommendation. This is because traditional brushing methods are unable to remove tartar, though plaque prevention is still possible. 
					</p>

					<p> A dental cleaning will remove bacteria, tartar buildup, and plaque from the surface of your teeth. This is vital to ensure that your teeth stay in great health. <br><br> In addition, your dental cleaning includes a polishing that will give your teeth a nice shine!!</p>
					
					<h2 class="article-title">Give Us A Call</h2>
					<p>If you want to learn more about our dental cleaning and exams, or if you have any other questions or concerns, then please call our office at <?php echo $phone;?>.
					</p><br>
				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
