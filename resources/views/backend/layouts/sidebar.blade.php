<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="https://avatars.dicebear.com/api/micah/programmer.svg"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3 bg-light">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('backend.layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
