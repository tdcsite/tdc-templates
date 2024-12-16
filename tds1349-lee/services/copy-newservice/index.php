<?php

include( '../../client/data.php' );


$pageService = 'Title of Service'; // UPDATE ONLY THIS LINE WITH THE NAME OF THE SERVICE 

	
$metaTitle = $pageService . ' in ' . $city . ', ' . $state . ' - ' . $pageService .  ' '. $zip;
$metaDesc = $businessName . ' provides ' . $pageService . ' in ' . $city . '. Ask our ' . $profession . ' for more info on ' . $pageService;
$bannerHeading = $pageService;
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<div class="content">
			<article class="article">
				<div class="article-body">
					
<!-- ADD CONTENT HERE ______________________________________________ -->
					
					
					<h1><?php echo $pageService ?> in <?php echo $city?></h1>


					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/wisdom-teeth-removal.jpg" alt="<?php echo $pageService ?> in <?php echo $city ?>">
					</div>
					
					<p>
					
					<br><br><br><br><br><br><br><br><br><br>
				
						
					</p>

					<h3><?php echo $pageService ?> in <?php echo $city?></h3>
					
					<p>
					
					
					
					<br><br><br><br><br><br><br><br>
						
					
						
					</p>

					<p>If you’re in <?php echo $city?> or surrounding areas, please call our office at <?php echo $phone ?> to get more information about <strong> <?php echo $pageService ?> in <?php echo $city ?></strong>.</p>

					
					
<!-- END CONTENT HERE ______________________________________________ -->		
					
					
					
				</div>
			</article>
		</div>

		
		<?php  include('../../inc/sidebar.php'); ?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
