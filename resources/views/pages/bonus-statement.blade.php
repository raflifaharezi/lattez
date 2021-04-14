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
                <a class="title-sidebar text-decoration-none" href="">
                    <i class="fas fa-id-card"></i>
                    <span class="title">Personal Particulars</span>
                </a>
            </div>
    
            <div class="card-body sidebar">
                <a href="{{ route('transaction') }}" class="title-sidebar text-decoration-none">
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
                <h6 class="">Bonus Statement</h6>
                <select name="" id="" class="form-control">
                    <option value="">Cetak dan diKirim ke Stockiest</option>
                    <option value="">Digital (Dapat dilihat melalui website lattez.co.id)</option>
                </select>
                <div class="title-bonus">
                    Mohon perhatian terhadap pilihan di atas:
                </div>
                <div class="text-justify">
                    Jika Anda memilih Cetak dan dikirim ke Stockist, maka akan dikenakan biaya Rp.10.000 dipotong dari bonus yang Anda dapat.
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
