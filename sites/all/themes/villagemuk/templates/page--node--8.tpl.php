<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
?>


<div class="slides_container4" style="padding-bottom: 5px;">
	<div id="slides">
		<a href="#"><img src="<?php print $images_path; ?>rates-reservation.jpg"></a>
	</div>
  
</div>

<div class="container-bottom3">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("rates-reservation");?>"><img src="<?php print $images_path; ?>3-rates.jpg"></a></div>
    <div class="reservation" style="height: 32px;"><a href="#"><img src="<?php print $images_path; ?>3-reservation.jpg"></a></div>
  </div>
  <div class="reservation-button"><a href="<?php print url("reservation"); ?>"><img src="<?php print $images_path; ?>button-reservation.jpg"></a></div>
  <div class="confirmation-button"><a href="<?php print url("confirmationproof"); ?>"><img src="<?php print $images_path; ?>button-confirmation.jpg"></a></div>   
</div>
<?php include "footer.tpl.php"; ?>