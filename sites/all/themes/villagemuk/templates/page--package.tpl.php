<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
drupal_set_title('Offers & Package');
?>

<div id="example2">
	<div id="slides">
		<div class="slides_container2">
			<div class="slide2">
				<a href="#"><img src="<?php print $images_path; ?>banner_9.jpg"></a>
			</div>
		</div>
	</div>
</div>
<div class="container-bottom2-1">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("offers");?>"><img src="<?php print $images_path; ?>5-offers.jpg"></a></div>
    <div class="reservation"><a href="#"><img src="<?php print $images_path; ?>5-package.jpg"></a></div>
  </div>
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2">
    <div class="package">
      <div class="package1">
        <div class="package1-1"><a href="<?php print url("package-1"); ?>"><img src="<?php print $images_path; ?>package1.jpg"></a></div>
        <div class="package1-2">&nbsp; <a href="<?php print url("package-1"); ?>"><img src="<?php print $images_path; ?>package2.jpg"></a></div>
        <div class="package1-1"><a href="<?php print url("package-1"); ?>"><img src="<?php print $images_path; ?>package3.jpg"></a></div>
        <div class="package1-2">&nbsp; <a href="<?php print url("package-1"); ?>"><img src="<?php print $images_path; ?>package4.jpg"></a></div>
      </div>
    </div>
    <div class="line"><img src="<?php print $images_path; ?>line.jpg"></div>
    <div class="reservation-link">
      <div class="reservation word"><img src="<?php print $images_path; ?>reservation-link.jpg"></div>
        <div class="reservation table">
          <?php if ($messages): ?>
            <div id="messages"><div class="section clearfix">
              <?php print $messages; ?>
            </div></div> <!-- /.section, /#messages -->
          <?php endif; ?>
          <?php $block = module_invoke('rooms_booking_manager', 'block_view', 'rooms_availability_search'); ?>
          <?php $block['content']['#action'] = url('room-reservation'); ?>
          <?php print render($block['content']); ?>              
        </div>
      </div>
    </div>
    <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div> 
	</div>
<?php include "footer.tpl.php"; ?>