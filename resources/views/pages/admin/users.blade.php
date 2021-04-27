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
                    <a class="nav-link text-dark ml-3" href="{{ route('reward') }}">
                        <i class="fas fa-award"></i> <span class="ml-4">Reward</span>
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
            <h4 class="mt-4 mb-4">Users</h4>
            <a  href=""
                class="btn btn-info mb-3"
                data-toggle="modal" 
                data-target="#addUser">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
            <div class="" style="overflow-x:auto;">
                <table class="table table-hover table-striped">
                    <thead class="header-colors">
                        <tr>
                            <th class="text-white">#</th>
                            <th class="text-white">ID Member</th>
                            <th class="text-white">Nama Lengkap</th>
                            <th class="text-white">Alamat Lengkap</th>
                            <th class="text-white">Package</th>
                            <th class="text-white">Details</th>
                            <th class="text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($user) !=0)
                        @php
                            $i =3;
                        @endphp
                        @foreach ($user as $u =>$k)
                        <tr>
                            <td>{{ $i + ($user->currentPage()-1) * $user->perPage() }}</td>
                            <td>{{ $k['id'] }}</td>
                            <td>{{ $k['name'] }}</td>
                            <td>{{ $k['address'] }}</td>
                            @if ($k['Package']!=null)
                                <td>{{ $k['Package']['name'] }}</td>
                            @else
                            <td>-</td>
                            @endif
                           
                            <td>
                                <a  href=""
                                    data-toggle="collapse" 
                                    data-target="#demo{{ $i }}" 
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

                        {{-- Collapse  Details User--}}
                        <td colspan="12" style="background-color: #fff">
                            <div class="accordian-body collapse" id="demo{{ $i }}">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-lg-4 col-6 col-md-4">
                                            <div>Id Member</div>
                                            <div class="font-user">{{ $k['id'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4">
                                            <div>Nama Lengkap</div>
                                            <div class="font-user">{{ $k['name'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-0">
                                            <div>Alamat Lengkap</div>
                                            <div class="font-user">{{ $k['address'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>Email</div>
                                            <div class="font-user">{{ $k['email'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>No. Handphone</div>
                                            <div class="font-user">{{ $k['phone'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>No. ID Leader</div>
                                            <div class="font-user">{{ $k['leader_id'] }}</div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>Nama Leader</div>
                                            <div class="font-user"></div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>No Rekening</div>
                                            <div class="font-user"></div>
                                        </div>
            
                                        <div class="col-lg-4 col-6 col-md-4 mt-2 mt-lg-2">
                                            <div>No KTP</div>
                                            <div class="font-user"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                        {{-- END: Collapse Details Users --}}

                        @php
                            $i++;
                        @endphp
                        @endforeach
                        @endif
                
                    </tbody>
                        
				</table>

            </div>
            <div class="d-flex justify-content-end flex-row">
                {{ $user->links() }}
            </div>
            
        </div>
    </div>
    {{-- END: User Content --}}

    <!-- /#page-content-wrapper -->
@endsection

@section('modal')

{{-- Modal Tambah User  --}}
    <div    class="modal fade" 
            id="addUser" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-plus-circle"></i> Tambah User
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Id Member</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>
    
                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Nama Lengkap</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">ALamat Lengkap</label>
                            <textarea   class="form-control" 
                                        id=""
                                        name=""
                                        style="resize:none; height: 150px;">
                            </textarea>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Email</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Handphone</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Id Leader</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Nama Leader</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Rekening</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. KTP</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
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
{{-- End: Modal Tambah User  --}}

{{-- Modal Edit User --}}
    <div    class="modal fade" 
            id="editUser" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-marker"></i> Edit User
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="" method="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Id Member</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>
    
                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Nama Lengkap</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">ALamat Lengkap</label>
                            <textarea   class="form-control" 
                                        id=""
                                        name=""
                                        style="resize:none; height: 150px;">
                            </textarea>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Email</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Handphone</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Id Leader</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Nama Leader</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. Rekening</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">No. KTP</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name=""
                                    min="0">
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
{{-- End Edit Modal --}}

{{-- Modal Hapus User  --}}
<div class="modal fade" id="deleteUser" tabindex="-1" 
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div style="font-size: 20px;">Delete User ?</div>
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