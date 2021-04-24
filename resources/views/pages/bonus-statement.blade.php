@extends('layouts.master')

@section('content')

<header class="bg-light breadcrumb header-breadcrumb">
    <div class="container d-flex justify-content-start">
        <a href="" class="text-decoration-none text-dark ">
            <i class="fas fa-home"></i>
        </a>
        <span class="ml-2"> / </span>
        <p class="ml-2">Profile</p>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h5 class="title-header">
                <i class="far fa-user fa-2x"></i>    
                MY ACCOUNT
            </h5>
    
            <div class="card-body sidebar mt-3">
                <a class="title-sidebar text-decoration-none" href="{{ route('profile') }}">
                    <i class="fas fa-id-card"></i>
                    <span class="title">Personal Particulars</span>
                </a>
            </div>
    
            <div class="card-body sidebar">
                <a href="{{ route('transaction-history') }}" class="title-sidebar text-decoration-none">
                    <i class="fas fa-history"></i>
                    <span class="title">Tracking Your Package</span>
                </a>
            </div>
    
            <div class="card-body sidebar">
                <a href="{{ route('bonus-statement') }}" class="title-sidebar text-decoration-none">
                    <i class="fas fa-star"></i>
                    <span class="title">Bonus Statement Status View</span>
                </a> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <h6 class="ml-3">Bonus Statement</h6>
                <div class="col-md-10">
                    <form action="">
                        <select name="" id="" class="form-control">
                            <option value="">Cetak dan diKirim ke Stockiest</option>
                            <option value="">Digital (Dapat dilihat melalui website lattez.co.id)</option>
                        </select>
                </div>
                        <div class="col-md-10 mt-3 mb-2 text-danger">
                            Mohon perhatian terhadap pilihan di atas:
                        </div>
                        <div class="col-md-10 mb-2">
                            <div class="text-justify">
                                Jika Anda memilih Cetak dan dikirim ke Stockist, maka akan dikenakan biaya Rp.10.000 dipotong dari bonus yang Anda dapat.
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="text-justify">
                                Jika Anda memilih Digital, maka akan bebas biaya, tapi bonus statement bisa dilihat melalui www.lattez.id.
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <button class="btn btn-success" type="submit">
                                Update
                            </button>
                        </div>
                    </form>
            </div>
        </div>

    </div>

</div>

@endsection
