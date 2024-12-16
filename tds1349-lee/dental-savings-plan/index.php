<?php 
include( '../client/data.php' );

$metaTitle = 'Savings Plan, Discounts on Services and Treatments - ' . $businessName;
$metaDesc = 'If you have no Insurance for the ' . $profession . ', we offer discounts with our Savings Plan from ' . $businessName . ', to learn more call today.';

$bannerHeading = 'Savings Plan';
include( '../inc/new-patients.php' );
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<section class="content dental-savings-plan-iterior-page">
			<article class="article">
				<div class="article-body">
					<h1>Dental Savings Plan</h1>

					<?php include ('../inc/savings-dental-plans.php'); ?>

					<div class="clear-fix-home"></div>

					<br>
					<hr><br>

					<h2>Program Guidelines</h2>
					<ul>
						<li>The <?php echo $businessName?> Dental Savings Plan gives our patients 12% off dental services for 12 consecutive months starting the day the plan is purchased.</li>

						<li>Payment is due in full on the day of service.</li>

						<li>This savings plan cannot be used in conjuction with another dental plan.</li>

						<li>This savings plan cannot be used in conjuction with any office promotions.</li>
						<li>Non-refundable</li>
						<li>Excludes dental products (toothbrushes, toothpaste, whitening gel, etc...)</li>

					</ul>

				</div>
			</article>
		</section>

	</div><!-- /.shell -->
</div> <!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>