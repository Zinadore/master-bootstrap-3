<?php
/*------------------------------------------------------------------------
# author Gonzalo Suez
# copyright Copyright © 2013 gsuez.cl. All rights reserved.
# @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website http://www.gsuez.cl
-------------------------------------------------------------------------*/	// no direct access
defined('_JEXEC') or die;

include 'includes/unseting.php';

include 'includes/params.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php
 include 'includes/head.php'; ?>
<body id="body">
      <?php include 'blocks/header.php'; ?>
  <div id="wrapper" class="wrapper">
    <?php include 'blocks/sidenav.php'; ?>

    <div id="page-content-wrapper">

      <div id="header-image" class="img-responsive"></div>

      <!-- wrapper for the main, unique content for each page -->
      <div class="container">
          <jdoc:include type="component" /> <!-- main content -->


          <div class="editors-choice-most-visited-row">
            <div class="editors-choice">
              <jdoc:include type="modules" name="editors-choice" /> 
            </div>

            <div class="most-visited-article">
              <jdoc:include type="modules" name="most-visited-article" /> 
            </div>
          </div> <!--.editors-choice-most-visited-row-->

          <div class="banners">
            <jdoc:include type="modules" name="banners"/>
          </div>
          <jdoc:include type="modules" name="social-buttons"/>
      </div> <!--.container-->

      <!-- The dark overlay shown when side menu is open-->
	    <div id="sidenav-overlay" class="hidden-animated"></div> 

      <!--Used to drag the side menu from the side when on a mobile device-->
      <div id="drag-target" class="drag-target" data-sidenav="slide-out" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
    </div>
  </div>



<jdoc:include type="modules" name="debug" />
</section>
<!-- page -->
<!-- JS -->
<script type="text/javascript" src="<?php echo $tpath; ?>/js/template.min.js"></script>
<!-- JS -->
</body>
</html>
