    @extends('layouts.master')

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

    <div class="text-center container">
    <h5>Pencarian Downline</h5>
    <h5>Bonus Month</h5>

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
            <div class="col-md-12">
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
                        <th scope="row">1</th>
                        <td>Sit</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>Emas 1grm</td>
                        <td>
                            <a href="" type="button" >
                                <i class="far fa-bell fa-3x"></i>
                                <span class="badge">3</span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Adipisicing</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>Emas 1grm</td>
                        <td>
                            <a href="" type="button" >
                                <i class="far fa-bell fa-3x"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Sit</td>
                        <td>100</td>
                        <td>1000</td>
                        <td>Emas 1grm</td>
                        <td>
                        <a href="" type="button" >
                            <i class="far fa-bell fa-3x"></i>
                        </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="container">
    <div class="card-body card-info">
    <div class="row">
        <div class="col-md-2 text-white font-weight-bold">
            ID Member
        </div>
        <div class="col-md-2 text-white font-weight-bold">
            Nama Member
        </div>
        <div class="col-md-2 text-white font-weight-bold">
            Reward
        </div>
        <div class="col-md-2 text-white font-weight-bold">
            Leader
        </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="card-body card-member bg-light">
        <div class="row">
            <div class="col-md-2">
                EID197918
            </div>
            <div class="col-md-2">
                HARYANTI
            </div>
            <div class="col-md-2">
                3,693
            </div>
            <div class="col-md-2">
                EID173690
            </div>
        </div>
    </div>
    </div>

    <div class="container">
    <div class="card-body card-member bg-light">
        <div class="row">
            <div class="col-md-2">
                EID197918
            </div>
            <div class="col-md-2">
                HARYANTI
            </div>
            <div class="col-md-2">
                3,693
            </div>
            <div class="col-md-2">
                EID173690
            </div>
        </div>
    </div>
    </div>

    <div class="container">
    <div class="card-body card-member bg-light">
        <div class="row">
            <div class="col-md-2">
                EID197918
            </div>
            <div class="col-md-2">
                HARYANTI
            </div>
           
            <div class="col-md-2">
                3,693
            </div>
            <div class="col-md-2">
                EID173690
            </div>
        </div>
    </div>
    </div> --}}
    @endsection