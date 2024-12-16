<?php

include( '../client/data.php' );

$metaTitle = $name . ' - Top Rated ' . $profession . ' in ' . $city . ', ' . $state .  ' '. $zip;
$metaDesc = $name . ' is considered one of the best ' . $profession . 's in ' . $city . ', ' . $state . ', offering ' . $metaTagWords . ' in ' . $zip;

$bannerHeading = $name;
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		<section class="content">
			<article class="article">
				<div class="article-body">
					<h1>Meet <?php echo $name; ?></h1>
					
					<div class="img"><img src="<?php echo $baseurl ?>images/doctor.jpg" alt="Meet <?php echo $name; ?> in <?php echo $city; ?>"></div>
					
					<h2>Coming Soon...</h2>
				 

				</div>
			</article>
		</section>
		
		<?php include ('../inc/sidebar.php'); ?>
		
	</div><!-- /.shell -->
</div><!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>
