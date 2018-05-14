<div class="row pl-0" id="altura">

  <div class="ml-0 col-sm-4 col-md-2 col-lg-2 col-xl-2 border-right border-danger rounded-right py-4 d-none d-sm-block" id="altura">
    <!-- Aqui nom del usuri/parck -->
    <nav aria-label="breadcrumb bg-transparent">
      <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item active underline-small text-uppercase" aria-current="page">{{ Auth::user()->name }}</li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span><br></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      </ol>
    </nav>
    <div class="row ">
      <div class="col pr-0 mt-2">
        <!-- Split dropright button -->
        <div class="btn-group-vertical dropright btn-block">
          <div class="btn-group dropright" role="group">

            <button type="button" class="btn btn-secondary btn-lg "  onclick="backup('{!! route('backup') !!}');">
              <p class="underline-small text-left"><i class="fas fa-lock"></i> Backups</p>
            </button>

          </div>
          <div class="btn-group  dropright" role="group">
            <button type="button" class="btn btn-secondary btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <p class="underline-small text-left"><i class="fas fa-warehouse"></i> Parcs</p>
            </button>
              <!-- Dropdown menu links -->
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Gestió dels parcs</h6>
                <a class="dropdown-item" href="{{action('UserController@create')}}">Afegir parcs</a>
                <a class="dropdown-item" href="{{action('UserController@index')}}">Consultar parcs</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Gestió de les regions</h6>
                <a class="dropdown-item" href="{{action('RegionController@create')}}">Afegir regions</a>
                <a class="dropdown-item" href="{{action('RegionController@index')}}">Consultar regions</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Gestió de les poblacions</h6>
                <a class="dropdown-item" href="{{action('LocationController@create')}}">Afegir poblacions</a>
                <a class="dropdown-item" href="{{action('LocationController@index')}}">Consultar poblacions</a>
              </div>
            </div>
            <div class="btn-group dropright" role="group">
              <button type="button" class="btn btn-secondary btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="underline-small text-left"><i class="fas fa-truck-moving"></i> Vehicles</p>
              </button>
              <!-- Dropdown menu links -->
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Gestió de vehicles</h6>
                <a class="dropdown-item" href="{{action('VehicleController@create')}}">Afegir vehicles</a>
                <a class="dropdown-item" href="{{action('VehicleController@index')}}">Consultar vehicles</a>
              </div>
            </div>
            <!-- CONTENIDORS -->
            <div class="btn-group  dropright" role="group">
              <button type="button" class="btn btn-secondary btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="underline-small text-left"><i class="fas fa-cube"></i> Contenidors</p>
              </button>
              <!-- Dropdown menu links -->
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Gestió de contenidors</h6>
                <a class="dropdown-item" href="{{action('ContainerController@create')}}">Afegir contenidor</a>
                <a class="dropdown-item" href="{{action('ContainerController@index')}}">Consultar contenidors</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Tipus de contenidors</h6>
                <a class="dropdown-item" href="{{action('ContainerNameController@create')}}">Afegir tipus</a>
                <a class="dropdown-item" href="{{action('ContainerNameController@index')}}">Consultar tipus</a>
              </div>
            </div>
            <!-- MATERIALS -->
            <div class="btn-group  dropright" role="group">
              <button type="button" class="btn btn-secondary btn-lg " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="underline-small text-left"><i class="fas fa-boxes"></i> Materials</p>
              </button>
              <!-- Dropdown menu links -->
              <div class="dropdown-menu">
                <h6 class="dropdown-header">Gestió de materials</h6>
                <a class="dropdown-item" href="{{action('MaterialController@create')}}">Afegir materials</a>
                <a class="dropdown-item" href="{{action('MaterialController@index')}}">Consultar materials</a>
              </div>
            </div>
            <!-- Aplicació -->
            <a class="btn-group btn btn-secondary btn-lg"href="http://bombers.ooo/app/bombers.apk">
              <p class="underline-small text-left"><i class="fab fa-android"></i> Aplicació
              </p>
            </a>

        </div>

      </div>
    </div>
</div>
