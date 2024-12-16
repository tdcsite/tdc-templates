<?php

include( '../client/data.php' );

$metaTitle = 'Meet the Team at ' . $businessName . ' in ' . $city . ' ' . $zip;
$metaDesc = 'Our team is here to help. We are located in ' . $city . ', ' . $state . ', we offer general, cosmetic, and family dentistry in ' . $SEOkeywords;

$bannerHeading = 'Meet Our Team';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<div class="content content-team">
			<article class="article">
				<div class="article-body">
					<h1>Meet the Team at <?php echo $businessName ?> </h1>


					<section class="section-inner team">
						<div class="img img-team">
							<img src="<?php echo $baseurl ?>images/team/filler.jpg" alt="<?php echo $bannerHeading?>">	
						</div>
						<div class="team-info">
							<h4><strong>Team Member Name</strong><br><span>Position or Title</span></h4>
								<p>Dr. John Smith is a Southern California native who obtained his license to practice from the prestigious University of Southern California (USC) School of Dentistry. She graduated amongst the top of his class. Before this accomplishment, he earned his Bachelor’s Degree in Biology from University of California.</p>
						</div>
					</section>



					<section class="section-inner team">
						<div class="img img-team">
							<img src="<?php echo $baseurl ?>images/team/filler.jpg" alt="<?php echo $bannerHeading?>">
						</div>
						<div class="team-info">
							<h4><strong>Team Member Name</strong><br><span>Position or Title</span></h4>
								<p>Dr. John Smith is a Southern California native who obtained his license to practice from the prestigious University of Southern California (USC) School of Dentistry. She graduated amongst the top of his class. Before this accomplishment, he earned his Bachelor’s Degree in Biology from University of California.</p>
						</div>
					</section>



					<section class="section-inner team">
						<div class="img img-team">
							<img src="<?php echo $baseurl ?>images/team/filler.jpg" alt="<?php echo $bannerHeading?>">
						</div>
						<div class="team-info">
							<h4><strong>Team Member Name</strong><br><span>Position or Title</span></h4>
								<p>Dr. John Smith is a Southern California native who obtained his license to practice from the prestigious University of Southern California (USC) School of Dentistry. She graduated amongst the top of his class. Before this accomplishment, he earned his Bachelor’s Degree in Biology from University of California.</p>
						</div>
					</section>


				</div>
			</article>
		</div>

	</div><!-- /.shell -->
</div> <!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>
