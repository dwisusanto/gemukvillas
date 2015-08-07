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
<div class="container-bottom2-1">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("offers");?>"><img src="<?php print $images_path; ?>5-offers.jpg"></a></div>
    <div class="reservation"><a href="#"><img src="<?php print $images_path; ?>5-package.jpg"></a></div>
  </div>
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2">
    <div class="package">
      <div class="package-text">
          <h2><i> Ubud Honeymoon Package </i></h2>
          <p><i> Couples seeking for the most romantic getaways have been travelling to Bali for honeymoon. Embark on your most romantic Bali luxury honeymoon vacation with us, one of the best Bali resorts for honeymoon. Check out our honeymoon packages to find out the endless tropical honeymoon trip in Bali you will never forget </i></p>
		
			<div style="text-align:center; margin-bottom: 10px;">
				<img src="<?php print $images_path; ?>offer-detail1.jpg"> 
				<img src="<?php print $images_path; ?>offer-detail2.jpg">  
				<img src="<?php print $images_path; ?>offer-detail3.jpg"> 
			</div>
	  </div>
      <div id="line-package">
      </div>
      <div class="package-price">
          <div class="package-content">
              <div class="package-table">
                      <table width="528" class="left-table">
                          <tr>
                              <td width="192" height="20" class="TYPEOFVILLA">&nbsp;  <b>Villa Types</b></td>
                              <td width="90" class="TYPEOFVILLA"> &nbsp; <b> DAILY RATE </b> </td>
                              <td width="107" height="20" class="TYPEOFVILLA"> &nbsp; <b> WEEKLY RATE </b></td>
                              <td width="119" height="20" class="TYPEOFVILLA">&nbsp; <b> MONTHLY RATE </b></td>
                          </tr>
                          <tr>
                              <td width="192" height="30" class="TYPEOFVILLA"> &nbsp; VILLA GEMUK 1(bedroom2)<br></br></p></td>
                              <td width="90" height="30" class="TYPEOFVILLA"> &nbsp; $300++</td>
                              <td width="107" height="30" class="TYPEOFVILLA"></br>  &nbsp;$300++</td>
                              <td width="119" height="30" class="TYPEOFVILLA"></br>  &nbsp;$300++ </td>
                              
                        </tr>
                          <tr>
                              <td width="192" height="30" class="TYPEOFVILLA"> &nbsp; VILLA GEMUK 1(bedroom3)</td>
                              <td width="90" height="30" class="TYPEOFVILLA"> &nbsp; $300++ </td>
                              <td width="107" height="30" class="TYPEOFVILLA"> &nbsp;&nbsp;$300++</td>
                              <td width="119" height="30" class="TYPEOFVILLA"></br> &nbsp; $300++ </td>
                          </tr>
                          <tr>
                              <td width="192" height="30" class="TYPEOFVILLA"> &nbsp; VILLA GEMUK 2(bedroom2)</td>
                              <td width="90" height="30" class="TYPEOFVILLA"> &nbsp; $300++ </td>
                              <td width="107" height="30" class="TYPEOFVILLA"> &nbsp;&nbsp;$300++</td>
                              <td width="119" height="30" class="TYPEOFVILLA"></br> &nbsp; $300++ </td>
                          </tr>
                          <tr>
                              <td width="192" height="30" class="TYPEOFVILLA"> &nbsp; VILLA GEMUK 2(bedroom3)</td>
                              <td width="90" height="30" class="TYPEOFVILLA"> &nbsp; $300++ </td>
                              <td width="107" height="30" class="TYPEOFVILLA"> &nbsp;&nbsp;$300++</td>
                              <td width="119" height="30" class="TYPEOFVILLA"></br> &nbsp; $300++ </td>
                          </tr>
                      </table>
                  </div>
              <div class="clear">&nbsp;</div>
              <br></br>
              <div class="package-p">
                      Stay for 3 nights and 4 days in One Bedroom Pool Villa, includes a Romantic Candle Light Dinner under the stars, 120 minutes Ayurveda spa treatment for couple, Honeymoon decoration.<br></br>Romantic Package Inclusion:<br>
                           <br>- 3 nights and 4 days accommodation in one bedroom villa with private pool
                           <br>- Welcome drink and fragrant chilled towel
                           <br>- Welcome flower
                           <br>- Fruit basket upon arrival
                           <br>- Honeymoon decoration
                           <br>- Flower bath tub
                           <br>- Breakfast cooked and served in villa or buffet breakfast at restaurant
                           <br>- Free unlimited wireless internet access
                           <br>- Shuttle service to nearest beach as scheduled
                           <br>
                           - 1x lunch (five courses) in villa or restaurant for couple
                           <br>- 1x Two hours spa treatment Ayurveda for couple
                           <br>- 1x Romantic candle light dinner under the stars at poolside villa for couple
                           <br>- Return airport transfers
                       <br></br><b> Terms & Conditions: </b>
                          <br>- Surcharge:
                          <br>- High season (July 15 - September 15) : USD 40 /villa/night
                          <br>- Peak season (December 21 - January 05) : USD 60 /villa/night
                          <br>- Extension night at USD 300++ /villa/night
                          <br>- The above rates are subject to 21% government tax & service
                  </div>
          </div>
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