

<div id="container" border=1 align="center">
    <div id="hem_header" align="center">
        <div id="hem_header_left">
           <img src="sites/all/themes/samoca/assets/images/logo.jpg">
        </div>
    <div id="hem_header_right">
          <div id="header_info"><div id="top_phone">(519) 876-3533&nbsp;&nbsp;&nbsp;&nbsp;</div><div id="top_address"><a href="http://samoca.local:8083/contact-us" style="color:#cccccc">556 Bond St. Watford,ON</a></div>&nbsp;&nbsp;&nbsp;&nbsp;<div><a href=" https://www.facebook.com/pages/Cameron- Collision/266800656790290 ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/fb_h.png"></a></div> 
   </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
<?php if($main_menu): ?>
        <nav id="main-menu">
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu', 'links', 'inline', 'clearfix')))); ?>
        </nav>
        <?php endif; ?>
  </div>
</div>
    <div id="hem_banner" align="center">
    		  <?php print render($page['banner']); ?> 
    </div>


<div id="hem_middle">
<div id="middle_top">

<div id="message">
	       	<?php print render($page['welcome']); ?>
   
 </div>     
      <div id="middle_top_image">
            <?php print render($page['welcome_image']); ?>
            <br>
            <br>
      </div>
       
</div>

  <div id="middle2" >
      <div id="side1">
                 <?php if ($title_suffix): ?><h2 class="title" id="refinshing"><?php print $title_suffix; ?></h2><?php endif; ?>
                <?php print render($page['middle_side1']); ?>
      </div>
      <div id="side2">
          <?php print render($page['middle_side2']); ?>
      </div>
      <div id="side3">
            <?php if ($title_suffix): ?><h2 class="title" id="collision"><?php print $title_suffix; ?></h2><?php endif; ?>
            <?php print render($page['middle_side3']); ?>
           

<p>&nbsp;</p>
      </div>

    </div>
    
    <div id="middle_bottom" >
          <div id="side1_b">
              <?php print render($page['middle_side1b']); ?>
          </div>
          <div id="Before">
               <img src="sites/all/themes/samoca/assets/images/before.png">
          </div>

           <div id="See">
               <a href="cameron.local/gallery"><img src="sites/all/themes/samoca/assets/images/seemore.png"></a>
            </div>
            <div id="side2_b">
                   <?php if ($title_suffix): ?><?php print $title_suffix; ?><?php endif; ?>
                  <?php print render($page['middle_side2b']); ?>

          </div>
           <div id="After">
               <img src="sites/all/themes/samoca/assets/images/after.png">
          </div>
          <div id="side3_b">
                <?php print render($page['middle_side3b']); ?>
          </div>

    </div>
   <div id="middle_bottom2" >
          <div id="middle_side1c">
              <?php print render($page['middle_side1c']); ?>
          </div>
<div id="high_red2">

</div>
        <div id="middle_side2c">
                   <?php if ($title_suffix): ?><h2 class="title" id="highlight"><?php print $title_suffix; ?></h2><?php endif; ?>
                  <?php print render($page['middle_side2c']); ?>

    </div>
    
</div>

<div id="hem_footer1">	
	<?php print render($page['footer']); ?> 
</div>
<div id="hem_footer2">
      <div id="footer_container">
  <div id="left_bottom_footer" >
      <img src="sites/all/themes/samoca/assets/images/footer_logo.png" margin-top="-15px">
      <br>
      <img src="sites/all/themes/samoca/assets/images/tag_line.png">
     

</div>
<div id="line">
  <img src="sites/all/themes/samoca/assets/images/rectangle.png">
 </div>
      
   <div id="middle_bottom_footer">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/aqua.png">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/I-car.png">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/I-car-platinum.png">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/aud.png">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/cfib.png">
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </div>
 <div id="line">
<img src="sites/all/themes/samoca/assets/images/rectangle.png">
 </div>
 <div id="right_bottom_footer">
  <img src="sites/all/themes/samoca/assets/images/Phone.png"><br>
 <img src="sites/all/themes/samoca/assets/images/addr.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/fb.png">
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/master.png">
  &nbsp;&nbsp;&nbsp;
  <img src="sites/all/themes/samoca/assets/images/visa.png">
  &nbsp;
  <img src="sites/all/themes/samoca/assets/images/Interac.png">
  &nbsp;&nbsp;&nbsp;
 </div>

      <div id="site-by-cci">Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a></div>
      
      </div></div>
</div>



