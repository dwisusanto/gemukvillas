<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>
<?php
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  //print_r($form['submitted']);
  //print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  $images_path = base_path() . drupal_get_path('theme', 'villagemuk') . "/images/";
?>

<style>
	.reservation.table3-2
	{
		width:500px;
	}
	
	#edit-submit
	{
		background: url('<?php print $images_path; ?>btn_submit.jpg');
		text-indent: -9999px;
		width: 111px;
		height: 22px;
	}
</style>

<table>
	<tr>
		<td width="180" style="text-align:right; padding-right:5px;"><b><i>Name *</i></b></td>
		<td width="60"><b><i> :</i></b></td>
		<td>
			<?php print drupal_render($form['submitted']['name']); ?>
		</td>
	</tr>
	<tr>
		<td style="text-align:right; padding-right:5px;"><b><i>Email*</i></b></td>
		<td><b><i> :</i></b></td>
		<td>
			<?php print drupal_render($form['submitted']['email']); ?>
		</td>
	</tr>
	<tr>
		<td style="text-align:right; padding-right:5px;"><b><i>Message</i></b></td>
		<td>
			<b><i> :</i></b>
		</td>
		<td width="400">
			<?php print drupal_render($form['submitted']['message']); ?>
		</td>
	</tr>
	<tr>
		<td style="text-align:right; padding-right:5px;"><b><i>File</i></b></td>
		<td><b><i> :</i></b></td>
		<td>
			<?php print drupal_render($form['submitted']['file']); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2"></td> 
		<td>
<?php print drupal_render_children($form); ?>
		
		</td>
	</tr>
</table>
