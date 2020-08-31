<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{Request::is('myinvestment') ? 'active' : ''}}" aria-current="page" href="{{url('myinvestment')}}">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('dalam_pembiayaan') ? 'active' : ''}}" href="{{url('dalam_pembiayaan')}}">Dalam Pembiayaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('sedang_berjalan') ? 'active' : ''}}" href="{{url('sedang_berjalan')}}">Sedang Berjalan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('') ? 'active' : ''}}" href="">Selesai</a>
    </li>
</ul>