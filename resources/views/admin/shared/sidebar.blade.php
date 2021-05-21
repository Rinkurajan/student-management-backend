<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link  @if(Request::Url() === route('admin.dashboard')) active @endif">
                        <i class="fas fa-chart-line"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.student.index')}}" class="nav-link @if((request()->is('admin/student*'))) active @endif">
                        <i class="fas fa-users"></i>
                        <p>Students</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.mark.index')}}" class="nav-link @if((request()->is('admin/mark*'))) active @endif">
                        <i class="fas fa-user"></i>
                        <p>Student Marks</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>