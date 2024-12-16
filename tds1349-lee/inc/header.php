<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>

	<title><?php echo $metaTitle ?></title>
	<meta name="description" content="<?php echo $metaDesc; ?>">

	<link rel="stylesheet" href="<?php echo $baseurl ?>css/style.css" type="text/css" media="all"/>
 	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- analytics -->
	
</head>
<body>

	<div class="wrapper-inner">
		
<?php /*?> MOBILE NAVIGATION <?php */?>		

		<nav class="nav-mobile">
			<ul>
				<li><a href="#" class="btn-menu"><small><i class="fas fa-bars"></i></small><span>Menu</span></a></li>
				<li><a href="<?php echo $baseurl;?>reviews" class="clone-link"><small><i class="fas fa-star"></i></small><span>Reviews</span></a></li>
				<li><a href="tel:+1-<?php echo $tel?>" class="clone-link"><small><i class="fas fa-phone"></i></small><span>Call Now</span></a></li>
				<li><a href="<?php echo $baseurl;?>appointment"><small><i class="far fa-calendar-alt"></i></small><span>Appointment</span></a></li>
			</ul>
		</nav>

		
<?php /*?> HEADER MAIN <?php */?>	
		
		<header class="header">
			<div class="shell">
				<div class="header-left-content">
					<h4>Call Today</h4>
					<p class="header-phone"><?php echo $phone;?></p>
					<a href="<?php echo $baseurl;?>services/emergency-dentistry" class="headerUpdate">&#128314; Dental Emergency?</a>
				</div>
				
				<?php /*?> UPDATE THE LOGO WITH IMAGE PATH BELOW, FOR LOGO SIZING UPDATE CSS LINE 700 <?php */?>		
				
				<a class="logo" href="<?php echo $baseurl;?>"><img src="<?php echo $baseurl;?>client/images/drleedental-logo.png" alt="<?php echo $profession ?> in <?php echo $city ?>"></a>

				<div class="header-right-content">

					<div class="header-review-stars">
						<a href="<?php echo $baseurl?>reviews">
							<ul>
								<li class="headerLink-text">&#11088; &#11088; &#11088; &#11088; &#11088; &nbsp; See Our Reviews  </li> 	 
							</ul>
						</a>
					</div>

					<a href="<?php echo $baseurl;?>appointment" class="btn-header"><center>Request An Appointment</center></a>
				</div>
			</div>
		</header>
		

<?php /*?> NAVIGATION MAIN <?php */?>	
		
		<nav class="nav">
			<div class="shell">
				<ul>
					<li><a href="<?php echo $baseurl;?>">Home</a>
					</li>
					<li class="has-dd"><a href="#">About</a>
						<ul class="dd-2">
							<li><a href="<?php echo $baseurl?>about">Our Practice</a></li>
							<li><a href="<?php echo $baseurl ?>dr-jin-kyu-lee"><?php echo $name?></a></li>
							<!-- <li><a href="<?php echo $baseurl?>meet-our-team">Meet Our Team</a></li> -->
							<li><a href="<?php echo $baseurl?>dental-savings-plan">Dental Savings Plan</a></li>
							<!--<li><a href="<?php echo $baseurl?>faq">FAQs</a></li>-->
						</ul>
					</li>
					<li class="has-dd"> <a href="#">Services</a>
						<ul>
							<?php include ('services-list-short.php'); ?>
						</ul>
					</li>
					<li> <a href="<?php echo $baseurl;?>technology">Technology</a></li>
					<li><a href="<?php echo $baseurl;?>before-after-gallery">Before / Afters</a></li>
					<li><a href="<?php echo $baseurl;?>special-offers">Special Offers</a></li>
					<li><a href="<?php echo $baseurl;?>reviews">Reviews</a></li>
					<li><a href="<?php echo $baseurl;?>new-patients">New Patients</a></li>
					<li><a href="<?php echo $baseurl;?>contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		
