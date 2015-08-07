<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
$node1 = node_load(13, NULL, TRUE);
$node1_view = node_view($node1);
drupal_add_js("jQuery(document).ready(function () {
jQuery('.kal-box2').hide();
jQuery('#edit-rooms').change( function() {
	var val = jQuery(this).val();
	if (val == 1) {
    window.location = '/booking';
	} else if (val == 2) {
    window.location = '/booking2';
	}else if (val == 3) {
    window.location = '/booking3';
	}else if (val == 4) {
    window.location = '/booking4';
	}
});
});", 'inline');
?>
</script>
<style>
	.field-label-above .field-label
	{
		display:none;
	}
	
	.kal-box1, .kal-box2
	{
		/*
		float:left;
		width:46%;
		min-height: 250px;
		padding:1%;
		margin:0 1%;
		background:#92715e;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		color:#fff;
		*/
	}
	
	.calendar-button
	{		
		margin:0 1% 1% 1%;
	}
	
	.fc-button
	{
		background:#92715e;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		color:#fff;
		padding:2px;
	}
	
	.cal-processed, .cal2-processed
	{
		float:left;
		width:46%;
		min-height: 250px;
		padding:1%;
		margin:0 1%;
		background:#92715e;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-webkit-border-radius: 5px;
		color:#fff;
	}
	
	.kalender {
		width: 600px;
	}
	
	.kal-box1 h2, .kal-box2 h2
	{
		font-size:14px;
	}
	
	.fc-event-title
	{
		font-size:0px;
	}
	
	.fc-widget-header, .fc-widget-content {
		border: 1px solid #92715e;
		background: #b59c8c;
	}
	
	.availability-title
	{
		display:none;
	}
</style>

<div id="example2" style="height: 205px;">
			<div id="slides">
			  <div class="slides_container2">
					<div class="slide2">
						<a href="#"><img src="<?php print $images_path; ?>banner_4.jpg"></a>
					</div>
			  </div>
			</div>
		</div>
		
	<div class="container-bottom2">
		<div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
		<div class="content-text2">
			<div class="kalender">
					
					<div style="clear:both; margin:0 1%; padding:0 1%;">
						<table>
							<tr>
								<td style="padding-right:10px;">
									Villas Type :
								</td>
								<td>
									<select id="edit-rooms" name="rooms" class="form-select ajax-processed">
										<option value="1">Villa gemuk 2 bed room</option>
										<option value="2">Villa gemuk 3 bed room</option>
                    <option value="3" selected="selected">Villa gemuk deluxe 2 bed room</option>
                    <option value="4">Villa gemuk deluxe 3 bed room</option>
									</select>
								</td>
							</tr>
						</table>
					</div>
					
					<div style="clear:both;">
						&nbsp;
					</div>
					
					<div class="kal-box1">
						<?php print drupal_render ($node1_view['field_available_calendar']); ?>
					</div>
					
					<div style="clear:both;">
						&nbsp;
					</div>
					
					<div style="clear:both; margin:1% 1% 1% 75%; padding:1%;">
						<table>
							<tr>
								<td style="background:#FF0000; height:10px; width:15px;">
									&nbsp;
								</td>
								<td style="padding:2px 10px;">
									not avaliable
								</td>
							</tr>
							<tr>
								<td colspan="2" style="font-size:0px; height:2px;">
									&nbsp;
								</td>
							</tr>
							<tr>
								<td style="background:#8CBF62; height:10px; width:15px;">
									&nbsp;
								</td>
								<td style="padding:2px 10px;">
									avaliable
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="line"><img src="<?php print $images_path; ?>line.jpg"></div>
				<script>
				</script>
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
														  
														<?php print render($page['content']); ?>
						</td>
								</tr>
							</table>
						</div>
				</div>
		</div>
		<div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div>
		
</div>
<?php include "footer.tpl.php"; ?>