 <nav class="mt-2">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                     Dashboard
                 </p>
             </a>
         </li>

         {{-- <li class="nav-item">
             <a href="../widgets.html" class="nav-link">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                     Dummy Menu
                     <span class="right badge badge-danger">New</span>
                 </p>
             </a>
         </li> --}}

         <li class="nav-item">
             <a href="/dummyPasien" class="nav-link {{ Request::is('dummyPasien*') ? 'active' : '' }}">
                 <i class="nav-icon fas fa-th"></i>
                 <p>
                     Semua Pasien
                 </p>
             </a>
         </li>

         <li class="nav-item">
             <a href="" class="nav-link">
                 <i class="nav-icon fas fa-chart-pie"></i>
                 <p>
                     Pasien
                     <i class="right fas fa-angle-left"></i>
                 </p>
             </a>
             <ul class="nav nav-treeview">
                 <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Pasien Hari Ini</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Pasien Bulan Ini</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="" class="nav-link">
                         <i class="far fa-circle nav-icon"></i>
                         <p>Pasien Tahun Ini</p>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-header">Rekam Medis</li>

         <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon far fa-image"></i>
                 <p>
                     Rawat Jalan
                 </p>
             </a>
         </li>

         <li class="nav-item">
             <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-columns"></i>
                 <p>
                     Rawat Inap
                 </p>
             </a>
         </li>
         <li class="nav-header">Menu Admin</li>

     </ul>
 </nav>
