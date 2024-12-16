<?php

include( '../../client/data.php' );

$metaTitle = 'Emergency Dentistry in ' . $city . ', ' . $state . ' - Emergency Dentistry in ' . $zip;
$metaDesc = $businessName . ' provides Emergency Dentistry in ' . $city . '. Schedule an appointment with our ' . $city . ' Emergency Dentistry team.';

$bannerHeading = 'Emergency Dentistry';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">


<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>Emergency Dentist <?php echo $city?></h1>

					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/wisdom-teeth03.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<h3>Are you experiencing toothache or pain?</h3>
					<p>Schedule an immediate visit in order to treat the pain with our <strong>Emergency Dentist in <?php echo $city?></strong>.</p>

					<p>Our office offers emergency dental appointments. If you come in with an oral infection, a severe toothache, or a cracked or broken tooth, we will do everything we can to relieve your pain and fix the problem – we can possibly treat you on the same day you come in!</p>

					<h2>Emergency Dentist Near Me</h2>
					<br>
					<p><strong>We Have Time for You</strong><br>There is nothing worse in dentistry than being in tremendous pain from a toothache or having some other dental emergency and not being able to schedule an appointment with your dentist. Our doctors reserve openings in our schedule every business day so we have the time needed to help patients in pain.</p>

					<h3>Emergency Dental Appointments</h3>
					<p>To make an emergency appointment, call our office at <?php echo $phone ?> or <a href="<?php echo $baseurl;?>contact">contact us</a> and we will get back to you as soon as possible.</p><br>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include( '../../inc/footer.php' ); ?>