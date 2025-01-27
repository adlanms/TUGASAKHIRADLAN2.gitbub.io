<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <h2 class="mt-3">Backend</h2>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <h2 class="mt-3">Backend</h2>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>

            <li class=active><a class="nav-link" href="<?php echo e(route('home')); ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>


            <li class="menu-header">Starter</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Post</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('post.index')); ?>">List Post</a></li> 
                <li><a class="nav-link" href="<?php echo e(route('post.tampil_hapus')); ?>">List Post Dihapus</a></li>              
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Kategori</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('category.index')); ?>">List Kategori</a></li>            
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tag</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('tag.index')); ?>">List Tag</a></li>            
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Users</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('user.index')); ?>">List User</a></li>            
              </ul>
            </li>
    
       
        </aside>
      </div><?php /**PATH C:\xampp\htdocs\TUGASAKHIRADLAN2\resources\views/template_backend/sidebar.blade.php ENDPATH**/ ?>