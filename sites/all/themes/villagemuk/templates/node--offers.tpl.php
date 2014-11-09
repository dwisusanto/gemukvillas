<?php

$images_path = base_path() . drupal_get_path('theme', 'villagemuk') . "/images/";
drupal_set_title('Offers & Package');
?>

<div class="container-bottom2-1">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("offers");?>"><img src="<?php print $images_path; ?>4-offers.jpg"></a></div>
    <div class="reservation"><a href="#"><img src="<?php print $images_path; ?>4-package.jpg"></a></div>
  </div>
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2">
    <div class="package">
      <div class="package-text">
          <h2><i> <?php print $title; ?> </i></h2>
		
			<div style="text-align:center; margin-bottom: 10px;">
				<?php foreach ($content['field_offers_image']['#items'] as $item){ ?>
					<img width="145" height="97" src="<?php print url("sites/default/files"); ?>/<?php print $item['filename']; ?>"> 
				<?php } ?>
			</div>
	  </div>
      <div id="line-package">
      </div>
      <div class="package-price">
			<div class="package-content">
		<?php
      // We hide the comments and links now so that we can render them later.
      hide($content['field_offers_image']);
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
      </div>
      </div>
    </div>
                        
    <div class="line"><img src="<?php print $images_path; ?>line.jpg"></div>
    <div class="reservation-link">
      <div class="reservation word"><img src="<?php print $images_path; ?>reservation-link.jpg"></div>
        <div class="reservation table">
          <?php $block = module_invoke('rooms_booking_manager', 'block_view', 'rooms_availability_search'); ?>
          <?php $block['content']['#action'] = url('room-reservation'); ?>
          <?php print render($block['content']); ?>              
        </div>
      </div>
    </div>
    <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div> 
	</div>