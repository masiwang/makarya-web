<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{Request::is('my_investment/myinvestment') ? 'active' : ''}}" aria-current="page" href="{{url('myinvestment')}}">Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('my_investment/dalam_pembiayaan') ? 'active' : ''}}" href="{{url('dalam_pembiayaan')}}">Dalam Pembiayaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('') ? 'active' : ''}}" href="">Sedang Berjalan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('') ? 'active' : ''}}" href="">Selesai</a>
    </li>
</ul>