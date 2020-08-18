<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile') ? 'active' : ''}}" aria-current="page" href="{{url('profile')}}">Biodata diri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile/document') ? 'active' : ''}}" href="{{url('profile/document')}}">Dokumen Pribadi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('profile/address') ? 'active' : ''}}" href="{{url('profile/address')}}">Daftar Alamat</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{Request::is('profile/security') ? 'active' : ''}}" href="{{url('profile/security')}}">Keamanan</a>
    </li>
</ul>