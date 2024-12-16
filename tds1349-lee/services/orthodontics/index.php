<?php

include( '../../client/data.php' );

$metaTitle = 'Orthodontics in ' . $city . ', ' . $state . ' - Braces and Aligners in ' . $zip;
$metaDesc = $businessName . ' provides Orthodontics in ' . $city . '. Schedule an appointment with our ' . $city . ' Orthodontics team.';

$bannerHeading = 'Orthodontics';
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
						<img src="<?php echo $baseurl ?>images/dental-services/orthodontics.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>">
					</div>

					<p><strong>Orthodontics</strong> are an excellent way to straighten your teeth. While orthodontic treatments are used to straighten teeth for an enhanced smile, they can also help restore functionality to teeth, jaw, and bite. </p>

					<p>The American Association of Orthodontists (AAO) recommends that all children should have an evaluation with an orthodontist by the age of 7 regardless of how many teeth have erupted.
					</p>

					<p>This is because orthodontists are able to predict any structural changes that may occur as your child gets older. Addressing such structural changes with braces can save your child’s smile and also prevent any additional dental issues down the road. </p>
					
					<h2>We also offer <?php echo $bannerHeading ?> for Adults</h2><br>

					<hr><br><br>
					
						<h3>Types of Orthodontics:</h3><br>
						
						<ul>
						<h4><strong>Traditional Metal Braces</strong></h4>
						<p>These are the most common form of braces. They are highly efficient at correcting complications with a smile.</p>
						
						<br>
						
						<h4><strong>Invisalign&reg; Clear Aligners</strong></h4>
						
						<p>They are clear in color, removable, and can work as effectively as traditional metal braces. They are removable and easy to manage in terms of maintenance, brushing, and flossing. <br><strong>Learn more about <a href="<?php echo $baseurl ?>services/invisalign">Invisalign</a></strong>.</p>
						</ul>
					
						<div class="img">
						<a href="<?php echo $baseurl ?>services/invisalign"><img src="<?php echo $baseurl ?>images/dental-services/invisalign-1.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city ?>"></a>
						</div>
						
				
					<br/>
					<h3>Discuss Your Options Today!</h3>
					<p>Based on your budget and needs, we will be able to guide you in the right direction so that you are one step closer to obtaining the smile of your dreams. If you have any questions regarding <strong><?php echo $bannerHeading ?> in <?php echo $city ?></strong> or if you want to schedule an evaluation or appointment, then please call our office at <?php echo $phone ?>.</p>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
