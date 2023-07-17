<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('admin/img/sidebar-1.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
            Udemy
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashbord') ? 'active':'' }}  ">
                <a class="nav-link" href="{{ url('dashbord') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories','create-category') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('categories') }}">
                    <i class="material-icons">people</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('sub-category','add-subcategory') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('sub-category') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Sub Category</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('teachers','add-teachers') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('teachers') }}">
                    <i class="material-icons">people</i>
                    <p>Teachers</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('videos','videos/create') ? 'active':'' }}">
                <a class="nav-link" href="{{ route('videos.index') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Videos</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="material-icons">persons</i>
                    <p>Users Dashboard</p>
                </a>
            </li>
        </ul>
    </div>
</div>
