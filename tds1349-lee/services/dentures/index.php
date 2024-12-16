<?php

include( '../../client/data.php' );

$metaTitle = 'Dentures in ' . $city . ', ' . $state . ' - Dentures in ' . $zip;
$metaDesc = $businessName . ' provides Dentures in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for Dentures.';

$bannerHeading = 'Dentures';
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
						<img src="<?php echo $baseurl ?>images/dental-services/denture.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p>Advances in dental technology provide dentists with a variety of procedures to enhance a patient's smile. <strong>Dentures</strong> offer patients who have experienced tooth loss a natural-looking smile that lasts. Many patients find that dentures give them greater confidence in social situations while providing a similar function to their natural teeth.</p>
					<div class="clearfix"></div>

					<h3>Advantages of Dentures</h3>

					<ul>
						<li><strong>Enhance Facial Features:</strong> missing teeth can cause areas of your face to sag. Dentures resolve this issue to restore your natural facial features.</li>
						
						<li><strong>Smoother Speech:</strong> Replacing missing teeth allow you annunciate clearer and communicate better.</li>
						
						<li><strong>Improved Chewing:</strong> Missing teeth can make it challenging to eat your favorite foods. Dentures allow you to chew comfortably and get back to enjoying your favorite dishes.</li>
						
						<li><strong>Improved Oral Health:</strong> By replacing decayed teeth, you can improve your oral health by protecting your remaining natural teeth.</li>
					</ul>
					<br>
					<h3>How Dentures Work</h3>
					<p>Depending on the condition, the dentist may recommend partial or full dentures to restore a patient's smile.</p>
					<ul>

						<li><strong>Full Dentures:</strong> After all remaining teeth have been removed and your gums have healed properly, the dentist will place the removable dentures. The dentures may feel awkward for the first few weeks; however, they should become comfortable and feel natural in your mouth.</li>
						<li><strong>Partial Dentures:</strong> Unlike full dentures, partial dentures only replace a few missing teeth while keeping your healthy natural teeth in place.</li>
					</ul>

					
					<div class="img">
						<!--<img src="<?php echo $baseurl ?>images/dental-services/generic-smile3.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $zip ?>">-->
					</div><br>

					<h2 class="article-title">Caring for Your Dentures</h2>
					<p>Rinsing and brushing your dentures will keep them clean and free of bacteria. You can keep them from warping by placing them in a proper container while not in use. Overall, proper oral hygiene will keep your new smile bright and help maintain your oral health.

					<br><br> <strong>Dentures</strong> are a proven appliance recommended by many dentists to help improve patients' smiles after tooth removal or loss. To learn more about how dentures can enhance your smile, please call our office at <?php echo $phone ?>.<br>
					</p>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php');	?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
