@extends('layouts.admin')

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-color">
            <button class="navbar-toggler ml-auto hamburger-color" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-lg-0 mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav mt-lg-0 ml-auto">

<!-- /#sidebar-wrapper -->

                {{-- List Mobile --}}
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('user') }}">
                        <i class="fas fa-user-circle"></i> <span class="ml-4">User</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('product') }}">
                        <i class="fas fa-tags"></i> <span class="side-produk">Produk</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('transaction') }}">
                        <i class="fas fa-chart-bar"></i> <span class="side-order">Order / Transaction</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="{{ route('rewards') }}">
                        <i class="fas fa-award"></i> <span class="ml-4">Reward</span>
                    </a>
                </li>
                <li class="nav-item d-lg-none d-md-block d-block">
                    <a class="nav-link text-dark ml-3" href="#">
                        <i class="fas fa-sign-out-alt"></i> <span class="side-logout">Logout</span>
                    </a>
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
            <h4 class="mt-4 mb-4">Reward</h4>
            <a  href=""
                class="btn btn-info mb-3"
                data-toggle="modal" 
                data-target="#addProduct">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
            <div class="" style="overflow-x:auto;">
                <table class="table table-hover table-striped" >
                    <thead class="header-colors">
                        <tr>
                            <th class="text-white">#</th>
                            <th class="text-white">Foto Reward</th>
                            <th class="text-white">Reward</th>
                            <th class="text-white">Unit</th>
                            <th class="text-white">Kategori Reward</th>
                            <th class="text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img    src="{{ asset('images/lattez-1.jpg') }}" 
                                        alt=""
                                        style="width: 40px; height:40px;">
                            </td>
                            <td>Paket Umroh</td>
                            <td>8</td>
                            <td>Gold</td>
                            <td>
                                <a  href="" 
                                    class="btn btn-sm btn-warning"
                                    data-toggle="modal" 
                                    data-target="#editProduct">
                                    <i class="fas fa-marker"></i>
                                </a>

                                <button type="button" 
                                        class="btn btn-danger btn-sm ml-lg-1 mt-lg-0 mt-2" 
                                        data-toggle="modal" 
                                        data-target="#deleteProduct">
                                        <i class="fas fa-eraser"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

@endsection

@section('modal')

{{-- Modal Tambah Produk --}}
    <div    class="modal fade" 
            id="addProduct" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-plus-circle"></i> Tambah Reward
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Foto Reward</label>
                                <input  type="file" 
                                        class="form-control" 
                                        id=""
                                        name="">
                            </div>
        
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Reward</label>
                                <input  type="text" 
                                        class="form-control" 
                                        id=""
                                        name="">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Unit</label>
                                <input  type="number" 
                                        class="form-control" 
                                        id=""
                                        name=""
                                        min="0">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Kategori</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Gold</option>
                                    <option value="">Platinum</option>
                                </select>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
{{-- End: Modal Tambah Produk --}}

{{-- Start: Modal Edit Produk --}}
    <div    class="modal fade" 
            id="editProduct" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-marker"></i> Edit Reward
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Foto Reward</label>
                                <input  type="file" 
                                        class="form-control" 
                                        id=""
                                        name="">
                            </div>
        
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Reward</label>
                                <input  type="text" 
                                        class="form-control" 
                                        id=""
                                        name="">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Unit</label>
                                <input  type="number" 
                                        class="form-control" 
                                        id=""
                                        name=""
                                        min="0">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Deskripsi Produk</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Gold</option>
                                    <option value="">Platinum</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
{{-- End: Modal Edit Produk --}}

{{-- Modal Hapus produk  --}}
<div class="modal fade" id="deleteProduct" tabindex="-1" 
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div style="font-size: 20px;">Delete Reward ?</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection