<div class="sidebar">
    <div class="logo">
        <span></span>
    </div>
    <ul class="menu">
        <li class="{{ request()->routeIs('dashboard*') ? 'active':'' }}">
            <a href="{{url('dashboard')}}">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('*member*') ? 'active':'' }}">
            <a href="{{url('admin/members')}}">
                <i class="fa-solid fa-users"></i>
                <span>Members</span>
            </a>
        </li>
        <li class="{{ Request::is('*event*') ? 'active':'' }}">
            <a href="{{url('admin/events')}}">
                <i class="fa-solid fa-calendar"></i>
                <span>Events</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('*newsletter*') ? 'active':'' }}">
            <a href="{{url('admin/newsletter')}}">
                <i class="fa-solid fa-square-rss"></i>
                <span>Newsletters</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('*inquiries*') ? 'active':'' }}">
            <a href="{{url('admin/inquiries')}}">
                <i class="fa-solid fa-message"></i>
                <span>Inquiries</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('*concerns*') ? 'active':'' }}">
            <a href="{{url('admin/concerns')}}">
                <i class="fa-solid fa-circle-question"></i>
                <span>Questions</span>
            </a>
        </li>
        <li class="logout">
            <a href="{{route('logout')}}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
</div>
