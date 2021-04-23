<!-- Sidebar -->
<div class=" border- d-none d-lg-block col-md-3" id="sidebar-wrapper">
    <div class="sidebar-heading text-center mt-2">
        <img src="{{ asset('images/logo-white.svg') }}" alt="">
    </div>
    <div class="list-group list-group-flush mt-4 ">
        <a href="{{ route('user') }}" class="list-group-item list-group-item-action link-bg side-user">
            <i class="fas fa-user-circle"></i>
            <span class="ml-4">User</span>
        </a>
        <a href="{{ route('product') }}" class="list-group-item list-group-item-action link-bg">
            <i class="fas fa-tags"></i>
            <span class="side-produk">Produk</span>
        </a>
        <a href="{{ route('transaction') }}" class="list-group-item list-group-item-action link-bg">
            <i class="fas fa-chart-bar"></i> 
            <span class="side-order">Order / Transaction</span>
        </a>
        <a href="{{ route('rewards') }}" class="list-group-item list-group-item-action link-bg side-reward">
            <i class="fas fa-award"></i> 
            <span class="ml-4">Reward</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action link-bg ">
            <i class="fas fa-sign-out-alt"></i>
            <span class="side-logout">Logout</span>
        </a>
    </div>
</div>
<!-- /#sidebar-wrapper -->