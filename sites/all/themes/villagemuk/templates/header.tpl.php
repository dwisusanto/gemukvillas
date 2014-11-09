<div id="container">	
	<div class="header">
		<a href="<?php print url(); ?>"><img src="<?php print $images_path; ?>logo-site.png" width="168" height="99"></a>
		<br>
		<div class="tagline">{ PRIVATE VILLAS }</div>
	</div>
	<div class="menu-wrapper">
    <div id="menu-main-menu">			
        <ul class="menu-main-nav">
<?php
$style = "";
$current_link = request_path();
$menu = array("rates-reservation", "room-reservation", "confirmationproof", "reservation", "reservation-index");
if (in_array($current_link, $menu)) {
	$style = "background: #977663;color: #ffffff;";
	$style2 = "border-bottom:none;";
}
else
{
	$style2 = "";
}
?>
          <li style="<?php print $style2; ?>">
            <a href="<?php print url('rates-reservation'); ?>" style="<?php print $style; ?>">RATES & RESERVATION</a>
          </li>  
<?php
$style = "";
$menu = array("booking");
if (in_array($current_link, $menu)) {
	$style = "background: #977663;color: #ffffff;";
	$style2 = "border-bottom:none;";
}
else
{
	$style2 = "";
}
?>
          <li style="<?php print $style2; ?>">
            <a href="<?php print url('booking')?>" style="<?php print $style; ?>">AVAILABLE CALENDER</a>                               	
          </li>
<?php
$style = "";
$menu = array("package", "offers", "package-1");
if (in_array($current_link, $menu)) {
	$style = "background: #977663;color: #ffffff;";
	$style2 = "border-bottom:none;";
}
else
{
	$style2 = "";
}
?>
          <li style="<?php print $style2; ?>">
            <a href="<?php print url('offers')?>" style="<?php print $style; ?>">OFFERS & PACKAGE</a>       
          </li>   
<?php
$style = "";
$menu = array("gallery", "gallery-1");
if (in_array($current_link, $menu)) {
	$style = "background: #977663;color: #ffffff;";
	$style2 = "border-bottom:none;";
}
else
{
	$style2 = "";
}
?>		  
          <li style="<?php print $style2; ?>">
						<a href="<?php print url("gallery"); ?>" style="<?php print $style; ?>">GALLERY</a>
          </li>
<?php
$style = "";
$menu = array("contact-us");
if (in_array($current_link, $menu)) {
	$style = "background: #977663;color: #ffffff;";
	$style2 = "border-bottom:none;";
}
else
{
	$style2 = "";
}
?>
          <li style="<?php print $style2; ?>">
            <a href="<?php print url('contact-us')?>" style="<?php print $style; ?> padding:8px 39px 2px 38px;">CONTACT US</a>
          </li>
        </ul>
    </div> 
    
</div>
</div>