<?php
	include('../../client/data.php');
	$metaTitle='Web Accessibility - ' . $businessName . ', ' . $city . ' ' . $profession;
	$metaDesc='Web Accessibility - ' . $businessName . ', ' . $city . ' ' . $profession;
	$bannerHeading='Web Accessibility';
	include('../../inc/header.php');
	include('../../inc/interior.php');
?>


<div class="content">
  <article class="article" style="padding:0 60px 0 60px;">     
    <div class="article-body">
        <!--  START ACCESSIBILITY -->
        <h1>Web Accessibility</h1>
        <p><?php echo $businessName ?> is committed to continuously improving access to our services by individuals with disabilities. If you are unable to use any aspect of this website because of a disability, please <a href="<?php echo $baseurl;?>contact">contact us</a> and we will provide you with prompt assistance.</p>
        
        <p><?php echo $businessName ?> wants to enhance the accessibility of the data on our website. Here are some methods to help improve your browsing experience.</p>
        
        <p>If you have trouble seeing any of our web pages, the <a href="https://www.ssa.gov/accessibility/" target="_blank" rel="nofollow">US Social Security Administration</a> offers these tips:</p>
        <ul>
            <li><a href="https://www.ssa.gov/accessibility/textsize.html" target="_blank" rel="nofollow">Increase text size</a></li>
            <li><a href="https://www.ssa.gov/accessibility/keyboard_nav.html" target="_blank" rel="nofollow">Use the keyboard to navigate screens</a></li>
            <li><a href="https://www.ssa.gov/accessibility/browseAloud.html" target="_blank" rel="nofollow">Use your computer to read web pages out loud</a></li>
            <li><a href="https://www.ssa.gov/accessibility/magnifyscreen.html" target="_blank" rel="nofollow">Magnify your screen</a></li>
            <li><a href="https://www.ssa.gov/accessibility/changecolors.html" target="_blank" rel="nofollow">Change background and text colors</a></li>
            <li><a href="https://www.ssa.gov/accessibility/mousepointer.html" target="_blank" rel="nofollow">Make your mouse pointer more visible (Windows only)</a></li>
        </ul>
        
        <p>If you are looking for mouse and keyboard alternatives, there are speech recognition softwares, websites and app that may help you navigate web pages and online services. This software allows the user to move focus around a web page or application screen through voice controls. If you are deaf or hard of hearing, there are several accessibility features available to you.</p>
        
        <p>We make every attempt for all types of visitors to have a pleasant onlien experience. For more info on Web Accessibility, please visit <a href="https://www.ssa.gov/accessibility/" target="_blank" rel="nofollow">US Social Security Administration</a>.</p>
        
        <h4>Volume Controls</h4>
        <p>Your computer, tablet, or mobile device has volume control features. Each video and audio service has its own additional volume controls. Try adjusting both your device's volume controls and your media players' volume controls to optimize your listening experience.</p>
        
        <h4>Closed Captioning</h4>
        <p>Closed captioning provides a transcript for the audio track of a video presentation that is synchronized with the video and audio tracks. Captions are generally visually displayed over the video, which benefits people who are deaf and hard of hearing, and anyone who cannot hear the audio due to noisy environments. Most of our video content includes captions. Learn how to turn captioning on and off in YouTube.</p>
        
        <p>If the recommendations above do not meet your needs, we invite you to <a href="<?php echo $baseurl;?>contact">contact us</a> for assistance.</p>
        
        <h4>Our Contact Information:</h4>
        <p><?php echo $businessName ?><br>
        <?php echo $address ?><br />
        <?php echo $phone ?> <br />
        </p>
        <!--  END ACCESSIBILITY --> 

    </div>
  </article>
</div>


<?php include('../../inc/footer.php'); ?>