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

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-12 mt-md-3 mt-lg-0 mt-3">
                <div class="card  card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-info card-reward">
                            <img    src="{{ asset('images/pajero.png') }}" 
                                    alt="" 
                                    class="image-reward"
                            >
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">30000 Sale</h3>
                        <p class="text-">1 Buah Mobil Pajero</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12 mt-lg-0 mt-3 mt-md-3">
                <div class="card  card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-warning card-reward">
                            <img src="{{ asset('images/smartphone.png') }}" alt="" style="width: 120px; height:120px;">
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">10000 Sale</h3>
                        <p class="text-">100 Smartphone</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12 mt-lg-0 mt-3 mt-md-3">
                <div class="card  card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-success card-reward">
                            <img src="{{ asset('images/emas.png') }}" alt="" style="width: 120px; height:120px;">
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">1000 Sale</h3>
                        <p class="text-">300 1 Gram Emas Antam</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12  mt-3">
                <div class="card  card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-danger card-reward">
                            <img src="{{ asset('images/n-max.png') }}" alt="" style="width: 120px; height:120px;">
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">1000 Sale</h3>
                        <p class="text-">8 Motor N-Max</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12  mt-3">
                <div class="card  card-reward">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div class="bg-primary card-reward">
                            <img src="{{ asset('images/iphone dan emas.png') }}" alt="" style="width: 120px; height:120px;">
                        </div>
                        <div class="ml-2">
                        <h3 class="font-weight-bold">1000 Sale</h3>
                        <p class="text-">36 Hp Iphone dan 10 Gram Emas</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center container mt-5">
    <h5>Pencarian Downline</h5>
    <h5 class="mb-3">Bonus Month</h5>

    <form action="">
        @csrf
        
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
            <input type="text" value="2021" class=" form-control">
        </div>
        
        <button class="btn btn-downline btn-info" type="submit">
            <i class="fas fa-arrow-right"></i> Cek Downline
        </button>


    </form>
    </div>
    <div class="container mt-5" id="container">
    <button class="btn btn-downline btn-info btn-sm">
        <i class="fas fa-file-import"></i> Import Excel
    </button>

   


    <div class="row mt-4 mb-4">
    <div class="col-md-5 col-12">
            <div class="card-body card-member">
                        <div class="d-flex justify-content-start">
                            <div class="ml">ID Member </div>
                            <div class="ml1">9840983090</div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="ml">Nama Member </div>
                            <div class="ml2">Supra Astro</div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="ml">Periode Bonus </div>
                            <div class="ml3">20-03-2021</div>
                    </div>
                </div>
        </div>
    </div>

    </div>

    <div class="container">
        <div class="row">
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
        </div>
    </div>

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
    @endsection