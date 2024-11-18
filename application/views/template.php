<!DOCTYPE html>
<html lang="en">

<?php echo $head; ?>

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo $sidebar; ?>
    <!-- Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- TopBar -->
        <?php echo $header; ?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
        <?php echo $content; ?>
        </div>
        <!---Container Fluid-->

      </div>
      
      <!-- Footer -->
      <?php echo $footer; ?>  
      <!-- Footer -->
    
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php echo $js; ?>
</body>

</html>