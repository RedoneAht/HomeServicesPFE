<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Tableau de Bord Admin</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/styles.css') }}">
    @livewireStyles
  </head>
  <body>
    <div class="grid-container">

      <!-- Sidebar -->
      <span id="sidebar-toggle" class="material-icons-outlined">menu</span>
      <aside id="sidebar" class="sidebar-responsive">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> ServiceNet
          </div> 
          <span class="material-icons-outlined" id="sidebar-close">close</span>
        </div>
        
        <ul class="sidebar-list" style="font-weight: 600;">
          <li class="sidebar-list-item">
            <a href="{{ route('admin.dashboard') }}">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.service_categories') }}">
            <span class="material-icons-outlined">category</span> Catégories de Services
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.all_services') }}">
            <span class="material-icons-outlined">construction</span> Services
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.service_providers') }}" >
            <span class="material-icons-outlined">group</span> Fournisseurs de Services
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.slider') }}" >
            <span class="material-icons-outlined">slideshow</span> Diapositives
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.contacts') }}" >
            <span class="material-icons-outlined">contacts</span> Contacts
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('admin.historique') }}">
                <span class="material-icons-outlined">history</span> Historique des Réservations
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                    @csrf
                </form>
                <span class="material-icons-outlined">exit_to_app</span> Déconnexion
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        {{ $slot }}
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('assets/css/dashboard/scripts.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      document.addEventListener('livewire:load', function () {
          window.addEventListener('swal:confirm', event => {
              Swal.fire({
                  title: event.detail.title,
                  text: event.detail.text,
                  icon: event.detail.icon,
                  showCancelButton: true,
                  confirmButtonColor: event.detail.confirmButtonColor,
                  cancelButtonColor: event.detail.cancelButtonColor,
                  confirmButtonText: event.detail.confirmButtonText,
                  cancelButtonText: event.detail.cancelButtonText
              }).then((result) => {
                  if (result.isConfirmed) {
                    if (event.detail.action === 'accept') {
                        Livewire.emit('acceptConfirmed');
                    } else if (event.detail.action === 'reject') {
                        Livewire.emit('rejectConfirmed');
                    }
                      Livewire.emit('ActionConfirmed');
                  }
              });
          });

          window.addEventListener('swal:response', event => {
              Swal.fire({
                  title: event.detail.title,
                  text: event.detail.text,
                  icon: event.detail.icon,
                  confirmButtonText: 'OK',
              }).then((result) => {
                    if (result.isConfirmed) {
                      if(event.detail.redirectTo){
                        window.location.href = event.detail.redirectTo; // Redirect upon confirmation
                      }
                    } 
              });
          });

      });
    </script>

    @stack('scripts')
    @livewireScripts
  </body>
</html>
