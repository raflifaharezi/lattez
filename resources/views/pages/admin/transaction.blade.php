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

            <div class="collapse navbar-collapse bg-light mt-lg-0 mt-2" id="navbarSupportedContent">
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
            <h4 class="mt-4 mb-4">Order / Transaction</h4>
            <div class="" style="overflow-x:auto;">
                <table class="table table-hover table-striped">
                    <thead class="header-colors">
                        <tr>
                            <th class="text-white">Foto Produk</th>
                            <th class="text-white">Nama Produk</th>
                            <th class="text-white">Tanggal Transaksi</th>
                            <th class="text-white">Status</th>
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
                            <td class="text-success">Paid</td>
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
                                    data-target="#editTransaction">
                                    <i class="fas fa-marker"></i>
                                </a>

                                <button type="button" 
                                        class="btn btn-danger btn-sm ml-lg-1 mt-lg-0 mt-2" 
                                        data-toggle="modal" 
                                        data-target="#deleteTransaction">
                                        <i class="fas fa-eraser"></i>
                                </button>
                            </td>
                        </tr>

                        {{-- Collapse  Order / Transaction --}}
                        <td colspan="12" style="background-color: #fff">
                            <div class="accordian-body collapse" id="demo1">
                                <div class="card card-body">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                                            <img    src="{{ asset('images/lattez-1.jpg') }}" 
                                                    alt="" 
                                                    class="foto-transaction"
                                                    style="width: 140px; height:140px;">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-8">
                                            <div class="row ml-lg-3 ml-md-3">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                    <div>Nama Pembeli</div>
                                                    <div class="font-user">Lattez</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                                    <div>ID Member</div>
                                                    <div class="font-user">IDS823823749</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-1">
                                                    <div>No. Handphone</div>
                                                    <div class="font-user">08783824893</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-lg-4 mt-md-4 mt-1">
                                                    <div>Status</div>
                                                    <div class="font-user text-success">Paid</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-lg-4 mt-md-4 mt-1">
                                                    <div>Quantity</div>
                                                    <div class="font-user">1</div>
                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-lg-4 mt-md-4 mt-1">
                                                    <div>Total Amount</div>
                                                    <div class="font-user">Rp. 75.000</div>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="col-lg-12 mt-lg-3 mt-sm-3 mt-md-3 mt-3 text-dark">
                                            Details Checkout
                                        </h5>

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <div>Alamat Lengkap</div>
                                            <div class="font-user">Cibinong</div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div>Provinsi</div>
                                            <div class="font-user">Jawa Barat</div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-4 col-sm-4 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                                            <div>Kota / Kab</div>
                                            <div class="font-user">Cibinong</div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-8 col-sm-8 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                                            <div>Kelurahan</div>
                                            <div>Jawa Barat</div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-4 col-sm-4 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                                            <div>Kelurahan</div>
                                            <div class="font-user">Pakansari</div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-8 col-sm-8 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                                            <div>Kode Pos</div>
                                            <div class="font-user">16915</div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-4 col-8 col-sm-4 mt-lg-3 mt-md-3 mt-sm-3 mt-2">
                                            <form action="" method="">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Paid</option>
                                                        <option value="">Unpaid</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-success" type="submit">
                                                    Input
                                                </button>
                                            </form>
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

@section('modal')

    {{-- Modal Edit Transactiopn --}}
    <div    class="modal fade" 
            id="editTransaction" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-marker"></i> Edit Transaction
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
                            <label for="" class="col-form-label">Nama Pembeli</label>
                            <input  type="text" 
                                    class="form-control" 
                                    id=""
                                    name="">
                        </div>
    
                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">ID Member</label>
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
                            <label for="" class="col-form-label">Quantity</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    min="0"
                                    name=""
                                    onchange="quantityTransaction(this.value)"
                            >
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Total Amount</label>
                            <input type="hidden" id="quantity_js"/>
                            <input id="total_amount" class="form-control" readonly>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">ALamat Lengkap</label>
                            <textarea   class="form-control" 
                                        id=""
                                        name="">
                            </textarea>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Provinsi</label>
                            <select name="province" id="province" class="form-control">
                                @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Kota / Kab</label>
                            <select name="" id="city" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">Kelurahan</label>
                            <select name="" id="district" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="" class="col-form-label">kode Pos</label>
                            <input  type="number" 
                                    class="form-control" 
                                    id=""
                                    name="">
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

    {{-- Modal Hapus Transaction  --}}
    <div class="modal fade" id="deleteTransaction" tabindex="-1" 
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div style="font-size: 20px;">Delete Transaction ?</div>
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

@push('script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    // function region laravolt indonesia
    $(function () {
    $('#province').on('change', function () {
        axios.post('{{ route('region-city') }}', {id: $(this).val()})
            .then(function (response) {
                $('#city').empty();

                $.each(response.data, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            });
    });

    $('#city').on('change', function () {
        axios.post('{{ route('region-district') }}', {id: $(this).val()})
            .then(function (response) {
                $('#district').empty();

                $.each(response.data, function (id, name) {
                    $('#district').append(new Option(name, id))
                })
            });
    });

    $('#district').on('change', function () {
        axios.post('{{ route('region-village') }}', {id: $(this).val()})
            .then(function (response) {
                $('#village').empty();

                $.each(response.data, function (id, name) {
                    $('#village').append(new Option(name, id))
                })
            });
    });


});
</script>

<script>
    function quantityTransaction(val) {
        var quantity_first = $('#quantity_js').val();
        console.log(quantity_first);
        var total_price = val * 75000  ;
        /*display the result*/
        var divobj = document.getElementById('total_amount');
        divobj.value = total_price;
    }
</script>
@endpush