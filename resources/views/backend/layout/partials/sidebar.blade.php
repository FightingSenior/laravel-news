<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('images/'.auth()->user()->photo) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">Điều hướng chính</li>
      <li>
        <a href="{{ url('/dashboard') }}">
          <i class="fa fa-dashboard"></i> 
          <span>Bảng điều khiển</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.category.index') }}">
          <i class="fa fa-th"></i> 
          <span>Danh mục</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.news.index') }}">
          <i class="fa fa-th"></i> 
          <span>Tin tức</span>
        </a>
      </li>

      <li class="header">Nhãn</li>
      <li>
        <a href="{{ route('admin.users.index') }}">
          <i class="fa fa-users"></i> 
          <span>Người dùng</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ route('admin.settings.index') }}">
          <i class="fa fa-gear text-red"></i> 
          <span>Cài đặt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('admin.menus.index') }}"><i class="fa fa-circle-o"></i> Menu</a></li>
        </ul>
      </li>

    </ul>
    
  </section>

</aside>