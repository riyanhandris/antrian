<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="{{ request()->is('dashboard') ? 'menu-item active' : 'menu-item' }}">
      <a href="/dashboard" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>


     <!-- Tables -->
     <li class="{{ request()->is('pengunjung') ? 'menu-item active' : 'menu-item' }}">
        <a href="/pengunjung" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Data Pengunjung</div>
        </a>
      </li>

      <li class="{{ request()->is('panggil') ? 'menu-item active' : 'menu-item' }}">
        <a href="/panggil" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Panggil Antrian</div>
        </a>
      </li>
   
      <li class="{{ request()->is('petugas') ? 'menu-item active' : 'menu-item' }}">
        <a href="/petugas" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Data Petugas</div>
        </a>
      </li>

      {{-- <li class="menu-item">
        <form action="/logout" method="post">
        @csrf
        <a href="" class="menu-link">
          <button type="submit" class="btn rounded-pill btn-danger ">
            <span class="bx bx-power-off me-2"></span>&nbsp; Keluar
          </button>
        </a>
        </form>
      </li> --}}
      
   
  </ul>