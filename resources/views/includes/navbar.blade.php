<nav class="navbar navbar-expand-lg navbar-light nav-header bg-lattez fixed-top">
    <div class="container">
        <a class="navbar-brand text-white px-3 py-2 rounded-lg" style="background: #0e9b96;" href="{{ route('orders') }}"><img src="{{ asset('images/logo-white.svg') }}"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link textgrey" href="{{ route('sales') }}">Sales & Bonus <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textgrey" href="{{ route('transaction-history') }}">History Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textgrey" href="{{ route('orders') }}">Order</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link textgrey dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="/logout" method="POST">
                            @csrf
                            <div class="dropdown-divider"></div>
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>