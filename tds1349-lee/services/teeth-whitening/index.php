<?php

include( '../../client/data.php' );

$metaTitle = 'Teeth Whitening in ' . $city . ', ' . $state . ' - Teeth Whitening Near Me ' . $zip;
$metaDesc = $businessName . ' provides Teeth Whitening in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for a professional Teeth Whitening.';

$bannerHeading = 'Teeth Whitening';
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
						<img src="<?php echo $baseurl ?>images/dental-services/teeth-whitening.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p><strong>Teeth whitening </strong>is a very popular cosmetic dentistry procedure that aims at improving your teeth’s appearance by restoring enamel to its natural color- white.</p>
					
					<h3 class="article-title">Professional In-Office Teeth Whitening</h3>
					<p>Teeth whitening performed in our office is far more powerful and effective than the treatments found at your local drug or grocery store. <br/>
						
					<div class="contents-quote">Teeth whitening treatments performed in our dentist's office will whiten your teeth by at least a few shades. </div>
						
						
					<p>The severity of the discoloration on your teeth will determine how many appointments you will need until your they are completely whitened.
					</p>

					<h3 class="article-title">Common Causes of Discoloration</h3>
					<p>Here are some of the common resons for discoloration:</p>
						<ul>
							<li>Coffee</li>
							<li>Soda</li>
							<li>Wine</li>
							<li>Bad oral hygiene</li>
							<li>Dark berries</li>
							<li>Tea</li>
							<li>Tobacco <em>(or smoking in general)</em>
							</li>
						</ul>
					<p>Teeth whitening attempts to correct stains and damage that have accumulated over time from consumption of specific foods and drinks. <br/>
					<br/>If you have any questions regarding <strong><?php echo $bannerHeading ?> in <?php echo $city ?></strong>, then please call our office at <?php echo $phone ?>.
					</p><br>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
