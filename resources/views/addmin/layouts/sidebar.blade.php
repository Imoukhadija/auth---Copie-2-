<!--<ul class="list-group mb-3">
    <a href="{{ route("categories.index") }}" class="list-group-item
        font-weight-bold list-group-item-action
        list-group-item-light">
        <i class="fas fa-th-list"></i>
            Catégories
    </a>
    <a href="{{ route("garanties.index") }} " class="list-group-item
        font-weight-bold list-group-item-action
        list-group-item-light">
        <i class="fas fa-clipboard-list"></i>
            Garanties</a>
    <a href=" {{ route("vehicules.index") }}" class="list-group-item
        font-weight-bold list-group-item-action
        list-group-item-light">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M39.61 196.8L74.8 96.29C88.27 57.78 124.6 32 165.4 32H346.6C387.4 32 423.7 57.78 437.2 96.29L472.4 196.8C495.6 206.4 512 229.3 512 256V448C512 465.7 497.7 480 480 480H448C430.3 480 416 465.7 416 448V400H96V448C96 465.7 81.67 480 64 480H32C14.33 480 0 465.7 0 448V256C0 229.3 16.36 206.4 39.61 196.8V196.8zM109.1 192H402.9L376.8 117.4C372.3 104.6 360.2 96 346.6 96H165.4C151.8 96 139.7 104.6 135.2 117.4L109.1 192zM96 256C78.33 256 64 270.3 64 288C64 305.7 78.33 320 96 320C113.7 320 128 305.7 128 288C128 270.3 113.7 256 96 256zM416 320C433.7 320 448 305.7 448 288C448 270.3 433.7 256 416 256C398.3 256 384 270.3 384 288C384 305.7 398.3 320 416 320z"></path></svg>
        Vehicules</a>
    <a href="{{ route("clients.index") }} " class="list-group-item
        font-weight-bold list-group-item-action
        list-group-item-light">
        <i class="fas fa-user-cog"></i>
        clients
    </a>
</ul>
 
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img  src="{{ asset('dist/img/SAHAM.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img style="height:100px ;width:50px ;" src="{{ asset('dist/img/user-bahmou.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <ul class="navbar-nav ms-auto">
                        
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li style="right:10px" class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a style="text-align:center"  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href=" {{route('indextab')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        Tableau de bord
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('paiements.index')}} " class="nav-link">
                    <i class="fa-solid fa-list"></i>
                        <p>
                        Paiements
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{route('ventes.index')}}" class="nav-link">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Liste des contrats 
                        </p>
                    </a>
                </li>
                <li class="nav-header">Rapport</li>
                
                <li class="nav-item">
                    <a href="{{route('rapport.index')}}" class="nav-link">
                    <i class="fa-solid fa-file-pen"></i>                <p>
                        les rapports 
                        </p>
                    </a>
                </li>
</li>
                
                <li class="nav-header">Maintenance</li>
          <li class="nav-item">
            <a href="{{ route("clients.index") }}  " class="nav-link">
            <i class="fa-solid fa-rectangle-list"></i>
              <p> Liste des clients
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route("categories.index") }} " class="nav-link">
            <i class="fa-solid fa-clipboard-list"></i>
              <p>
               Liste des catégories
              
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route("vehicules.index") }}" class="nav-link">
            <i class="fa-solid fa-elevator"></i>
              <p>
              liste des vehicules
              </p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="{{ route("garanties.index") }} " class="nav-link">
            <i class="fa-solid fa-calendar-day"></i>
              <p>
             Liste des garanties
              </p>
            </a>
          </li>
           <li class="nav-item">
                    <a href=" {{route('annonces.index')}}" class="nav-link">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Liste des annonces
                        </p>
                    </a>
                </li>
         <li class="nav-item">
                    <a href=" {{url('admin/settings')}}" class="nav-link">
                    <i class="fa-solid fa-file"></i>
                        <p>
                        Parametre
                        </p>
                    </a>
                </li>
         
            
          
            </ul>
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                   
                    
                
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
