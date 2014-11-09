<div class="<?php print $variables['classes']; ?>">
<div class="calendar-button">
  <div id="todaybutton" class="fc-button">
		<span class="fc-button-inner">
			<span class="fc-button-content">today</span>
			<span class="fc-button-effect"><span></span></span>
		</span>	
	</div>
  <div id="prevbutton" class="fc-button">
		<span class="fc-button-inner"><span class="fc-button-content">&nbsp;Prev&nbsp;</span><span class="fc-button-effect"><span></span></span></span>
	</div>
  <div id="nextbutton" class="fc-button">
		<span class="fc-button-inner"><span class="fc-button-content">&nbsp;Next&nbsp;</span><span class="fc-button-effect"><span></span></span></span>
	</div>
</div>
<?php foreach ($rooms_availability_field_calendar['calendar'] as $unit_calendar) { ?>
  <?php print render($unit_calendar); ?>
  <div class="cal"></div>
  <div class="cal2"></div>
<?php } ?>
</div>
