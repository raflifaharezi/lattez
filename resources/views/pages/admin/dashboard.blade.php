@extends('layouts.admin')

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-color">
            <a class="navbar-brand d-lg-none d-block" href="#">
                <img src="{{ asset('images/logo-white.svg') }}" alt="">
            </a>
            <button class="navbar-toggler ml-auto hamburger-color" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-lg-0 bg-light mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav mt-lg-0 ml-auto">

                {{-- List Mobile --}}
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('dashboard') }}">
                        <i class="fas fa-border-all"></i>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('user') }}">
                        <i class="fas fa-user-circle"></i> 
                        <span class="ml-4">User</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('product') }}">
                        <i class="fas fa-tags"></i> 
                        <span class="side-produk">Produk</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('transaction') }}">
                        <i class="fas fa-chart-bar"></i> 
                        <span class="side-order">Order / Transaction</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('reward') }}">
                        <i class="fas fa-award"></i> 
                        <span class="ml-4">Reward</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="nav-link text-dark ml-3" href="#" style="border: none;">
                            <i class="fas fa-sign-out-alt"></i> 
                            <span class="side-logout">Logout</span>
                        </button>
                    </form>
                </li>
                {{-- End List Mobile  --}}

                <li class="nav-item dropdown d-none d-lg-block d-md-none">
                    <a  class="nav-link " 
                        href="#" 
                        id="navbarDropdown" 
                        role="button" 
                        data-toggle="dropdown" 
                        aria-haspopup="false" 
                        aria-expanded="false">
                        <i class="fas fa-user-circle fa-2x icon-user"></i>
                    </a>
                <div class="dropdown-menu dropdown-menu-right" 
                    aria-labelledby="navbarDropdown">
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
                </li>
            </ul>
            </div>
        </nav>

        {{-- Content  --}}
            <div class="container-fluid">
                <h4 class="mt-4">Dashboard</h4>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card border-0 d-flex flex-row align-items-center bg-dark p-0" style="height: 110px;">
                            <div class="m-0 p-0 h-100 rounded-lg" style="background: rgb(44, 44, 44);">
                                <div class="d-flex flex-row justify-content-center align-items-center h-100" style="width: 100px;">
                                    <i class="fas fa-chart-bar fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="ml-3 p-1">
                                <h3 class="text-white font-weight-bold">40</h3>
                                <p class="mb-0 text-white">Total Transaction</p>
                            </div>
                        </div>
                    </div>

                        <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-sm-0 mt-2">
                            <div class="card border-0 d-flex flex-row align-items-center bg-info p-0" style="height: 110px;">
                                <div class="m-0 p-0 h-100 rounded-lg" style="background: #278cb4">
                                    <div class="d-flex flex-row justify-content-center align-items-center h-100" style="width: 100px;">
                                        <i class="fas fa-user-circle text-white fa-3x"></i>
                                    </div>
                                </div>
                                <div class="ml-3 p-1">
                                    <h3 class="text-white font-weight-bold count">{{ $user }}</h3>
                                    <p class="mb-0 text-white">Total Users</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12 mt-lg-0 mt-2">
                            <div class="card d-flex flex-row align-items-center bg-success p-0" style="height: 110px;">
                                <div class="m-0 p-0 h-100 rounded-lg" style="background: rgb(28, 156, 28);">
                                    <div class="d-flex flex-row justify-content-center align-items-center h-100" style="width: 100px;">
                                        <i class="fas fa-award text-white fa-3x"></i> 
                                    </div>
                                </div>
                                <div class="ml-3 p-1">
                                    <h3 class="text-white font-weight-bold count">{{ $reward }}</h3>
                                    <p class="mb-0 text-white">Total Rewards</p>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
                {{-- END: User Content --}}
                
            </div>
    <!-- /#page-content-wrapper -->
@endsection