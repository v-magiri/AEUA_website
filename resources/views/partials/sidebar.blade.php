<div class="sidebar">
    <div class="logo">
        <span></span>
    </div>
    <ul class="menu">
        <li class="{{ request()->routeIs('dashboard/*') ? 'active':'' }}">
            <a href="{{url('dashboard')}}">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('member*') ? 'active':'' }}">
            <a href="{{url('members')}}">
                <i class="fa-solid fa-users"></i>
                <span>Members</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('event*') ? 'active':'' }}">
            <a href="{{url('events')}}">
                <i class="fa-solid fa-calendar"></i>
                <span>Events</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('newsletter*') ? 'active':'' }}">
            <a href="{{url('newsletter')}}">
                <i class="fa-solid fa-square-rss"></i>
                <span>Newsletters</span>
            </a>
        </li>
        <li class="logout">
            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
