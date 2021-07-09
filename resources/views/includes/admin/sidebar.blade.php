<!-- Sidebar -->
<div class=" border- d-none d-lg-block col-md-3" id="sidebar-wrapper">
    <div class="sidebar-heading text-center mt-2">
        <img src="{{ asset('images/logo-white.svg') }}" alt="">
    </div>
    <div class="list-group list-group-flush mt-4" >
        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action link-bg side-user {{ Request::is('c/admin/dashboard')? "active":"" }}">
            <i class="fas fa-border-all"></i>
            <span class="ml-4">Dashboard</span>
        </a>
        <a href="{{ route('user') }}" class="list-group-item list-group-item-action link-bg side-user {{ Request::is('c/admin/user')? "active":"" }}">
            <i class="fas fa-user-circle"></i>
            <span class="ml-4">User</span>
        </a>
        <a href="{{ route('product') }}" class="list-group-item list-group-item-action link-bg {{ Request::is('c/admin/product')? "active":"" }}">
            <i class="fas fa-tags"></i>
            <span class="side-produk">Produk</span>
        </a>
        <a href="{{ route('transaction') }}" class="list-group-item list-group-item-action link-bg {{ Request::is('c/admin/transaction')? "active":"" }}">
            <i class="fas fa-chart-bar"></i> 
            <span class="side-order">Order / Transaction</span>
        </a>
        <a href="{{ route('reward') }}" class="list-group-item list-group-item-action link-bg side-reward {{ Request::is('c/admin/reward')? "active":"" }}">
            <i class="fas fa-award"></i> 
            <span class="ml-4">Reward</span>
        </a>
        <form action="/logout" method="POST">
            @csrf
            <button class="list-group-item list-group-item-action link-bg" style="border: none;">
                <i class="fa fa-sign-out-alt"></i>
                <span class="side-logout">Logout</span>
            </button>
        </form>
    </div>
</div>
<!-- /#sidebar-wrapper -->