<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{Request::is('profile/myinvestment') ? 'active' : ''}}" aria-current="page" href="{{url('myinvestment')}}">Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile') ? 'active' : ''}}" href="">Dalam Pembiayaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile/document') ? 'active' : ''}}" href="">Sedang Berjalan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile/address') ? 'active' : ''}}" href="">Selesai</a>
    </li>
</ul>