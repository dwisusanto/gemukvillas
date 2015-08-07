<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
?>

<style>
	.form-item-rooms-start-date
	{
		width:170px !important;
	}
	
	.form-item-rooms
	{
		width:155px !important;
	}
</style>

<div class="slides_container2">
  <div id="slides"><a href="#"><img src="<?php print $images_path; ?>banner_7.jpg"></a></div>
</div>
<div class="container-bottom3">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("rates-reservation");?>"><img src="<?php print $images_path; ?>3-rates.jpg"></a></div>
    <div class="reservation"><a href="<?php print url("reservation-index");?>"><img src="<?php print $images_path; ?>3-reservation.jpg"></a></div>
  </div>
  <div class="reservation-button"><a href="#"><img src="<?php print $images_path; ?>button-reservation-hover.jpg"></a></div>
  <div class="confirmation-button"><a href="<?php print url("confirmationproof");?>"><img src="<?php print $images_path; ?>button-confirmation.jpg"></a></div>
</div>
<div class="clear">&nbsp;</div>
<div class="container-bottom2-0">
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2-0">
    <div class="direction">
      <div class="direction-1"><img src="<?php print $images_path; ?>btn-direction1.jpg"></div>
      <div class="reservation table3">
      <?php if ($messages): ?>
  			    <div id="messages"><div class="section clearfix">
  			      <?php print $messages; ?>
  			    </div></div> <!-- /.section, /#messages -->
  			  <?php endif; ?>
  		<?php $block = module_invoke('rooms_booking_manager', 'block_view', 'rooms_availability_search'); ?>
      <?php //print_r($block['content']); ?>
      <?php $block['content']['#action'] = url('room-reservation'); ?>
			<?php print render($block['content']); ?>
      <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
  <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div   
></div>		
</div>
<?php include "footer.tpl.php"; ?>