<div class="side-menu">
    <div class="logo">
        <div class="main-logo"><img src="{{asset('public/admin/images/logo.png')}}"></div>
    </div><!--End Logo-->
    <aside class="sidebar">
        <ul class="side-menu-links">
            <li class="{{request()->routeIs('admin.dashboard') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.dashboard')}}">Dashboard</a>
            </li>

            <li class="{{request()->routeIs('admin.home') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.home')}}">Home page</a>
            </li>

            <li class="{{request()->routeIs('admin.members') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.members')}}">Board members</a>
            </li>

            <li class="{{request()->routeIs('admin.about') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.about')}}">About us</a>
            </li>

            <li class="{{request()->routeIs('admin.products') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.products')}}">Products</a>
            </li>

            <li class="{{request()->routeIs('admin.branches') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.branches')}}">Agents</a>
            </li>

            <li class="{{request()->routeIs('admin.media') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.media')}}">Media</a>
            </li>

            <li class="{{request()->routeIs('admin.messages') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.messages')}}">Messages</a>
            </li>

            <li class="{{request()->routeIs('admin.competitions') ? 'active' : ''}}">
                <a rel="nofollow" rel="noreferrer" href="{{route('admin.competitions')}}">Competition</a>
            </li>

        </ul>
    </aside>
</div>