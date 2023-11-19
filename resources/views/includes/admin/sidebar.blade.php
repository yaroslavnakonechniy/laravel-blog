<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{route('admin.posts.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Posts</p>
              <span class="badge badge-info right">  </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Category</p>
              <span class="badge badge-info right">  </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.tag.index')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Tag</p>
              <span class="badge badge-info right">  </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>