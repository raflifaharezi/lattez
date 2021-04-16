@extends('layouts.master')
@section('content')
    <div class="container margin-order">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <img src="{{ asset('images/lattez-1.jpg') }}" alt="">
                </div>
            </div>

            <div class="col-md-8 col-12">
                <div class="card border-0">
                    <h4>Sabun Lattez</h4>
                    <div>
                        Rp. 75.000
                    </div>
                    <hr>
                    <div class="description-product">
                        <div>
                            Deskripsi Produk :
                        </div>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur tincidunt lacus sed accumsan rhoncus. 
                        </p>
                    </div>
                    <div class="total-quantity">
                        <div>Quantity</div>
                        <div class="mt-2">
                            <button type="button" 
                                id="minus" 
                                class="btn btn-danger btn-sm"
                                onclick="minus()"
                            >
                                    -
                            </button>
                            <input type="number" 
                                    id="count" 
                                    value="" 
                                    min="1"
                                    class="quantity"
                                    readonly
                                    onchange="calculateAmount(this.value)" required
                            >
                            
                            <button type="button" 
                                    id="add" 
                                    class="btn btn-success btn-sm"
                                    onclick="plus()">
                                    
                                    +
                            </button>
                        </div>
                    </div>
                    <div class="total-amount mt-3">
                        <div>
                            Total Amount
                        </div>
                        <div>
                            Rp. 75.000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-3 mt-lg-3">
        <div class="row">
            <div class="col-md-12">
                <h4>Details Checkout</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-4 mt-2 mt-lg-0 mt-md-0">
                            <label for="">Nama Lengkap:</label>
                            <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-0 mt-md-0">
                            <label for="">ID Member:</label>
                            <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-0 mt-md-0">
                            <label for="">No Handphone:</label>
                            <input type="number" name="" class="form-control" min="0">
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">ALamat Lengkap:</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Provinsi</label>
                            <select name="" id="" class="form-control">
                                <option value="">Jawa Barat</option>
                                <option value="">DKI Jakarta</option>
                                <option value="">Jawa Tengah</option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kota / Kab</label>
                            <select name="" id="" class="form-control">
                                <option value="">Kota Bogor</option>
                                <option value="">Jakarta Timur</option>
                                <option value="">Semarang</option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kecamatan</label>
                            <select name="" id="" class="form-control">
                                <option value="">Tegalega</option>
                                <option value="">Cililitan</option>
                                <option value="">Semarang</option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kode Pos</label>
                            <input type="number" name="" class="form-control" min="0">
                        </div>

                        <div class="col-md-2 mt-2 mt-lg-0 mt-md-0 ">
                            <button class="btn btn-success button-checkout">
                                Checkout
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
        <option value="" disabled selected>Choose your option</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select> --}}
    <label><b>Total Amount</b></label>
    <input class="w3-input w3-border" name="tot_amount" id="tot_amount" type="text" readonly>
    <p id="tot_amount">sum</p>
    <script>

@endsection
@push('after-script')
<script>
    var count = 1;
var countEl = document.getElementById("count");
function plus(){
    count++;
    countEl.value = count;
}
function minus(){
    if (count > 1) {
    count--;
    countEl.value = count;
    }  
}
</script>

<script>
            function calculateAmount(val) {
                var tot_price = val * 100;
                /*display the result*/
                var divobj = document.getElementById('tot_amount');
                divobj.value = tot_price;
            }
</script>
@endpush