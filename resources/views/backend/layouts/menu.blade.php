<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}"
       class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.posts.index') }}"
       class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.users.index') }}"
       class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


