 <nav class="dash-sidebar light-sidebar transprent-bg">
     <div class="navbar-wrapper">
         <div class="m-header">
             <a href="index.html" class="b-brand">
                 <!-- ========   change your logo hear   ============ -->
                 <img src="<?php echo e(asset('assets/images/logo-dark.svg')); ?>" alt="" class="logo logo-lg" />
                 <img src="<?php echo e(asset('assets/images/logo-dark.svg')); ?>" alt="" class="logo logo-sm" />
             </a>
         </div>
         <div class="navbar-content">
             <ul class="dash-navbar">
                 <li class="dash-item dash-hasmenu">
                     <a href="<?php echo e(Route('dashboard')); ?>" class="dash-link"><span class="dash-micon"><i
                                 class="ti ti-home"></i></span><span class="dash-mtext">Dashboard</span>
                     </a>
                 </li>
                 <li class="dash-item dash-caption">
                     <label>PAGES</label>
                 </li>
                 <?php if (app('laratrust')->hasPermission('manage_blog', 'employs')) : ?>
                     <li class="dash-item dash-hasmenu">
                         <a href="<?php echo e(url('employes')); ?>" class="dash-link"><span class="dash-micon"><i
                                     class="ti ti-license"></i></span><span class="dash-mtext">Employes</span>
                         </a>
                     </li>
                 <?php endif; // app('laratrust')->permission ?>
                 <?php if (app('laratrust')->hasPermission('manage_blog','employs')) : ?>
                     <li class="dash-item dash-hasmenu">
                         <a href="<?php echo e(url('product')); ?>" class="dash-link"><span class="dash-micon"><i
                                     class="ti ti-license"></i></span><span class="dash-mtext">product</span>
                         </a>
                     </li>
                 <?php endif; // app('laratrust')->permission ?>
                 <li class="dash-item dash-hasmenu">
                     <a href="<?php echo e(url('index')); ?>" class="dash-link"><span class="dash-micon"><i
                                 class="ti ti-license"></i></span><span class="dash-mtext">Roll</span>
                     </a>
                 </li>
             </ul>

         </div>
     </div>
 </nav>
<?php /**PATH C:\xampp\htdocs\aryanp\resources\views\masterpage\navbar.blade.php ENDPATH**/ ?>