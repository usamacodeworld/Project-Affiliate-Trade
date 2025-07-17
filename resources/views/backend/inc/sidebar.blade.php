 <div class="main-sidebar sidebar-style-2">
     <aside id="sidebar-wrapper">
         <div class="sidebar-brand">
             <a href="{{ route('admin.dashboard') }}"> <img alt="image" style="height: 95px" src="{{ asset('essentials/logo.png') }}"
                     class="header-logo" />
             </a>
         </div>
         <ul class="sidebar-menu">
             <li class="menu-header">Main</li>
             <li class="dropdown @yield('dashboard_active')">
                 <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                         data-feather="monitor"></i><span>Dashboard</span></a>
             </li>
             <li class="dropdown @yield('users_dropdown_active')">
                 <a href="#" class="menu-toggle nav-link has-dropdown"><i
                         data-feather="briefcase"></i><span>Users</span></a>
                 <ul class="dropdown-menu">
                     <li class="@yield('package_buyers_li_active')"><a class="nav-link @yield('package_buyers_link_toggled')" href="{{route('admin.users',['provider'=>'buyers'])}}">Buyers</a></li>
                 </ul>
             </li>
         </ul>
     </aside>
 </div>
