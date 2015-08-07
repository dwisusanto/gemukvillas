<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
?>

<style>
	.table3-2 textarea
	{
		width: 275px;
	}
	.direction
	{
		margin:0;
	}
	.direction-1
	{
		margin:0 auto;
		width:500px;
	}
	.reservation-status
	{
		width:100%;
		margin:15px 0;
		padding:10px 0;
		border-top:1px dashed #977663;
		border-bottom:1px dashed #977663;
	}
	.reservation.table3-2
	{
		float:none;
		margin:0 auto;
	}
	
	.reservation-status table tr td
	{
		padding:3px 0;
	}
	
	.reserv-edit
	{
		background: #977663;
		width: 80px;
		display: block;
		padding: 10px;
		text-align: center;
		margin-left: 15px;
		color: #fff;
		font-style: italic;
	}
</style>

<div class="slides_container2">
  <div id="slides"><a href="#"><img src="<?php print $images_path; ?>banner_7.jpg"></a></div>
</div>
<div class="container-bottom3">
  <div class="rates-reservation">
    <div class="rates"><a href="<?php print url("rates-reservation"); ?>"><img src="<?php print $images_path; ?>3-rates.jpg"></a></div>
    <div class="reservation"><a href="#"><img src="<?php print $images_path; ?>3-reservation.jpg"></a></div>
  </div>
  <div class="reservation-button"><a href="<?php print url("reservation"); ?>"><img src="<?php print $images_path; ?>button-reservation-hover.jpg"></a></div>
  <div class="confirmation-button"><a href="<?php print url("confirmationproof"); ?>""><img src="<?php print $images_path; ?>button-confirmation.jpg"></a></div>
</div>
<div class="clear">&nbsp;</div>
<div class="container-bottom2-0">
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2-0">
    <div class="direction">
      <div class="direction-1">
<?php if (arg(2) == 'done') : ?>
			<img src="<?php print $images_path; ?>btn-direction3.jpg">
<?php else : ?>
			<img src="<?php print $images_path; ?>btn-direction2.jpg">
<?php endif; ?>
			</div>		
<?php if (@!$_GET['sid']) { ?>	
		<div class="reservation-status">
			<table>
				<tr>
					<td width="210">
						
					</td>
					<td width="550">
						<table>
							<tr>
								<td width="100" style="font-weight:bold;">
									Arrival Date :
								</td>
								<td width="180">
									<?php print @$_POST['rooms_start_date']['date']; ?>
								</td>
								<td width="80" style="font-weight:bold;">
									Villa Type :
								</td>
								<td width="180">
								<?php
								if (@$_POST['rooms'] == 1) {
									print 'Villa gemuk';
								} else if (@$_POST['rooms'] == 2) {
									print 'Villa gemuk Deluxe';
								}
								?>
									
								</td>
							</tr>
							<tr>
								<td style="font-weight:bold;">
									Departure Date :
								</td>
								<td>
									<?php print @$_POST['rooms_end_date']['date']; ?>
								</td>
								<td style="font-weight:bold;">
									Bedroom :
								</td>
								<td>
								<?php print @$_POST['group_size_adults:']; ?>
								</td>
							</tr>
						</table>
					</td>
					<td width="150">
						<a href="javascript:history.back();" class="reserv-edit">EDIT</a>
					</td>
				</tr>
			</table>
		</div>
<?php } ?>			
      <div class="reservation table3-2" style="min-height: 220px;">
      <?php if ($messages): ?>
  			    <div id="messages"><div class="section clearfix">
  			      <?php print $messages; ?>
  			    </div></div> <!-- /.section, /#messages -->
  			  <?php endif; ?>
      <?php print render($page['content']); ?>			
      </div>
    </div>
  </div>
  <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div   
></div>		
</div>
<script>
jQuery(document).ready(function() {
  jQuery("#webform-component-villa").hide();
  jQuery("#webform-component-bedroom").hide();
  jQuery("#webform-component-check-in").hide();
  jQuery("#webform-component-check-out").hide();
	
  jQuery("#edit-submitted-villa").val("<?php print  (@$_POST['rooms'] == 1) ? 'Villa gemuk' : 'Villa gemuk Deluxe'; ?>");
  jQuery("#edit-submitted-bedroom").val("<?php print @$_POST['group_size_adults:'] ?>");
  jQuery("#edit-submitted-check-in").val("<?php print @$_POST['rooms_start_date']['date']; ?>");
  jQuery("#edit-submitted-check-out").val("<?php print @$_POST['rooms_end_date']['date']; ?>");
});
</script>
<?php include "footer.tpl.php"; ?>