@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-title">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Transaction Details</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('api.transactions.store') }}">
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="first_name" required placeholder="First Name">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="last_name" required placeholder="Last Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="address" required placeholder="Address">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="country" required placeholder="Country">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="state" required placeholder="State">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="city" required placeholder="City">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="zip" required placeholder="Zip">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="ip_address" required placeholder="IP Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="birth_date" required placeholder="Birthdate">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="email" required placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="phone_no" required placeholder="Phone No.">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="amount" required placeholder="Amount">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="currency" required placeholder="Currency">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="response_url" required placeholder="Response Url">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="sulte_apt_no" required placeholder="Transaction Ref">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="card_no" required placeholder="Card No.">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="ccExpiryMonth" required placeholder="Expiry Month">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="ccExpiryYear" required placeholder="Expiry Year">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="cvvNumber" required placeholder="CCV Number">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_first_name" required placeholder="Shipping First Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_last_name" required placeholder="Shipping Last Name">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_address" required placeholder="Shipping Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_country" required placeholder="Shipping Country">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_state" required placeholder="Shipping State">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_city" required placeholder="Shipping City">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_zip" required placeholder="Shipping Zip">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_email" required placeholder="Shipping Email">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <input type="text" class="form-control" name="shipping_phone_no" required placeholder="Shipping Phone No">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

