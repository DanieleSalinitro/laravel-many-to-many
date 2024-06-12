<nav id="sidebar" class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-white"><h2 class="p-2">
        <i class="fa-solid fa-square-rss"></i>Portfolio</h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i>Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white {{Route::currentRouteName() == 'admin.projects.index' ? 'active' : ''}}" href="{{route('admin.projects.index')}}"> <i class="fa-solid fa-newspaper fa-lg fa-fw"></i>Progetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.types.index' ? 'active' : ''}}" href="{{route('admin.types.index')}}"><i class="fa-solid fa-tag fa-lg fa-fw"></i>Tipologie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Route::currentRouteName() == 'admin.technologies.index' ? 'active' : ''}}" href="{{route('admin.technologies.index')}}"><i class="fa-solid fa-tag fa-lg fa-fw"></i>Tecnologie</a>

      </ul>
    </nav>