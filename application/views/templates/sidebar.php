 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
    <a href="../admin/dashboard" class="brand-link">
      <img src=" <?php echo base_url() ?>assets/dist/img/qbs_logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIPON QBS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../admin/dashboard"  class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Data Santri
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../identitas/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Santri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../riwayat/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Riwayat Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pelanggaran/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggaran</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="../tunggakan/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tunggakan Santri</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../perpustakaan/index" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Perpustakaan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="../perizinan/index" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Perizinan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i></i>
              <i class="fas fa-hand-holding-usd"></i>
              <p>
                Pembayaran Syariah
              </p>
            </a>           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>