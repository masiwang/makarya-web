<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link {{Request::is('keranjang') ? 'active' : ''}}" aria-current="page" href="{{url('myinvestment')}}">Keranjang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('dalam_pembiayaan') ? 'active' : ''}}" href="{{url('dalam_pembiayaan')}}">Daftar Transaksi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('sedang_berjalan') ? 'active' : ''}}" href="{{url('sedang_berjalan')}}">Cek Pengiriman</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Request::is('') ? 'active' : ''}}" href="">Selesai</a>
    </li>
</ul>