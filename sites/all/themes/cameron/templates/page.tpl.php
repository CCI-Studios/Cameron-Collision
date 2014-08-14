<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper"><div><div>

    <div id="header"><div><div>

      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="/sites/all/themes/cameron/assets/images/logo.png" alt="Cameron Collision" />
      </a>

  <div id="header_right">
    <div id="header_info">
      <div id="top_phone">(519) 876-3533&nbsp;&nbsp;&nbsp;&nbsp;</div><div id="top_address"><a href="/contact-us" style="color:#cccccc">556 Bond St. Watford,ON</a></div>&nbsp;&nbsp;&nbsp;&nbsp;<div><a href="https://www.facebook.com/pages/Cameron-Collision/266800656790290">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/fb_h.png"></a>
       <br>
       <br>
       <br>
       <br>

      <?php if($main_menu): ?>
        <nav id="main-menu">
          <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu', 'links', 'inline', 'clearfix')))); ?>
   </nav>
<?php endif; ?></div>
   </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  </div>

    </div></div></div> <!-- /#header -->

    <div id="main-wrapper"><div><div>
       <div id="banner" align="center">
             <?php print render($page['banner']); ?> 
</div>
      <a id="main-content"></a>
      
      <div id="black1"><div><div>
        <?php print render($title_prefix); ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['black1']); ?>
      </div></div></div> <!-- /#black1 -->

  <?php if ($page['red1']){?>
      <div id="red1"><div><div>
        
         <?php print render($page['red1']); ?>
      </div></div></div> <!-- /#red1 -->
<?php }?>
      <div id="black2"><div><div>
        <?php print render($page['black2']); ?>
      </div></div></div> <!-- /#black2 -->

      <div id="red2"><div><div>
        <?php print render($page['red2']); ?>
      </div></div></div> <!-- /#red2 -->
    </div></div></div> <!-- /#main, /#main-wrapper -->


    <div id="footer1"><div><div>
      <?php print render($page['footer1']); ?>
    </div></div></div> <!-- /#footer1 -->

    <div id="footer2"><div><div>
      <?//php print render($page['footer2']); ?>
      <div id="footer_container">
                          <div id="left_bottom_footer" >
                                <img src="/sites/all/themes/cameron/assets/images/footer_logo.png">
                                <br>
                          </div>
                                        
                           <div id="middle_bottom_footer">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/aqua.png">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/I-car.png">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/I-car-platinum.png">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/aud.png">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/cfib.png">
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         </div>
                <div id="right_bottom_footer">
                                    <img src="/sites/all/themes/cameron/assets/images/Phone.png"><br>
                                   <img src="/sites/all/themes/cameron/assets/images/addr.png">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/sites/all/themes/cameron/assets/images/fb.png">
                                    <br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="sites/all/themes/cameron/assets/images/master.png">
                                    &nbsp;&nbsp;&nbsp;
                                    <img src="/sites/all/themes/cameron/assets/images/visa.png">
                                    &nbsp;
                                    <img src="/sites/all/themes/cameron/assets/images/Interac.png">
                                    &nbsp;&nbsp;&nbsp;
                          </div>
                         
      <div id="site-by-cci">Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a></div>
    </div></div></div> <!-- /#footer -->


  </div></div></div> <!-- /#page-wrapper -->