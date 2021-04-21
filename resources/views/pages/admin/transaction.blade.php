@extends('layouts.admin')

@section('content')
     <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="navbar-toggler ml-auto" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav mt-lg-0 ml-auto">

                {{-- List Mobile --}}
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-4" href="#">User</a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-4" href="#">Product</a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-4" href="#">Order</a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-4" href="#">Reward</a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-4" href="#">Logout</a>
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
            <h4 class="mt-4 mb-4">Order / Transaction</h4>
            <div class="" style="overflow-x:auto;">
                <table class="table table-hover table-striped">
                    <thead class="header-colors">
                        <tr>
                            <th class="text-white">Foto Produk</th>
                            <th class="text-white">Nama Produk</th>
                            <th class="text-white">Tanggal Transaksi</th>
                            <th class="text-white">Details</th>
                            <th class="text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img    src="{{ asset('images/lattez-1.jpg') }}" 
                                        alt=""
                                        style="width: 40px; height:40px;">
                            </td>
                            <td>Lattez</td>
                            <td>30 April 2021</td>
                            <td>
                                <a  href=""
                                    data-toggle="collapse" 
                                    data-target="#demo1" 
                                    class="accordion-toggle">
                                    <div class="rounded-circle text-white p-2 bg-primary d-flex align-items-center justify-content-center" style="width: 20px; height:20px;">
                                        i
                                    </div>
                                </a>
                            
                            </td>
                            <td>
                                <a  href="" 
                                    class="btn btn-sm btn-warning"
                                    data-toggle="modal" 
                                    data-target="#editUser">
                                    <i class="fas fa-marker"></i>
                                </a>

                                <button type="button" 
                                        class="btn btn-danger btn-sm ml-lg-1 mt-lg-0 mt-2" 
                                        data-toggle="modal" 
                                        data-target="#deleteUser">
                                        <i class="fas fa-eraser"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Collapse  Order / Transaction --}}
                        <td colspan="12" style="background-color: #fff">
                            <div class="accordian-body collapse" id="demo1">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                            <img    src="{{ asset('images/lattez-1.jpg') }}" 
                                                    alt="" 
                                                    class="foto-transaction"
                                                    style="width: 150px; height:150px;">
                                        </div>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="row ml-lg-3 ml-md-2">
                                                <div class="col-lg-4 col-md-4">
                                                    <div>Nama Pembeli</div>
                                                    <div class="font-user">Lattez</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div>ID Member</div>
                                                    <div class="font-user">IDS823823749</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div>No. Handphone</div>
                                                    <div class="font-user">08783824893</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 mt-lg-4 mt-md-4">
                                                    <div>Tanggal Transaksi</div>
                                                    <div class="font-user">30 April 2021</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 mt-lg-4 mt-md-4">
                                                    <div>Quantity</div>
                                                    <div class="font-user">1</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 mt-lg-4 mt-md-4">
                                                    <div>Total Amount</div>
                                                    <div class="font-user">Rp. 75.000</div>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="col-lg-12 mt-lg-3 text-dark">
                                            Details Checkout
                                        </h5>

                                        <div class="col-lg-4">
                                            <div>Alamat Lengkap</div>
                                            <div class="font-user">Cibinong</div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div>Provinsi</div>
                                            <div class="font-user">Jawa Barat</div>
                                        </div>

                                        <div class="col-lg-4 mt-lg-3">
                                            <div>Kota / Kab</div>
                                            <div class="font-user">Cibinong</div>
                                        </div>

                                        <div class="col-lg-8 mt-lg-3">
                                            <div>Kelurahan</div>
                                            <div>Jawa Barat</div>
                                        </div>

                                        <div class="col-lg-4 mt-lg-3">
                                            <div>Kelurahan</div>
                                            <div class="font-user">Pakansari</div>
                                        </div>

                                        <div class="col-lg-8 mt-lg-3">
                                            <div>Kode Pos</div>
                                            <div class="font-user">16915</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- END: Collapse Order / Transaction --}}

                        {{-- Collapse  Order / Transaction --}}
                        <td colspan="12" style="background-color: #fff">
                            <div class="accordian-body collapse" id="transaction">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-6">
                                            <div>Id Member</div>
                                            <div class="font-user">CD1412616</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6">
                                            <div>Nama Lengkap</div>
                                            <div class="font-user">Mark</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-0">
                                            <div>Alamat Lengkap</div>
                                            <div class="font-user">Cibinong</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>Email</div>
                                            <div class="font-user">mark@gmail.com</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>No. Handphone</div>
                                            <div class="font-user">0874849494</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>No. Leader</div>
                                            <div class="font-user">LTZ3039</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>Nama Leader</div>
                                            <div class="font-user">Lattez</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>No Rekening</div>
                                            <div class="font-user">2165216571</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 mt-2 mt-lg-2">
                                            <div>No KTP</div>
                                            <div class="font-user">2165216571</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- END: Collapse Details Users --}}

                    </tbody>
                        
				</table>

            </div>
        </div>


    </div>
    <!-- /#page-content-wrapper -->
@endsection