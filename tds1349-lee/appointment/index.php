<?php
include( '../client/data.php' );

$metaTitle = $profession . ' in ' . $city . ', Request an Appointment with ' . $businessName;
$metaDesc = 'Make an appointment with a ' . $profession . ' near me in ' . $city . ', ' . $state . ' ' . $zip;

$bannerHeading = 'Appointment Request';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<section class="content">
			<article class="article">
				<div class="article-body">
					<h1>Request an Appointment</h1>

					<div class="main-head">
						<h5 class="main-title">Call today or use the form below to request an appointment.</h5>
					</div>
					
					<div class="main-body">
						<div class="cols clearfix">

							<div class="col col-size1">
								<section class="section-contact">
									<div class="form-contact">
										<?php echo $form ?> </div>
								</section>
							</div>

							<div class="col col-size2">
								<section class="section-contact">
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