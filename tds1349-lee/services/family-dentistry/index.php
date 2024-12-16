<?php

include( '../../client/data.php' );

$metaTitle = 'Family Dentist in ' . $city . ', ' . $state . ' - Family Dentistry ' . $zip;
$metaDesc = $businessName . ' provides family dentistry in ' . $city . '. Schedule an appointment with our ' . $city . ' family dentist for adults and children.';

$bannerHeading = 'Family Dentistry';
include( '../../inc/header.php' );
include( '../../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">

<!-- START CONTENT -->
		<div class="content">
			<article class="article">
				<div class="article-body">
					<h1>Family Dentist in <?php echo $city;?></h1>

					<div class="img">
						<img src="<?php echo $baseurl ?>images/dental-services/family-dentistry.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $city;?>">
					</div>

					<p>Welcome to <?php echo $businessName;?>, where we offer dentistry services for the entire family.

						<p>Our dental office has experience providing care for family members of differing ages, ensuring our one location meets all of your family’s needs. <br>
							<br><strong>Our dental office will provide you the following benefits: </strong></p>
						<ul>
							<li>Modern dental equipment to ensure efficiency and comfort.</li>
							
							<li>Advanced training to offer the most comfortable and thorough techniques.</li>
							
							<li>A relaxing waiting room.</li>
							
							<li>A warm, friendly staff that will always greet you with a smile.</li>
						</ul>
					
						<br>
						<a href="<?php echo $baseurl?>services" class="btn-dental">View All Services</a><br><br>
						<br>

						<p>Our patient’s satisfaction is our top priority. We strive to exceed your expectations through our professionalism and expertise. We gladly provide oral hygiene demonstrations for both the young ones and adults to ensure your family is familiar with proper brushing and flossing techniques.</p>
				

						<h3>We Work Well With Children</h3>
					
						<div class="img">
							<img src="<?php echo $baseurl ?>images/dental-services/kids5.jpg" alt="<?php echo $bannerHeading ?> in <?php echo $zip;?>">
						</div>
					
						<p>At <?php echo $businessName;?>, we are experienced in working with children. We make it a priority to create an environment where they feel relaxed and happy throughout their appointment. </p>

						<h2 class="article-title">We're Here to Help You</h2>
						<p>If you have any questions regarding the <strong>family dentistry in <?php echo $city;?></strong> services we provide, then please call our office at <?php echo $phone;?> and we will be happy to assist you.</p>

				</div>
			</article>
		</div>
<!-- END CONTENT -->


		<?php include('../../inc/sidebar.php');?>
	</div>
</div>

<?php include('../../inc/footer.php'); ?>
