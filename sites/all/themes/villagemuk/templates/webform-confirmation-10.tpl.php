<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<div class="webform-confirmation">
<?php $temp_submission = webform_menu_submission_load($sid, $node->nid); ?>
<?php $base_path = base_path(); ?>
<?php $images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/"; ?>

<style>
	table.reservation tr td 
	{
		padding:5px;
	}
</style>
<table width="429" class="reservation">
  <tr>
    <td colspan="2" class="reservation-2">
      <b><i>Thank you for your transaction. We will contact you immediately.</i></b>
      </td>
  </tr>
  <tr>
    <td colspan="2" class="reservation-2"><a href="<?php print url("confirmationproof"); ?>"><img src="<?php print $images_path; ?>btn_booking.jpg"></a></td>
  </tr>
  <tr>
    <td class="reservation-1" width="175"><b><i>Number of Reservation :</i></b></td>
      <td width="215"><?php print $temp_submission->sid; ?></td>
  </tr>
  <tr>
    <td class="reservation-1" width="175"><b><i>Arrival Date :</i></b></td>
      <td width="215"><?php print $temp_submission->data[14]['value'][0]; ?></td>
  </tr>
  <tr>
    <td class="reservation-1"> <b><i>Departure Date :</i></b></td>
      <td><?php print $temp_submission->data[15]['value'][0]; ?></td>
  </tr>
  <tr>
    <td class="reservation-1"> <b><i>Package :</i></b></td>
      <td><?php print $temp_submission->data[5]['value'][0]; ?></td>
  </tr>
</table>
</div>
