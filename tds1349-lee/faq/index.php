<?php 
include( '../client/data.php' );

$metaTitle = 'FAQs - Dental FAQ - ' . $businessName;
$metaDesc = 'FAQs - Dental FAQ - ' . $profession . ', Learn more from ' . $businessName . ', or call today.';

$bannerHeading = 'FAQs';
include( '../inc/new-patients.php' );
include( '../inc/header.php' );
include( '../inc/interior.php' );
?>

<div class="wrapper">
	<div class="shell">
	<section class="content dental-savings-plan-iterior-page">
			<article class="article">
				<div class="article-body">
					<h1>FAQs</h1>

		
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->	
					
		<button class="accordion">Question</button>
					
		<div class="panel">
		  <p>
			  
			  
			  
			  Answer here 
			
			
			
			</p>
		</div>
					
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
		
		<button class="accordion">Question</button>
					
		<div class="panel">
		  <p> 
			  
			  
			  Answer here 
			
			
			
			</p>
		</div>
					
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->	
					
		<button class="accordion">Question</button>
					
		<div class="panel">
		  <p>
			  
			  
			  
			  Answer here 
			
			
			
			</p>
		</div>
					
<!-- ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
					
        <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
					
				</div>
			</article>
		</section>
	</div><!-- /.shell -->
</div> <!-- .wrapper -->

<?php include( '../inc/footer.php' ); ?>