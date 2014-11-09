<?php

$images_path = $base_path . drupal_get_path('theme', 'villagemuk') . "/images/";
include "header.tpl.php";
drupal_set_title('Contact Us');
?>


<div class="slides_container2">
	<div id="slides">
		<div class="slide2"><a href="#"><img src="<?php print $images_path; ?>banner_8.jpg"></a></div>  
	</div>
</div>
		
<div class="container-bottom2-0">
  <div class="shadow"><img src="<?php print $images_path; ?>shadow.jpg"></div>
  <div class="content-text2-0">
    <div class="leftside">
      <div class="address">
        Jl. Dewi Saraswati 2 no. 5, Seminyak, Bali- Indonesia.
        <br> Telephone: +628999000332
      </div>
	  
		<style>
			.form-actions
			{
				margin:10px 5px 5px 53px;
			}
		</style>
	
      <div class="reservation table3-3">
        <table width="429" height="219" class="reservation">
            <tr>
              <td height="52" width="200" class="reservation-2">
              <a href="#"><img src="<?php print $images_path; ?>form.jpg" width="457" height="34"></a>
              </td>
            </tr>
            <tr>
                <td>					
					<?php print render($page['content']); ?>
				</td>
            </tr>
        </table>
      </div>
    </div>
    <div class="rightside">
	<script>
	/*
	<a href="https://maps.google.com/"><img src="<?php print $images_path; ?>map.jpg"></a>
	*/
	</script>
	<iframe width="369" height="299" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=-8.670898,115.145956&amp;spn=0.006438,0.009903&amp;t=m&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;ll=-8.670898,115.145956&amp;spn=0.006438,0.009903&amp;t=m&amp;z=11&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
	</div>
  </div>
  <div class="shadow shadow2"><img src="<?php print $images_path; ?>shadow2.jpg"></div>
</div>
    
<?php include "footer.tpl.php"; ?>