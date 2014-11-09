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
<div class="container-bottom2">
  <div class="rates-reservation">
    <div class="rates"><a href="#"><img src="<?php print $images_path; ?>4-offers.jpg"></a></div>
    <div class="reservation">
		<?php
			/*
			<a href="<?php print url('package')?>"><img src="<?php print $images_path; ?>4-package.jpg"></a>
			*/
		?>
		<a href="#"><img src="<?php print $images_path; ?>4-package.jpg"></a></div>
  </div>
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2">
		<div class="offers">
      <div class="offers-tittle"><b>Special Offers</b></div>
<?php
$view = views_get_view('offers_list');
$view->set_display('default');
$view->pre_execute();
$view->execute('default');
foreach ($view->result as $data) {
?>
        <div class="offers1">
          <div class="offers-picture"><img src="<?php print $images_path; ?>offer-2.jpg"></div>
          <div class="offers-text">
              <b> <?php print $data->node_title; ?> </b> 
              
          </div>
          <div class="offers-button"> <a href="<?php print url("room-reservation")?>"><img src="<?php print $images_path; ?>button_bookonline.jpg"></a>
              <br> &nbsp; <i>Call 021-1234567</i>
          </div>
          <br></br>
          <div class="button-offers"><a href="<?php print url("node/" . $data->nid)?>"><img src="<?php print $images_path; ?>button-offers.png"> &nbsp; more details</a></div>
          <div id="line-offers"></div>   
        </div>
<?php } ?>
</div>
<div class="line"><img src="<?php print $images_path; ?>line.jpg"></div>
    <div class="reservation-link">
      <div class="reservation word"><img src="<?php print $images_path; ?>reservation-link.jpg"></div>
      <div class="reservation table">
        <table width="217" height="120">
          <tr>
            <td width="200">
							<?php if ($messages): ?>
								<div id="messages"><div class="section clearfix">
									<?php print $messages; ?>
								</div></div> <!-- /.section, /#messages -->
							<?php endif; ?>
							<?php $block = module_invoke('rooms_booking_manager', 'block_view', 'rooms_availability_search'); ?>
              <?php $block['content']['#action'] = url('room-reservation'); ?>
							<?php print render($block['content']); ?>
            </td>
					</tr>
				</table>
			</div>
    </div>
  </div>
  
    <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div> 
</div>
<?php include "footer.tpl.php"; ?>