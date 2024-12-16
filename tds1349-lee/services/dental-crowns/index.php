<?php

include( '../../client/data.php' );

$metaTitle = 'Dental Crowns in ' . $city . ', ' . $state . ' - Crowns in ' . $zip;
$metaDesc = $businessName . ' provides Dental Crowns in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for dental crowns.';

$bannerHeading = 'Dental Crowns';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">

<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>Dental Crowns in <?php echo $city ?></h1>
					
					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/crowns.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p>A tooth that is broken, damaged, or in general poor condition can be harmful to your health. It can also affect feeling comfortable about your tooth and your self-confidence.</p>

					<p>Dental crowns are almost exactly the way they sound – a crown, or cap, for your tooth. Dental crowns help restore a tooth, resulting in a truly aesthetically pleasing appearance.</p>
					<div class="clearfix"></div>
					<p><strong>Here are some of the reasons you need a dental crown:</strong></p>
					<h3 class="article-title">Reasons for crowns:</h3>

					<ul>
						<li>Tooth that is broken or fractured.</li>
						<li>Decayed teeth.</li>
						<li>Cosmetic Benefits.</li>
						<li>Large or Fractured fillings.</li>
						<li>Root canal.</li>
					</ul>
					<br>
					<h2>Restore Your Smile Today</h2>
					<p>Crowns also replace severe cases of tooth decay that have resulted in a large amount of tooth loss. Crowns allow dentists to restore form and function to your tooth without needing to perform an extraction. It is always best to save as much real tooth/enamel as possible. </p>

					<h2>The Dental Crown Placement Process</h2>
					<p>This process begins with a consult and exam where we develop a plan for you. We take dental impressions to ensure a precise fit for your tooth. We also treat and resolve any decay or infection prior to placement of the crown.</p>
					<p>Once the impressions are ready for your tooth, we place the crown for a proper fit. Once your crown is fitted appropriately, you can again be confident about your dental health and your amazing smile. If you have any questions about <strong><?php echo $bannerHeading ?> in <?php echo $city ?></strong>, please call our office at <?php echo $phone;?>.</p><br>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
		
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
