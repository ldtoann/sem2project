<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Main Menu <sup>2</sup></div>
    </a>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.users.index') }}" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-cog"></i>
            <span>Users</span>
        </a>
        <div id="collapseUser" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.users.index') }}">All</a>
                <a class="collapse-item" href="{{ route('admin.users.create') }}">Create</a>
            </div>
        </div>
    </li>
     <!--Product -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Products</span>
        </a>
        <div id="collapseProduct" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.products.index') }}">All</a>
                <a class="collapse-item" href="{{ route('admin.products.create') }}">Create</a>
            </div>
        </div>
    </li>
    <!-- Categories -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">All</a>
                <a class="collapse-item" href="{{ route('admin.categories.create') }}">Create</a>
            </div>
        </div>
    </li>
   <!-- Order -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Order</span>
        </a>
        <div id="collapseCategory" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.orders.index') }}">All</a>
                <a class="collapse-item" href="{{ route('admin.orders.create') }}">Create</a>
            </div>
        </div>
    </li>
</ul>