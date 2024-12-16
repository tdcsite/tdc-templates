<?php
include( '../client/data.php' );

$metaTitle = $profession . ' Before After Gallery, ' . $titleTagWords . ' in ' . $zip;
$metaDesc = $name . ' of ' . $businessName . ' in ' . $city . ' specializes in ' . $SEOkeywords;

$bannerHeading = 'Before After Gallery';
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell" style="margin-top: -40px;">
		<section class="section section-features">
			<article class="article">
				<div class="article-body">
					<h1>Before &amp; After Smile Gallery</h1>

					<ul class="feature-gallery">
						<li class="gallery-item">
							<div class="feature-inner">
								<div class="gallery-img"> <span class="before">Before</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample.jpg" alt="Before Afters"> </div>
								<div class="gallery-img"> <span class="before">After</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample2.jpg" alt="Before Afters"> </div>
								<div class="gallery-item-desc">
									<h5>Teeth Whitening</h5>
									
									<!-- tooltip	
									<div class="tooltip">Read About This Restoration
										<p class="tooltiptext">This patient had ….</p>
									</div>
									tooltip -->
									
								</div>
							</div>
						</li>


						<!--<li class="gallery-item">
							<div class="feature-inner">
								<div class="gallery-img"> <span class="before">Before</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample.jpg" alt="Before Afters"> </div>
								<div class="gallery-img"> <span class="before">After</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample2.jpg" alt="Before Afters"> </div>
								<div class="gallery-item-desc">
									<h5>Description Goes Here</h5>
								</div>
							</div>
						</li>


						<li class="gallery-item">
							<div class="feature-inner">
								<div class="gallery-img"> <span class="before">Before</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample.jpg" alt="Before Afters"> </div>
								<div class="gallery-img"> <span class="before">After</span> <img src="<?php echo $baseurl ?>client/images/gallery/before-after-sample2.jpg" alt="Before Afters"> </div>
								<div class="gallery-item-desc">
									<h5>Description Goes Here</h5>
								</div>
							</div>
						</li>-->

					</ul>
				</div>
			</article>
		</section>

	</div>
	<!-- /.shell -->
</div> <!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>