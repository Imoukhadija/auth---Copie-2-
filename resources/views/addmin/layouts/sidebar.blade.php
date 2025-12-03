
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
        <img src="{{ asset('dist/img/SAHAM.png') }}" alt="Logo"
             class="brand-image img-circle elevation-3" style="opacity: .9">
        <span class="brand-text font-weight-light"> {{ Auth::user()->name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
     
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column sidebar-modern" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('indextab') }}" class="nav-link {{ request()->routeIs('indextab') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Tableau de bord
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('paiements.index') }}" class="nav-link {{ request()->routeIs('paiements.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-list"></i>
                        <p>
                        Paiements
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ventes.index') }}" class="nav-link {{ request()->routeIs('ventes.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Liste des contrats 
                        </p>
                    </a>
                </li>
                <li class="nav-header">Rapport</li>
                
                <li class="nav-item">
                    <a href="{{ route('rapport.index') }}" class="nav-link {{ request()->routeIs('rapport.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-file-pen"></i>                <p>
                        les rapports 
                        </p>
                    </a>
                </li>
</li>
                
                <li class="nav-header">Maintenance</li>
          <li class="nav-item">
            <a href="{{ route('clients.index') }}" class="nav-link {{ request()->routeIs('clients.*') ? 'active' : '' }}">
            <i class="fa-solid fa-rectangle-list"></i>
              <p> Liste des clients
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
            <i class="fa-solid fa-clipboard-list"></i>
              <p>
               Liste des catégories
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('vehicules.index') }}" class="nav-link {{ request()->routeIs('vehicules.*') ? 'active' : '' }}">
            <i class="fa-solid fa-elevator"></i>
              <p>
              liste des vehicules
              </p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="{{ route('garanties.index') }}" class="nav-link {{ request()->routeIs('garanties.*') ? 'active' : '' }}">
            <i class="fa-solid fa-calendar-day"></i>
              <p>
             Liste des garanties
              </p>
            </a>
          </li>
           <li class="nav-item">
                    <a href="{{ route('annonces.index') }}" class="nav-link {{ request()->routeIs('annonces.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Liste des annonces
                        </p>
                    </a>
                </li>
         <li class="nav-item">
                    <a href="{{ url('admin/settings') }}" class="nav-link {{ request()->is('admin/settings') ? 'active' : '' }}">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Parametre
                        </p>
                    </a>
                </li>

                @auth
                <li class="nav-item sidebar-logout">
                    <a href="{{ route('logout') }}" class="nav-link sidebar-logout-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Déconnexion</p>
                    </a>
                    <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                @endauth

	           </ul>
	       </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
