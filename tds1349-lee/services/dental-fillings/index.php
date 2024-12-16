<?php

include( '../../client/data.php' );

$metaTitle = 'Dental Fillings in ' . $city . ', ' . $state . ' - Teeth Fillings in ' . $zip;
$metaDesc = $businessName . ' provides Dental Fillings in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for Dental Fillings.';

$bannerHeading = 'Dental Fillings';
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
						<img src="<?php echo $baseurl ?>images/dental-services/dental-fillings.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p><strong>Dental fillings</strong> are a common procedure used to treat cavities or tooth decay. Fillings are used in order to prevent minor decay from rapidly spreading bacteria into the tooth’s pulp.</p>
					<div class="clearfix"></div>

					<h3><strong>You may need a filling for any of the following reasons:</strong></h3>

					<ul>
						<li>You have chipped teeth.</li>
						<li>There is space between two teeth.</li>
						<li>Cracked/broken teeth.</li>
						<li>Decayed or worn teeth.</li>
					</ul>

					<br>
					<h2 class="article-title">Dental Fillings - The Procedure</h2>
					<p>The procedure itself takes up to an hour, which makes it relatively quick. Local anesthesia is applied to numb the area so that you are comfortable throughout the process. The filling is placed specifically to the shape and function of your tooth.</p>

					<h2 class="article-title">Discuss Your Options With Our Dentist</h2>
					<p>We will gladly provide you with an exam to review if you need a dental filling. For more information on dental fillings, please call our office at <?php echo $phone ?>.<br>
					</p>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
