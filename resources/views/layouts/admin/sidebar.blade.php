<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Utama</li>

        <li class="sidebar-item {{ request()->is('admin') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-title">Kelola Product</li>

        <li class="sidebar-item {{ request()->is('admin/product') ? 'active' : '' }}">
            <a href="{{ route('product.index') }}" class='sidebar-link'>
                <i class="bi bi-box2-fill"></i>
                <span>List Product</span>
            </a>
        </li>

        <li class="sidebar-item {{ request()->is('admin/product/create') ? 'active' : '' }}">
            <a href="{{ route('product.create') }}" class='sidebar-link'>
                <i class="bi bi-box-arrow-in-up"></i>
                <span>Tambah Product</span>
            </a>
        </li>
    </ul>
</div>
