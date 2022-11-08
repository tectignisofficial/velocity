<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <!-- <h2  class="text-center">Velocity</h2> -->
     <img src="dist/img/logo.webp" width="80%" class="rounded pl-3 ml-3" alt="">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
                <i class="nav-icon fas fa-tachometer-alt text-red"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="products.php" class="nav-link <?= $page == 'products.php' ? 'active':'' ?>">
              <i class=" nav-icon fa fa-product-hunt"></i>
                <p>
                  Products
                </p>
              </a>
            </li>
            <li class="nav-item">
             <a href="gallery.php" class="nav-link <?= $page == 'gallery.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-image text-skyblue"></i>
               <p>
              Gallery
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="add_categories.php" class="nav-link <?= $page == 'add_categories.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-image text-skyblue"></i>
               <p>
             Add Categories
               </p>
             </a>
           </li>
           <li class="nav-item">
             <a href="edit_profile.php" class="nav-link <?= $page == 'edit_profile.php' ? 'active':'' ?>">
              <i class="nav-icon fa-solid fa-pen text-skyblue"></i>
               <p>
                Edit Profile
               </p>
             </a>
           </li>
            <li class="nav-item">
                  <a href="contact_us.php" class="nav-link <?= $page == 'contact_us.php' ? 'active':'' ?>">
                  <i class="nav-icon fa-solid fa-phone text-red"></i>
                    <p>
                 Contact Us
                    </p>
                  </a>
            </li>
            <li class="nav-item">
                  <a href="contact_us.php" class="nav-link <?= $page == 'contact_us.php' ? 'active':'' ?>">
                  <i class="nav-icon fa-solid fa-key text-skyblue"></i>
                    <p>
                 Update Password
                    </p>
                  </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>