<?php

include( 'client/data.php' );

$metaTitle = $profession . ' in ' . $city . ' ' . $state . ', ' . $titleTagWords . ' ' . $zip;
$metaDesc = $businessName . ' provides ' . $metaTagWords . ' in ' . $city . '. Call us at ' . $tel . ' to schedule your appointment.';

include( 'inc/header.php' );

include( 'inc/homepage/main-banner.php' );
include( 'inc/homepage/3-cta-boxes.php' );
include( 'inc/homepage/doctors-section-single.php' );
// include( 'inc/homepage/doctors-section-multiple.php' );
// include( 'inc/homepage/4-differences.php' );
// include( 'inc/homepage/service-boxes.php' );
include( 'inc/homepage/reviews.php' );
// include( 'inc/homepage/videos-3-columns.php' );
include( 'inc/homepage/office-tour.php' );
include( 'inc/homepage/highlight-section.php' );
// include( 'inc/homepage/2-column-section.php' );
// include( 'inc/homepage/technology.php' );
// include( 'inc/homepage/insurance-payments.php' );
include( 'inc/homepage/dental-plans.php' );
include( 'inc/homepage/special-coupons.php' );

include( 'inc/footer.php' );

?>

<?php /*?> google reviews scripts <?php */?>

<script src="<?php echo $baseurl ?>scripts-functions/jquery-google-reviews.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=<?php echo $GoogleAPIkey ?>"></script>
<script>
	jQuery( document ).ready( function ( $ ) {
		if ( $( "#google-reviews-home" ).length == 0 ) {
			return
		}
		$( "#google-reviews-home" ).googlePlaces( {
			placeId: '<?php echo $GooglePlaceID ?>',
			max_rows: 4,
			min_rating: 5,
			text_break_length: "600",
		} );
	} );
</script>