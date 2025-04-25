<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="../../dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light"></span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Client
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('clients.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Client</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('clients.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter Client</p>
                    </a>
                  </li>
            </ul></ul>
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Commandes
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('commandes.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Commande</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('commandes.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter Commande</p>
                    </a>
                  </li>
            </ul> </ul>
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Etats
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('etats.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Etat</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('etats.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter Etat</p>
                    </a>
                  </li>
            </ul> </ul>
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Pointages
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('pointages.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Pointages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('pointages.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter Pointage</p>
                    </a>
                  </li>
            </ul>  </ul> 
           
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Types
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('types.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Type</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('types.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter  Type</p>
                    </a>
                  </li>
            </ul> </ul>
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                  Users
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> User</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('users.create')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p> Ajouter  User</p>
                    </a>
                  </li>
            </ul> </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        
        <!--end::Sidebar Wrapper-->
      </aside>