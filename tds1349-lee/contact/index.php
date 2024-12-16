<?php
include( '../client/data.php' );

$metaTitle = $profession . ' Near Me in ' . $city . ', ' . $state . ' ' . $zip . ' - ' . $businessName;
$metaDesc = 'Looking to find the top ' . $profession . ' near you? We are located at ' . $street . ', ' . $city . ', ' . $state . ' ' . $zip;

$bannerHeading = 'Contact Our Office';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<section class="content">
			<article class="article">
				<div class="article-body">
					<h1>Contact Us</h1>

					<div class="main-head">
						<h5 class="main-title">Call today or use the form below to contact our office.</h5>
					</div>

					<div class="main-body">
						<div class="cols clearfix">

							<div class="col col-size1">
								<p class="contacts">
									<strong>
										<?php echo $name ?><br/>
										<?php echo $businessName ?>
									</strong><br>
									<?php echo $address ?>
								</p>

								<div class="callout-phone">
									<p>Call us today:<br/>
										<?php echo $phone ?>
									</p>
								</div>
								<br/>
								<p class="hours"> <span>Hours of Operation</span> <br>
									<?php echo $hours ?>
								</p>
							</div>

							<div class="col col-size2">
								<section class="section-contact">
									<div class="form-contact">
										<?php echo $form ?> </div>
								</section>
							</div>

						</div>
					</div>
				</div>
			</article>
		</section>

		<?php include '../inc/sidebar.php'; ?>

	</div>
	<!-- /.shell -->
</div> <!-- .wrapper -->

<?php include('../inc/footer.php'); ?>