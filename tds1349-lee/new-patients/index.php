<?php

include( '../client/data.php' );

$metaTitle = 'Top Rated ' . $profession . ' Near Me in ' . $city . ', ' . $state . ' ' . $zip . ', ' . $businessName;
$metaDesc = 'Are you in ' . $city . ' and looking for the best ' . $profession . '? At ' . $businessName . ' we offer ' . $SEOkeywords;

$bannerHeading = 'New Patients';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<section class="content">
			<article class="article">
				<div class="article-body">
					<h1>New Patient Information</h1>

					<div class="img"><img src="<?php echo $baseurl ?>images/dental-services/new-patients.jpg"></div>

					<p>At <?php echo $businessName ?>, your first appointment includes a thorough exam and gathering any information that our dentist must be aware of in order to provide care specifically to your oral health. We understand that all patients are different and require individualized care. </p>
					

					<a href="#" class="btn-dental" target="_blank">Download New Patient Form</a><br><br><br>
					
					
					<div class="clear clearfix"></div>
					<hr><br>
				<br>	<h4>Insurance Accepted - ask us for which providers we accept.</h4>
					<div class="img"><img src="<?php echo $baseurl ?>images/insurance.jpg"></div><br>
					
					
					<br><hr><br>
					
						
				<br>	<h4>We finance through Care Credit, ask us how</h4><br><br>
					<div class="img"><img src="<?php echo $baseurl ?>images/care-credit-logo.png"></div><br>
					
					<br><hr><br>
					
				
					<h3 class="article-title">What Every Patient Can Expect </h3>
					
					<p>At our practice, every patient can expect to be treated with prompt service at their specified appointment time. Our patients can also look forward to a comfortable experience. We understand that visiting a new dentist can be stressful, which is why our practice works actively to accommodate all patients and alleviate any fears they may have about a new dentist or dentistry treatments. Familiarizing yourself with our practice, services, and our dentist is a great first step to creating a long term and comfortable experience with dentistry.
					</p>

				</div>
			</article>
		</section>
		
		<?php include ('../inc/sidebar.php'); ?>
		
	</div><!-- /.shell -->
</div><!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>
