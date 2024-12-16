<?php

//  DOCSITES PREMIER DESIGN V5 TEMPLATE Feb2024AS

$baseurl = 'https://www.docsitedemos.com/devs2024/tds1349-lee/';

//  tds1349

$name ='Dr. Jin Kyu Lee DDS';
$nameShort = 'Dr. Jin Kyu Lee';

// if there are any additional doctors
$name2='Second Doctor, DDS';
$nameShort2 = 'Dr. Second Doctor';
$name3='Dr. Name Here';
$nameShort3 = 'Dr. Name 3';

$businessName='Dr Lee Dental';
$office=$businessName;

$tel = '323-585-7777';
$phone='<a href="tel:+1-' . $tel . '" class="phone">' . $tel . '</a>';

$bannerHeading = $bannerHeading;
$street='7221 Pacific Blvd';
$city='Huntington Park';
$state='CA';
$zip='90255';
$address= $street . '<br />' . $city . ', ' . $state . ' ' . $zip;

$hours='
Monday: 9am - 6pm<br>
Tuesday: 9am - 6pm<br>
Wednesday: 9am - 6pm<br>
Thursday: 9am - 6pm<br>
Friday: Closed<br>
Saturday (Every Other): 9am - 2pm
';

// for text us button if function is being used
$sms='';

// Social Links in Footer
$facebookLink = '';
$instagramLink = '';
$yelpLink = 'https://www.yelp.com/biz/lee-dental-huntington-park';
$googleLink = 'https://maps.app.goo.gl/xyoC3dK2iZGKWofM9';

// Place ID for google review tool - get from https://developers.google.com/places/place-id
$GooglePlaceID = 'ChIJ7VkQMwzJwoARNrQSEiVJwVQ';

// Review Us Buttons on Sidebar of Reviews Page
$googleReviewUs = 'http://search.google.com/local/writereview?placeid=' . $GooglePlaceID; //DO NOT EDIT THIS LINE
$yelpReviewUs = 'https://www.yelp.com/writeareview/biz/8_vxHx0oIoUUMmdyqBd92g';
$facebookReviewUs = '';

// Map Embed
$src = "https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=".str_replace(" ", "+", $street).','.str_replace(" ", "+", $city).',+'.$state.'+'.$zip.'&t=m&z=13&output=embed';

// After you embed the map code, make sure you update the width to 100 percent
$map='<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13234.957952751445!2d-118.2255834!3d33.9735348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c90c331059ed%3A0x54c149251212b436!2sDr.%20Lee%20Dental!5e0!3m2!1sen!2sus!4v1730768426111!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';

// Form
$form='<script type="text/javascript" src="https://form.jotform.com/jsform/243087184287162"></script>';

// For Title and Meta Tags SEO
$profession = 'Dentist';
$titleTagWords = 'Family and Cosmetic Dentistry';
$metaTagWords = 'general, family and cosmetic dentistry';
$SEOkeywords = 'teeth whitening, cosmetic dentistry, dental fillings, and more.';

// Default Meta Tags - DO NOT EDIT 
$metaTitle = $profession . ' in ' . $city . ' ' . $state . ', ' . $titleTagWords . ' ' . $zip;
$metaDesc = $businessName . ' provides ' . $metaTagWords . ' in ' . $city . '. Call us at ' . $tel . ' to schedule your appointment.';
$keywords = $profession . ', ' . $city . ' ' . $titleTagWords . ', ' . $metaTagWords . ' ' . $zip;

// for google review API - do not edit this
$GoogleAPIkey = 'AIzaSyDORWV1k50FHrmdLROeaZV87nU53uJpC_I';

// $specialty = 'The Dentist You’ve Always Wished For';

//  DO NOT EDIT - VERSION NOTES - removed stars li, updated all meta, removed office gallery, slowed it down and added to the about page, updated header stars, created new default SERVICE page to copy, stars in review sidebar, updated root canal page, wisdom tooth page, updated data sheet, fixed homepage 4 columns, removed main banner overlay, updated covid link with Emergency, updated and removed fake doctor bios, servcie content updates, removed default links for social and reviews, changed camera to scanner in tech page, updated conebeam photo, removed default special offers, fixed social link in footer, main servcie page txt update, fixed invisialign page missing city 1-2023, removed dates from reviews, removed placeholder data from Google Place ID and Form 2024-01-11, updated and removed appointment buttons from tech, added NEW home page INC file for 1 doctor section - 2 new includes doctors-section-single and doctors-section-multiple, updated $googleReviewUs to use $GooglePlaceID automatically 2024-05-30, reduced B&As down to one and changed description to "Teeth Whitening" 2024-05-31, added faq page 2024-08-13, Yelp links hidden in footer and reviews sidebar 2024-10-03

?>