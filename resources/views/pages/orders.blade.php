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
                        <div class="total-amount">
                            Deskripsi Produk :
                        </div>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Curabitur tincidunt lacus sed accumsan rhoncus. 
                        </p>
                    </div>
                    <div class="total-amount">
                        <div>Quantity</div>
                        <div class="mt-2">
                            <div class="quantity d-flex justify-content-center">
                                <button class="btn minus-btn disabled" type="button">-</button>
                                <input type="text" id="quantity" value="1" min="0" readonly>
                                <button class="btn plus-btn" type="button">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="total-amount mt-3">
                        <div>
                            Total Amount
                        </div>
                        <p class="total-price">
                            <span class="text-danger">Rp.</span>
                            <span id="price" class="text-danger">75000</span>
                        </p>
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
                            <select name="province" id="province" class="form-control">
                                @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kota / Kab</label>
                            <select name="city" id="city" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kecamatan</label>
                            <select name="district" id="district" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">kelurahan</label>
                            <select name="village" id="village" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-2 mt-lg-2 mt-md-2">
                            <label for="">Kode Pos</label>
                            <input type="number" name="" class="form-control" min="0">
                        </div>

                        <div class="col-md-12 mt-2 mt-lg-0 mt-md-0 d-flex justify-content-end flex-row">
                            <button class="btn btn-success button-checkout">
                                Checkout
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('after-script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

    var valueCount
    var price = document.getElementById("price").innerText;

    //price calculation function
    function priceTotal() {
        var total = valueCount * price;
        document.getElementById("price").innerText = total
    }

    //plus button
    document.querySelector(".plus-btn").addEventListener("click", function() {
        //getting value of input
        valueCount = document.getElementById("quantity").value;

        //input value increment by 1
        valueCount++;

        //setting increment input value
        document.getElementById("quantity").value = valueCount;

        if (valueCount > 1) {
            document.querySelector(".minus-btn").removeAttribute("disabled");
            document.querySelector(".minus-btn").classList.remove("disabled")
        }

        //calling price function
        priceTotal()
    })

    //plus button
    document.querySelector(".minus-btn").addEventListener("click", function() {
        //getting value of input
        valueCount = document.getElementById("quantity").value;

        //input value increment by 1
        valueCount--;

        //setting increment input value
        document.getElementById("quantity").value = valueCount

        if (valueCount == 1) {
            document.querySelector(".minus-btn").setAttribute("disabled", "disabled")
        }

        //calling price function
        priceTotal()
    })

</script>


<script>
    // function region laravolt indonesia
    $(function () {
    $('#province').on('change', function () {
        axios.post('{{ route('region.city') }}', {id: $(this).val()})
            .then(function (response) {
                $('#city').empty();

                $.each(response.data, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            });
    });

    $('#city').on('change', function () {
        axios.post('{{ route('region.district') }}', {id: $(this).val()})
            .then(function (response) {
                $('#district').empty();

                $.each(response.data, function (id, name) {
                    $('#district').append(new Option(name, id))
                })
            });
    });

    $('#district').on('change', function () {
        axios.post('{{ route('region.village') }}', {id: $(this).val()})
            .then(function (response) {
                $('#village').empty();

                $.each(response.data, function (id, name) {
                    $('#village').append(new Option(name, id))
                })
            });
    });


});
</script>
@endpush