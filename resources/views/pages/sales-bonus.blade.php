    @extends('layouts.master')

    @section('title')
    Info Jaringan & Bonus
    @endsection

    @section('content')
    <header class="bg-light breadcrumb header-breadcrumb">
        <div class="container d-flex justify-content-start">
            <a href="" class="text-decoration-none text-dark ">
                <i class="fas fa-home"></i>
            </a>
            <span class="ml-2"> / </span>
            <p class="ml-2">Sales</p>
            <span class="ml-2"> / </span>
            <p class="ml-2 text-info">Pencarian Downline</p>
        </div>
    </header>

    <div class="container mt-2">
        <div class="row mt-2 mb-4">
            <div class="col-12">
                <div class="card-body card-member bg-dark w-100 text-white">
                    <div class="d-flex justify-content-start">
                        <div class="font-weight-bold container-info-member d-flex flex-row justify-content-between mr-3"><span>ID Member</span> <span>:</span></div>
                        <div class=" text-primary">{{ auth()->user()->id }}</div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="font-weight-bold container-info-member d-flex flex-row justify-content-between mr-3"><span>Nama Member</span> <span>:</span></div>
                        <div class="">{{ auth()->user()->name }}</div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="font-weight-bold container-info-member d-flex flex-row justify-content-between mr-3"><span>Paket Reward</span> <span>:</span></div>
                        <div class="">20-03-2021</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-3">

        <form action="{{ route('package.choose') }}" method="POST">
            @csrf
            <p class="">Paket Reward :</p>
            <div class="d-flex flex-row">
                <select name="" id="" class=" form-control" style="width: 400px;" @if($user['package_id'] != null) disabled @endif>
                    @if($user['package_id'] != null)
                        <option value="{{ $user['Package']['id'] }}">{{ $user['Package']['name'] }}</option>
                    @else 
                        @foreach ($package as $d)
                            <option value="{{ $d['id'] }}">{{ $d['name'] }}</option>
                        @endforeach
                    @endif
                </select>
                <button class="btn btn-light text-dark border">
                    Pilih
                </button>
            </div>
        </form>

    </div>

    <div class="container">
        <div class="row">
            @if($user['package_id'] != null)
            @foreach ($choosed_reward as $d)    
            <div class="col-md-6 col-lg-4 col-12 mt-3">
                <div class="card card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-info card-reward">
                            <img    src="{{ asset($d['img_path']) }}" 
                                    alt="" 
                                    class="image-reward"
                            >
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">{{ $d['reward_quantity'] }}<span> Unit</span></h3>
                        <p class="text-">{{ $d['name'] }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <div class="text-center container mt-5">
        <h5>Pencarian Downline</h5>
        <h5 class="mb-3">Bonus Month</h5>

    {{-- <form action="">
        @csrf --}}
        
        <div class="select-mont">
            <select name="" id="" class=" form-control">
                <option value="">Januari</option>
                <option value="">Februari</option>
                <option value="">Maret</option>
                <option value="">April</option>
                <option value="">Mei</option>
                <option value="">Juni</option>
                <option value="">Juli</option>
                <option value="">Agustus</option>
                <option value="">September</option>
                <option value="">Oktober</option>
                <option value="">November</option>
                <option value="">Desember</option>
            </select>
        </div>

        <div class="select-mont">
            <select name="" id="" class=" form-control">
                <option value="">2021</option>
                <option value="">2022</option>
                <option value="">2023</option>
                <option value="">2024</option>
                <option value="">2025</option>
                <option value="">2026</option>
                <option value="">2027</option>
                <option value="">2028</option>
                <option value="">2029</option>
                <option value="">2030</option>
            </select>
        </div>
        
        <button class="btn btn-downline btn-info">
            <i class="fas fa-arrow-right"></i> Cek Downline
        </button>


    {{-- </form> --}}
    </div>
    <div  class="container" id="container-jaringan">
        {{-- <div class="row">
            <button class="btn btn-downline btn-info btn-sm ml-3 mb-2">
                <i class="fas fa-file-import"></i> Import Excel
            </button>
            <div class="col-md-12" style="overflow-x:auto;">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr class="header-table">
                        <th scope="col">ID Member</th>
                        <th scope="col">Nama Member</th>
                        <th scope="col">Transaksi / Hari</th>
                        <th scope="col">Total Penjualan</th>
                        <th scope="col">Reward</th>
                        <th scope="col">Notifikasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">
                            <a href="" class="text-decoration-none">0018</a>
                        </th>
                        <td>Sit</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>Emas 1grm</td>
                        <td>
                            <div    class="notification bg-danger rounded-circle border-0 text-decoration-none" 
                                data-toggle="modal" 
                                data-target="#exampleModalCenter">
                                <i class="far fa-bell fa-2x notif"></i>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
    @endsection

    @section('modal')
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Notifikasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Penjualan 100 mendekati reward emas
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('after-script')
        <script>
            $('.btn-downline').click(function(){
                var cont = '';
                cont += '<div class="container" id="container-jaringan">';
                    cont += '<div class="row"> ';
                        cont += '<button class="btn btn-downline btn-info btn-sm ml-3 mb-2"> ';
                            cont += '<i class="fas fa-file-import"></i>Import Excel';
                        cont += '</button>';
                        cont += '<h4 class="ml-3">Info Jaringan </h4>';
                        cont +='<div class="col-md-12" style="overflow-x:auto;">';
                            cont +='<table class="table table-striped table-hover">';
                                cont +='<thead>'
                                    cont +='<tr class="header-table">';
                                        cont +='<th scope="col">ID Member</th>';
                                        cont +='<th scope="col">Nama Member</th>';
                                        cont +='<th scope="col">Transaksi / Hari</th>';
                                        cont +='<th scope="col">Total Penjualan</th>';
                                        cont +='<th scope="col">Reward</th>';
                                        cont +='<th scope="col">Notifikasi</th>';
                                    cont +='</tr>';
                                cont +='</thead>';

                                cont +='<tbody>';
                                    cont +='<tr>';
                                        cont +='<th scope="row"> <a href="" class="text-decoration-none">0018</a> </th> ';
                                        cont +='<td>Sit</td>';
                                        cont +='<td>100</td>';
                                        cont +='<td>1000</td>';
                                        cont +='<td>Emas 1grm</td>';
                                        cont +='<td>';
                                            cont +='<div class="notification bg-danger rounded-circle border-0 text-decoration-none" data-toggle="modal" data-target="#exampleModalCenter">';
                                                cont +='<i class="far fa-bell fa-2x notif"></i>';
                                            cont +='</div>';
                                        cont +='</td>';
                                    cont +='</tr>';
                                cont +='</tbody>';
                            cont +='</table>';
                        cont +='</div>';

                    cont +='</div>';
                cont += '</div>';
                $('#container-jaringan').html(cont)
            })
        </script>
    @endpush