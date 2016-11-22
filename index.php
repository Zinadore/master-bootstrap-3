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

      <img id="header-image" src="templates/bookbookmobile/images/mobile_version/bookbook-mobile_1024.png" class="img-responsive">

      <!-- wrapper for the main, unique content for each page -->
      <div class="container">
          <jdoc:include type="component" /> <!-- main content -->

  	      <jdoc:include type="modules" name="editorsChoise" /> <!--replace with our own-->
  	      <jdoc:include type="modules" name="mostVisitedArticle" /> <!--replace with our own-->
	    </div>
	    <div id="sidenav-overlay" class="hidden-animated"></div>
      <div class="drag-target" data-sidenav="slide-out" style="touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 0px;"></div>
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
