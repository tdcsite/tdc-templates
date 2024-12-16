<?php

include( '../../client/data.php' );

$metaTitle = 'Root Canal in ' . $city . ', ' . $state . ' - Root Canal Treatment in ' . $zip;
$metaDesc = $businessName . ' provides Root Canal in ' . $city . '. Schedule an appointment with our ' . $city . ' dentist for Root Canal Treatment.';

$bannerHeading = 'Root Canal';
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
						<img src="<?php echo $baseurl ?>images/dental-services/root-canal.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p>A <strong>root canal</strong> is a procedure specifically designed to save you from losing a tooth. Our teeth are comprised of certain parts, one of them being the pulp. A tooth’s pulp is where the nerve, blood vessels, and connective tissue are housed. When this area becomes inflamed or infected, then a root canal procedure must be taken in order to save that tooth.</p>
					
					
					<h3>How Do I Know if I Might Need a Root Canal?</h3>
					<p>When your pulp becomes inflamed or infected, you will begin to feel symptoms that prompt you to take action. </p>
					
					<ul>
						<h4>Toothache<h4>
						<p>These are pretty common, but certain toothaches point to the possibility of an inflamed/infected pulp. If you experience sharp pain in the middle of the night that leads into a generalized headache, then your tooth’s root may be suffering.</p>
						
						<h4>Abscess<h4>
						<p>If you see a bump near the top part of a tooth and/or pus present in the mouth, then there is a good chance a root canal will be required.</p>
							
						<h4>Sensitivity<h4>
						<p>Extreme pain to hot and cold foods is a good indicator.</p>
							
						<h4>Discoloration<h4>
						<p>Dark discoloration on the tooth points to a deteriorated pulp. This is a severe sign.</p>
					</ul><br>
							
					
					<h3 class="article-title">Root Canal - Procedure</h3>
					<p>Root canals are often a two-appointment procedure, with the first appointment taking up to an hour to perform. The second appointment is for a dental crown since most of your tooth with be lost during the process and must be capped with a crown to restore its appearance. </p>
							
					<h3 class="article-title">Don't Wait</h3>
					<p>If you notice a recurring pain that doesn’t seem to halt, then contact our dentist immediately. It is always better to save a tooth than to have it extracted and replaced.</p>
							
					<p>Feel free to call our office at <?php echo $phone ?> to learn more about <strong><?php echo $bannerHeading ?>s in <?php echo $city ?></strong> or any other services we provide. We will be happy to assist you with any questions or concerns you may have.</p><br>

				</div>
			</article>
		</div>
<!-- END CONTENT -->

		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
