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

            <div class="collapse navbar-collapse bg-light mt-lg-0 mt-2" id="navbarSupportedContent">
            <ul class="navbar-nav mt-lg-0 ml-auto">

<!-- /#sidebar-wrapper -->

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
            <h4 class="mt-4 mb-4">Reward</h4>
            <a  href=""
                class="btn btn-info mb-3"
                data-toggle="modal" 
                data-target="#addProduct">
                <i class="fas fa-plus-circle"></i> Tambah
            </a>
            @if(session('add_success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('add_success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session('edit_success'))
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    {{ session('edit_success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if(session('delete_success'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ session('delete_success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="" style="overflow-x:auto;">
                <table class="table table-hover table-striped" >
                    <thead class="header-colors">
                        <tr>
                            <th class="text-white">#</th>
                            <th class="text-white">Foto Reward</th>
                            <th class="text-white">Reward</th>
                            <th class="text-white">Sales</th>
                            <th class="text-white">Reward Quantity</th>
                            <th class="text-white">Package</th>
                            <th class="text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="table-rewards">
                        @if(count($reward) !=0)
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($reward as $r => $k)
                        <tr>
                            <td>{{ $i + ($reward->currentPage()-1) * $reward->perPage() }}</td>
                            <td>
                                <img src="{{asset('img/reward/'.$k->img_path) }}" 
                                    alt=""
                                    style="width: 40px; height:40px;">
                            </td>
                            <td>{{ $k['name'] }}</td>
                            <td>{{ $k['sales'] }}</td>
                            <td>{{ $k['reward_quantity'] }}</td>
                            <td>{{ $k['Package']['name'] }}</td>
                            <td>
                                <a  href="" 
                                    class="btn btn-sm btn-warning edit-reward"
                                    data-toggle="modal" 
                                    id="editReward"
                                    data-target="#editProduct"
                                    data-id = {{ $k['id'] }}
                                    >
                                    <i class="fas fa-marker"></i>
                                </a>
                                {{-- <input type="text" value="{{ $k['id'] }}" id="id-for-delete">s --}}
                                <button type="button" 
                                        class="btn btn-danger btn-delete btn-sm ml-lg-1 mt-lg-0 mt-2" 
                                        data-toggle="modal" 
                                        data-target="#deleteProduct{{ $k['id'] }}">
                                        <i class="fas fa-eraser"></i>
                                </button>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end flex-row">
                {{ $reward->links() }}
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    

@endsection

@section('modal')

   <div id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  class="modal fade" 
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
                    <form action="{{ route('reward.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Course Id</label>
                                <input type=text id="id" name=id required>
                            </div>
        
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Enter Course Name</label>
                                <input type=text id="name" name=name required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Enter Course Duration <small> (In hours)</small> </label>
                                <input type=text id="duration" name=duration value="" required >
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1">Date </label>
                                <input type=text id="date" name=date value="" required >
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
                    <form action="{{ route('reward.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Foto Reward</label>
                                <input  type="file" 
                                        class="form-control" 
                                        id="addPhoto"
                                        name="img_path">
                            </div>
        
                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Reward</label>
                                <input  type="text" 
                                        class="form-control" 
                                        id="addName"
                                        name="name">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Sales</label>
                                <input  type="number" 
                                        class="form-control" 
                                        id="addSales"
                                        name="sales">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Reward Quantity</label>
                                <input  type="number" 
                                        class="form-control" 
                                        id="addRewardQuantity"
                                        name="reward_quantity"
                                        min="0">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="" class="col-form-label">Kategori</label>
                                <select name="package_id" id="addPackage" class="form-control">
                                    @foreach ($package as $v)
                                        <option value="{{ $v['id'] }}">{{ $v['name'] }}</option>
                                    @endforeach
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

    {{-- @foreach ($reward as $i) --}}
        <div    class="modal fade reward-product" 
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
                        <form action="{{ route('admin.reward.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="" name="id" id="editId">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="" class="col-form-label">Foto Reward</label>
                                    <input  type="file" 
                                            class="form-control" 
                                            id="edit-Photo"
                                            name="img_path">
                                </div>

                                <div class="form-group col-lg-12">
                                    <label for="" class="col-form-label">Reward</label>
                                    <input  type="text" 
                                            class="form-control" 
                                            id="name-reward"
                                            value=""
                                            name="name">
                                </div>

                                <div class="form-group col-lg-12">
                                    <label for="" class="col-form-label">Sales</label>
                                    <input  type="number"       
                                            class="form-control" 
                                            id="sales"
                                            name="sales">
                                </div>

                                <div class="form-group col-lg-12">
                                    <label for="" class="col-form-label">Reward Quantity</label>
                                    <input  type="number" 
                                            class="form-control" 
                                            id="edit-RewardQuantity"
                                            name="reward_quantity"
                                            min="0">
                                </div>

                                <div class="form-group col-lg-12">
                                    <label for="" class="col-form-label">Kategori</label>
                                    <select name="package_id" id="edit-package" class="form-control">
                                        @foreach ($package as $v)
                                            <option class="edit-reward-option" value="{{ $v['id'] }}" id="reward{{ $v['id'] }}">{{ $v['name'] }}</option>
                                        @endforeach
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
    {{-- @endforeach --}}
  
{{-- End: Modal Edit Produk --}}

{{-- Modal Hapus produk  --}}
@foreach ($reward as $k)
<div class="modal fade" id="deleteProduct{{ $k['id'] }}" tabindex="-1" 
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
                <p class="">Hapus product dengan Nama : <span class="font-weight-bold">{{ $k['name'] }}</span></p>
                <form action="{{ route('admin.reward.delete', $k->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
        crossorigin="anonymous">
</script>
<script>
    $(document).ready(function(){
        $('.edit-reward').click(function(){
            let id = $(this).data('id');
            // alert(id)
            let iconIndex = $(this).parent().parent().index()+1;
            // alert('oke');
            let name =  $('#table-rewards tr:nth-child('+iconIndex+') td:nth-child(3)').text();
            let sales =  $('#table-rewards tr:nth-child('+iconIndex+') td:nth-child(4)').text();
            let rewardQuantity =  $('#table-rewards tr:nth-child('+iconIndex+') td:nth-child(5)').text();
            let package =  $('#table-rewards tr:nth-child('+iconIndex+') td:nth-child(6)').text();
            let EditPackageGold = $('#edit-package option:nth-child(1)').text();
            let EditPackagePlatinum = $('#edit-package option:nth-child(2)').text();
            if(package === $('#edit-package option:nth-child(1)').text()){
                // alert('ok')
                $('#edit-package option:nth-child(1)').attr('selected', 'selected');
                $('#edit-package option:nth-child(2)').removeAttr('selected');
                // console.log(package);
            }
            if(package === $('#edit-package option:nth-child(2)').text()){
                // alert('ok')
                $('#edit-package option:nth-child(2)').attr('selected', 'selected');
                $('#edit-package option:nth-child(1)').removeAttr('selected');
                // console.log(package);
            }
            // if(package === $('#edit-package option:nth-child(1)').text(){
            //     $('#edit-package option:nth-child(2)').attr('selected');
            // }
            // alert(package);
           
            $('#editId').val(id);
            $('#name-reward').val(name);
            $('#sales').val(sales);
            $('#edit-RewardQuantity').val(rewardQuantity);

            // $('#edit-package').val(package);
            // $('select[name=package_id] option').filter(':selected').val();
            
            // $('#edit-package option').each(function() {
            // if($(this).val() == package) {
            //     $(this).prop("selected", true);
            // }
        });
    });
</script>

@endsection
@push('after-script')



@endpush