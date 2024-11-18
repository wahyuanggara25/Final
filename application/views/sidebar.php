<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('home') ?>">
        <div class="sidebar-brand-icon">
          <img src="<?php echo base_url('') ?>img/kemhan.png">
        </div>
      </a>
      <hr class="sidebar-divider my-0">

      <li class="nav-item <?php if ($controller->CurrentPage() == "home")echo "active";?>">
        <a class="nav-link" href="<?php echo site_url('')?>/home">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      
    

      <li class="nav-item <?php if ($controller->CurrentPage() == "user")echo "active";?>">
        <a class="nav-link" href="<?php echo site_url('')?>/user">
          <i class="fas fa-fw fa-users"></i>
          <span>User</span></a>
      </li>


      <li class="nav-item <?php if ($controller->CurrentPage() == "kader_negara")echo "active";?>">
        <a class="nav-link" href="<?php echo site_url('')?>/kader_negara">
          <i class="fas fa-fw fa-users"></i>
          <span>Data Kader Negara</span></a>
      </li>


      <li class="nav-item <?php if ($controller->CurrentPage() == "Laporan_Kegiatan")echo "active";?>">
        <a class="nav-link" href="<?php echo site_url('')?>/Laporan_Kegiatan">
          <i class="fas fa-fw fa-users"></i>
          <span>Laporan Kegiatan</span></a>
      </li>
     
  
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('')?>/login/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Exit</span></a>
      </li>
    </ul>