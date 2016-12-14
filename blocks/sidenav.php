<?php
  defined('_JEXEC') or die; ?>

<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <?php if($this->countModules('sidenav-menu')): ?>
          <jdoc:include type="modules" name="sidenav-menu" />
        <?php endif ?>
    </ul>
</nav>
