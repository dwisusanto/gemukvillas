<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
drupal_set_title('Offers & Package');
?>


<div class="slides_container2" style="margin:10px auto 0 auto; height: 220px;">
  <div class="slide2">
    <a href="#"><img src="<?php print $images_path; ?>banner_night.jpg"></a>
  </div>
</div>



<style>
	.villa-nightmorning
	{
		clear: both;
		margin: 10px auto 30px auto;
		display: block;
		width: 200px;
		text-align: center;
		padding-right:40px;		
	}
	
	.villa-nightmorning a
	{		
		font-style:italic;
		color:#c2a077;
		margin:5px;
		font-size: 14px;
	}
	
	.villa-nightmorning a:hover
	{
		color:#8b6751;
		border-bottom: 1px dotted #8b6751;
	}
	
	.villa-nightmorning a.gal-active
	{
		font-weight:bold;
		color:#8b6751;
		border-bottom: 1px dotted #8b6751;
	}
	.villa1
	{
		height:505px;
	}
	.container-bottom4
	{
		min-height:500px;
	}
</style>

<div class="container-bottom4">
  <div class="text-gallery1">
    <blockquote type="cite">
      <div>
        <div>Gemuk villas is situated in a fully secured and guarded complex that gives you total seclusion in the vibrant Seminyak neighborhood. 
			The 2 spacious private villas each consists of 3 bedrooms, an open-plan living space overlooking a private pool 
			and a day bed surrounded by tropical greenery.</div>
      </div>
    </blockquote>
  </div>
	<div class="villa-nightmorning">
		<a href="<?php print url("gallery"); ?>">MORNING</a>
		<a href="<?php print url("gallery-1"); ?>" class="gal-active">NIGHT</a>
	</div>
  <div class="villa1">
    <div class="villa1-1"><img src="<?php print $images_path; ?>gallery2-1.jpg"> &nbsp; <img src="<?php print $images_path; ?>gallery2-2.jpg"></div>
    <div class="villa1-2">
		<img src="<?php print $images_path; ?>gallery2-4.jpg"> 
		<div style="height: 5px;"> </div>
		<img src="<?php print $images_path; ?>gallery2-5.jpg">
	</div>
    <div class="villa1-3"><img src="<?php print $images_path; ?>gallery2-6.jpg"> </div>
  </div>
  <div class="villa2">
    <div class="villa2-1"><img src="<?php print $images_path; ?>gallery2-3.jpg"> 
	<div style="height: 5px;"> </div>
	<img src="<?php print $images_path; ?>gallery2-7.jpg"></div>
  </div>  
</div>

<?php include "footer.tpl.php"; ?>