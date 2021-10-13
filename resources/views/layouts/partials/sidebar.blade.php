<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('author.index') }}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
        <li><a href="{{ route('book.index') }}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
        <li><a href="{{ route('borrow.index') }}"><i class="fa fa-book"></i> <span>Data Peminjaman</span></a></li>
        <li><a href="{{ route('report') }}"><i class="fa fa-book"></i> <span>Laporan Buku</span></a></li>
        <li><a href="{{ route('report.user') }}"><i class="fa fa-book"></i> <span>Laporan Pengguna</span></a></li>
        <li><a href="#"><i class="fa fa-users"></i> <span>User</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>