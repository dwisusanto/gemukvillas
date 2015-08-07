<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
drupal_set_title('Offers & Package');
?>


<div class="slides_container3">
  <div class="slide2">
    <a href="#"><img src="<?php print $images_path; ?>banner_6.jpg" style="margin: 10px auto;"></a>
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
		padding-right:48px;		
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
</style>

<div class="villa-nightmorning">
    <a href="<?php print url("gallery"); ?>" class="gal-active">MORNING</a>
  	<a href="<?php print url("gallery-1"); ?>">NIGHT</a>
</div>

<div class="container-bottom3">
  <div class="villa1">
    <div class="villa1-1"><a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1.jpg"></a> &nbsp; <a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-2.jpg"></a></div>
    <div class="villa1-2">
		<a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-4.jpg"></a>
		<div style="height: 5px;"> </div>
		<a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-5.jpg"></a>
	</div>
    <div class="villa1-3"><a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-6.jpg"></a> </div>
  </div>
  
  <div class="villa2">
    <div class="villa2-1">
		<a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-3.jpg"></a> 
		<div style="height: 5px;"> </div>
		<a href="<?php print url("gallery-1"); ?>"><img src="<?php print $images_path; ?>gallery1-7.jpg"></a>
    </div>
  </div>
  
</div>
<?php include "footer.tpl.php"; ?>