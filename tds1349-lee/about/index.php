<?php 
include( '../client/data.php' );

$metaTitle = $profession . ' in ' . $city . ' - ' . $state . ' ' . $zip . ', ' . $businessName;
$metaDesc = 'Are you in ' . $city . ' and looking for the best ' . $profession . ' near me? At ' . $businessName . ' we offer ' . $titleTagWords . ' in ' . $zip;

$bannerHeading = 'Our Practice';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
		
		<section class="content">
			<article class="article">
				<div class="article-body">
					<h1><?php echo $profession;?> in <?php echo $city;?></h1>

					<div class="img"><img src="<?php echo $baseurl ?>images/dental-services/about.jpg" alt="<?php echo $profession;?> in <?php echo $city;?>"></div>

					<p>At <?php echo $businessName;?>, we understand the importance of having a dental practice that provides you with exceptional care. Our staff is committed to serving each and every patient with attentive care and quality dental work. <br></p>	
					
					<div class="contents-quote">Our practice provides general dentistry services including the prevention, diagnosis, and treatment of a wide variety of conditions and diseases that affect your teeth, gums, and oral health.</div>
										
					<h3 class="article-title">Our Practice's Mission:</h3>
					<p> To fulfill our mission of providing quality dental care to you and your family, we are committed to: </p>
					
					<ul>
						<li>Staying up to date with latest techniques and equipment.</li>
						<li>Ensuring a comfortable, relaxing environment.</li>
						<li>Exceeding your expectations with our professionalism.</li>
					</ul>
					
					<br>
					<h3>We Are Committed to Your Oral Health</h3>
					<p>At <?php echo $businessName;?>, we are committed to ensuring your oral health is in excellent condition. We make this possible by attending to all dental issues, existing and potential, during your visit. <strong>Call today <?php echo $phone;?></strong>.<br><br>
					</p>
					
				</div>
			</article>
			
			
<?php /*?> OFFICE TOUR is now in about page - remove the include below to remove office tour <?php */?>	
           <?php include ('../inc/office-tour.php'); ?>
			
		</section>		

		<?php include ('../inc/sidebar.php'); ?>

	</div><!-- /.shell -->
</div> <!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>


<?php /*?> office tour slideshow scripts <?php */?>

<link rel="stylesheet" href="<?php echo $baseurl ?>scripts-functions/z-slideshow-assets/css/owl.carousel.css"/>
<link rel="stylesheet" href="<?php echo $baseurl ?>scripts-functions/z-slideshow-assets/before-after/css/owl.theme.default.css"/>
<link rel="stylesheet" href="<?php echo $baseurl ?>scripts-functions/z-slideshow-assets/css/custom.css"/>
<script src="<?php echo $baseurl ?>scripts-functions/z-slideshow-assets/js/owl.carousel.js"></script>
<script src="<?php echo $baseurl ?>scripts-functions/z-slideshow-assets/js/owl.carousel2.thumbs.min.js"></script>
<script type="text/javascript">
	var owl = $( '.owl-carousel' );
	owl.owlCarousel( {
		items: 1,
		loop: true,
		mouseDrag: false,
		autoplay: true,
		autoplayTimeout: 3000,
		slideSpeed: 400,
		paginationSpeed: 800,
		nav: true,
		dots: true,
		touchDrag: true,
		thumbs: false,
		thumbImage: true,
		thumbContainerClass: 'owl-thumbs',
		thumbItemClass: 'owl-thumb-item'
	} );
</script>
