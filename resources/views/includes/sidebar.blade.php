  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ Request::path() == 'dashboard' ? 'active' : '' }}"><a href="dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span></a></li>


        <!--  USERS  -->
        <li class="{{ Request::path() == 'users' ? 'active' : '' }}">
          <a href="{{ route('user.index') }}"><i class="fa fa-user"></i> Users</a>
        </li>

        <li class="{{ Request::path() == 'mahasiswas' ? 'active' : '' }}"><a href="mahasiswas"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>Mahasiswa</span></a></li>


      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>