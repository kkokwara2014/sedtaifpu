<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ ucfirst(Auth::user()->name) }}</p>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      {{-- <li class="header">MAIN NAVIGATION</li> --}}
      <li class="active">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      {{-- Abstract area --}}
      <li>
        <a href="#">
          <i class="fa fa-file-pdf-o"></i><span> Abstracts</span>
        </a>
      </li>
      {{-- Full Paper area --}}
      <li>
        <a href="#">
          <i class="fa fa-newspaper-o"></i><span> Full Paper</span>
        </a>
      </li>
      {{-- contact area --}}
      <li>
        <a href="{{ route('admin.contact.all') }}">
          <i class="fa fa-envelope-o"></i><span> Contact</span>
        </a>
      </li>
      {{-- conference committee --}}
      <li>
        <a href="{{ route('admin.confcommittee.all') }}">
          <i class="fa fa-user-circle-o"></i><span> Conference Committee</span>
        </a>
      </li>
      {{-- Registration Area --}}
      <li>
        <a href="#">
          <i class="fa fa-users"></i><span> Registrations</span>
        </a>
      </li>
      {{-- Admin Area --}}
      <li>
        <a href="{{ route('admin.admins.all') }}">
          <i class="fa fa-user-plus"></i><span> Admins</span>
        </a>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>