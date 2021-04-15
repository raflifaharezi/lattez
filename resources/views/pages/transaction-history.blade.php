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

        <div class="col-md-8">
            <h6 class="text-center">HISTORY TRANSAKSI PEMBELANJAAN  YANG DIKIRIM KE <br> ALAMAT</h6>
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <input  type="text" 
                                    class="form-control" 
                                    placeholder="From"
                                    id="date-from">
                        </div>
                    </div>
        
                    <div class="col-md-6">
                        <div class="form-group">
                            <input  type="text" 
                                    class="form-control" 
                                    placeholder="To"
                                    id="date-to">
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="">All</option>
                                <option value="">Cash</option>
                                <option value="">COD</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="">All</option>
                                <option value="">Success</option>
                                <option value="">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

                <div class="col-md-10 table-history">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                            <th>No Order</th>
                            <th>Id Member</th>
                            <th>Tanggal Trx</th>
                            <th>CNote</th>
                            <th>Kurir</th>
                            <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>23499328</td>
                            <td>20-30-2021</td>
                            <td>-</td>
                            <td>Jne</td>
                            <td class="text-success font-italic">Success</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>23499328</td>
                            <td>20-30-2021</td>
                            <td>-</td>
                            <td>Jne</td>
                            <td class="text-warning font-italic">Pending</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>23499328</td>
                            <td>20-30-2021</td>
                            <td>-</td>
                            <td>Jne</td>
                            <td class="text-success font-italic">Success</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection

@push('after-script')
    <script>

            $(document).ready(function() {            

            $('#date-from').datepicker({                      
                format: 'dd-mm-yyyy',
                autoclose: true,
            }); 

            $('#date-to').datepicker({                      
                format: 'dd-mm-yyyy',
                autoclose: true,
            }); 

            });


    </script>
@endpush