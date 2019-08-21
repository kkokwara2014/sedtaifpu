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

      {{-- contact area --}}
      <li class="treeview">
        <a href="{{ route('admin.contact.all') }}">
          <i class="fa fa-envelope-o"></i><span> Contact</span>
        </a>
      </li>

      {{-- Editor area --}}
      <li>
        <a href="{{ route('admin.editor.all') }}">
          <i class="fa fa-user"></i><span> Editor</span>
        </a>
      </li>

      {{-- submitted paper area --}}
      <li class="treeview">
      <a href="{{ route('admin.submittedpaper.all') }}">
          <i class="fa fa-file-pdf-o"></i>
          <span>Submitted Paper</span>
        </a>
      </li>

      {{-- future conference area --}}
      <li class="treeview">
      <a href="{{ route('admin.conference.all') }}">
          <i class="fa fa-bullhorn"></i>
          <span>Future Conference</span>
        </a>
      </li>

      <!-- the Admin links-->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Admins</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>