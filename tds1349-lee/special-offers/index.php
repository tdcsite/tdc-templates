<?php

	include('../client/data.php');

	$metaTitle = 'Special Offers, ' . $profession . ' in ' . $city . ' - Promotions and Discounts';
	$metaDesc = $businessName. ' is offering discounts and promotions. Looking for a ' . $profession . ' in ' . $city . ' - call us today for current special offers.';

	include('../inc/header.php');
?>


<?php /*?> REMOVE THESE COMMENTS TO ADD COUPON STYLE OFFERS
	<?php include( '../inc/homepage/special-coupons.php' ); ?>
<?php */?>


<?php 
$offers = true;
include( '../inc/footer.php' ); ?>

<!-- UPDATE THE BOTTOM PROMOS and HIGHLIGHTS BOXES FROM THE INCLUDE FILE, promos-highlights -->