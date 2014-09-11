

<div id="container" border=1 align="center">
<div id="hem_header" align="center">
  <div id="hem_header_left">
   <img src="sites/all/themes/samoca/assets/images/logo.jpg">
  </div>
  <div id="hem_header_right">
  	<div id="header_info"><div id="top_phone">(519) 876-3533&nbsp;&nbsp;&nbsp;&nbsp;</div><div id="top_address"><a href="/contact-us" style="color:#cccccc">556 Bond St. Watford,ON</a></div>&nbsp;&nbsp;&nbsp;&nbsp;<div><a href="https://www.facebook.com/pages/Cameron-Collision/266800656790290">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/fb_h.png"></a></div> 
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
<div id="banner" align="center">
	           <?php print render($page['banner']); ?> 
</div>
<?php //if($page['resource'])
          //  { ?>

        <?php //} else {?>
       <!-- elseif ($page['team_member']) { ?>
       <div id="team">
             <?php print render($page['team_member']); ?>
       </div>
  -->
                      
         <?php //} else { ?> 

 <div id="hem_middle">
           
<?php  if ($page['welcome'] || $page['welcome_image']  || $page['content']) { ?>
          <div id="middle_top">
                   
                    <div id="message">
                        <?php //if ($title): ?><h2 class="title" id="about"><?php //print $title; ?></h2><?php// endif; ?>
                        <?php if ($page['welcome']):
                             print render($page['welcome']); endif; ?>
                        <?php if ($page['content']):
                             print render($page['content']); endif; ?>    
                    </div>     
                    <div id="middle_top_image">
                       <?php if ($page['welcome_image']): print render($page['welcome_image']); endif; ?>
                    </div> 
          </div>
<?php }?>
<?php if ($page['middle_side1b']){?>

           <div id="middle_about2" >
                      <div id="middle_side1c">

                          <?php print render($page['middle_side1b']); ?>
                      </div>
                
                      <div id="middle_about2b">
                             <?php if ($title_suffix): ?><h2 class="title" id="highlight"><?php print $title_suffix; ?></h2><?php endif; ?>
                             <?php print render($page['middle_side2c']); ?>
                       </div>
            </div>
<?php } ?>

 <?php if ($page['middle_side1c'] || $page['middle_side3b']){?>
            <div id="middle_about3">
                          
                         <div id="green_text">       
                                 <?php if ($title_suffix): ?><h1 class="title" style="#b98537"><?php print $title_suffix; ?></h1><?php endif; ?>
                                 <?php print render($page['middle_side1c']); ?>
                         </div>     
                         <div id="green_image">
                                  <?php print render($page['middle_side3b']); ?>
                          </div>     
            </div>
  <?php }?> 
  <?php if ($page['reviews']){?>

                       <div id="reviews">
                           
                                <p> <?php print render($page['reviews']); ?>
                                      </p>
                       </div>
                                <div id="form">
                                    <?php  print render($page['content']); ?>
                        
                             </div>
   <?php }?>
  <?php if ($page['resource']){?>

                       <div id="resource">
                                <p> <?php print render($page['resource']); ?>
            
                                </p>
                                
                       </div>
   <?php }?> 
   <?php if ($page['team']){?>

                       <div id="team">
                                <p> <?php print render($page['team']); ?>
                                </p>
                                
                       </div>
   <?php }?> 
   <?php if ($page['work']){?>

                       <div id="work">
                                <p> <?php print render($page['work']); ?>
                                </p>
                                
                       </div>
   <?php }?>    
   <?php if ($page['contact']){?>

                       <div id="contact">
                                <p> <?php print render($page['contact']); ?></p>
                       </div>
 <?php }?>      
  <?php if ($page['history']){?>

                       <div id="history">
                                <p> <?php print render($page['history']); ?></p>
                       </div>
 <?php }?>

<?php// }?>
                      <div id="hem_footer1">	
                      	            <?php print render($page['footer']); ?> 
                      </div>
                      <div id="widgets">
                                <div><div>
                                    <?php print render($page['widgets']); ?>
                              </div></div>
                      </div>

           <div id="hem_footer2">
              <div id="footer_container">
                          <div id="left_bottom_footer" >
                                <img src="sites/all/themes/samoca/assets/images/footer_logo.png">
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
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/samoca/assets/images/master.png">
                                    &nbsp;&nbsp;&nbsp;
                                    <img src="sites/all/themes/samoca/assets/images/visa.png">
                                    &nbsp;
                                    <img src="sites/all/themes/samoca/assets/images/Interac.png">
                                    &nbsp;&nbsp;&nbsp;
                          </div>
                          <div id="site-by-cci">Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a>
                          </div>
                </div>
            </div>
    </div> 



