<?php
include( '../client/data.php' );

$metaTitle = 'Dental Treatments and Services in ' . $city . ', ' . $state . ' - Dentist in ' . $zip;
$metaDesc = $businessName . ' provides general, family and cosmetic dentistry in ' . $city . '. Schedule an appointment with our top rated ' . $city . ' dentist.';

$bannerHeading = 'Services';
include( '../inc/header.php' );
?>


<!-- REMOVE THE COMMENTS BELOW TO ADD THE IMAGE BOX SERVICES -->
<?php /*?>
<?php include ('../inc/homepage/service-boxes.php'); ?>
<?php */?>


<section class="section">
	<div class="shell">
		<div class="section-body">
			<div class="section-header">
				<h2>Treatments &amp; Services</h2>
			</div>

			<p><strong><?php echo $businessName?></strong> is here for all your dental needs. From preventive care check-ups to cosmetic and restorative procedures, our staff can provide your whole family's complete dental care. When you choose <?php echo $businessName?>, you are covered from your first exam to the last and you can finally achieve that perfect smile.</p>
			
			<p><strong>We offer a wide variety of dental treatments &amp; services, including:</strong></p>

			<ul class="services">
				<?php include ('../inc/services-list-all.php'); ?>
			</ul>

		</div>
	</div>
</section>

<?php include( '../inc/footer.php' ); ?>

