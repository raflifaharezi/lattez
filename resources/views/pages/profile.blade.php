@extends('layouts.master')
@section('title')
Profil
@endsection
@section('content')

    <header class="bg-light breadcrumb header-breadcrumb">
        <div class="container d-flex justify-content-start">
            <a href="" class="text-decoration-none text-dark ">
                <i class="fas fa-home"></i>
            </a>
            <span class="ml-2"> / </span>
            <p class="ml-2">Profil</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                {{--  <h5 class="title-header">
                    <i class="far fa-user fa-2x"></i>    
                    MY ACCOUNT
                </h5>  --}}
        
                <div class="card-body sidebar">
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

            <div class="col-md-8">
                <h4 class="color-profile mb-3">Profil :</h4>
                <div class="text-center">
                    <img src="{{ asset('images/icon-user.svg') }}" alt="" class="user-icon mb-3">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Nama Lengkap</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->name }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3 mt-md-0 mt-lg-0">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Nomer ID Member</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->id }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Alamat Lengkap</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->address }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Email</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->email }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">No Handphone</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->phone }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Nomor ID Leader</h5>
                                <input readonly type="text" class="form-control" value="{{ auth()->user()->leader_id }}"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">Nama Leader</h5>
                                <input readonly type="text" class="form-control no-readonly" value="@if($leader != NULL) {{ $leader['name'] }} @else  @endif"/>
                            </div>
                        </div>
                    </div>

                    {{--  <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">No Rekening</h5>
                                <div class="content-profile"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="card card-profile">
                            <div class="card-body">
                                <h5 class="color-profile font-weight-bold font-italic">No KTP</h5>
                                <div class="content-profile"></div>
                            </div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection