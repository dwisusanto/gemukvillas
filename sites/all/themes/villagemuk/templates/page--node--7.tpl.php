<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
?>

<div id="example2" style="height: 205px !important;">
	<div id="slides">
		<div class="slides_container2">
			<div class="slide2">
				<a href="#"><img src="<?php print $images_path; ?>banner_2.jpg"></a>
			</div>
		</div>
	</div>
</div>

<div class="container-bottom2">
	<div class="rates-reservation">
		<div class="rates"><a href="#"><img src="<?php print $images_path; ?>2-rates.jpg"></a></div>
		<div class="reservation"><a href="<?php print url('reservation-index'); ?>"><img src="<?php print $images_path; ?>2-reservation.jpg"></a></div>
	</div>
	<div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
	<div class="content-text2">
		<?php print render($page['content']); ?>
	</div>
	<div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div>		
</div>
<?php include "footer.tpl.php"; ?>