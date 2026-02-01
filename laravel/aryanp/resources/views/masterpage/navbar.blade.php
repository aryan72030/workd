 <nav class="dash-sidebar light-sidebar transprent-bg">
     <div class="navbar-wrapper">
         <div class="m-header">
             <a href="index.html" class="b-brand">
                 <!-- ========   change your logo hear   ============ -->
                 <img src="{{ asset('assets/images/logo-dark.svg') }}" alt="" class="logo logo-lg" />
                 <img src="{{ asset('assets/images/logo-dark.svg') }}" alt="" class="logo logo-sm" />
             </a>
         </div>
         <div class="navbar-content">
             <ul class="dash-navbar">
                 <li class="dash-item dash-hasmenu">
                     <a href="{{ Route('dashboard') }}" class="dash-link"><span class="dash-micon"><i
                                 class="ti ti-home"></i></span><span class="dash-mtext">Dashboard</span>
                     </a>
                 </li>
                 <li class="dash-item dash-caption">
                     <label>PAGES</label>
                 </li>
                 @permission('manage_blog', 'employs')
                     <li class="dash-item dash-hasmenu">
                         <a href="{{ url('employes') }}" class="dash-link"><span class="dash-micon"><i
                                     class="ti ti-license"></i></span><span class="dash-mtext">Employes</span>
                         </a>
                     </li>
                 @endpermission
                 @permission('manage_blog','employs')
                     <li class="dash-item dash-hasmenu">
                         <a href="{{ url('product') }}" class="dash-link"><span class="dash-micon"><i
                                     class="ti ti-license"></i></span><span class="dash-mtext">product</span>
                         </a>
                     </li>
                 @endpermission
                 <li class="dash-item dash-hasmenu">
                     <a href="{{ url('index') }}" class="dash-link"><span class="dash-micon"><i
                                 class="ti ti-license"></i></span><span class="dash-mtext">Roll</span>
                     </a>
                 </li>
             </ul>

         </div>
     </div>
 </nav>
