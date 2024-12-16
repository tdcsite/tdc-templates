<?php

include( '../client/data.php' );

$metaTitle = 'Reviews for ' . $name . ' ' . $businessName . ' Best Reviews';
$metaDesc = $name . ' is considered one of the best ' . $profession . '. ' . $businessName . ' in ' . $city . ' is one of the top reviewed and rated dentist.';

$bannerHeading = 'Our Reviews ';
include( '../inc/header.php' );
include( '../inc/interior.php' );

?>
<div class="wrapper">
	<div class="shell">

		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1><?php echo $businessName;?> Reviews </h1>
					
					<br>
					 
					
					<div id="google-reviews"></div>
					
					<br><br>
					
					
            <!-- <img src="<?php echo $baseurl ?>images/google-stars.png" alt="Google review" /><br>
					
            <h4>I had a great experience here. &#11088; &#11088; &#11088; &#11088; &#11088;</h4>
            <p>The doctor is caring and the staff is very friendly. <br>Thank you for everything<br> </p> -->


            </br>
            </br>

				</div>
			</article>
		</div>

		<?php include('../inc/sidebar-reviews-page.php')?>
		
		
	</div>
</div>

<?php include('../inc/footer.php'); ?>


 <!--goog reviews for reviews page-->
<script src="<?php echo $baseurl ?>scripts-functions/jquery-google-reviews.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $GoogleAPIkey ?>">
</script>

<script>
	jQuery( document ).ready( function ( $ ) {
		if ( $( "#google-reviews" ).length == 0 ) {
			return
		}
		$( "#google-reviews" ).googlePlaces( {
			placeId: '<?php echo $GooglePlaceID ?>',

		} );
	} );
</script>