<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
drupal_set_title('Offers & Package');
?>

<div id="example2" style="height: 205px !important;">
	<div id="slides">
		<div class="slides_container2">
			<div class="slide2">
				<a href="#"><img src="<?php print $images_path; ?>banner_9.jpg"></a>
			</div>
		</div>
	</div>
</div>
<div class="container-bottom2" style="min-height: 200px">
  <div><h1 style="text-align: center; margin-top: 20px">Coming soon</h1></div>
</div>
<?php include "footer.tpl.php"; ?>