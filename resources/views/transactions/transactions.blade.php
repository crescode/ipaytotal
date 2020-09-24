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
                        <div class="row">
                            <div class="col-md-3">
                                <label for="first_name" class="text-right">First Name: </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="first_name" class="form-control" name="first_name" required placeholder="First Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Last Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name" required placeholder="Last Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Address:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" required placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Country:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="country" required placeholder="Country">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">State:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="state" required placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">City:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="city" required placeholder="City">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Zip:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="zip" required placeholder="Zip">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">IP Address:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ip_address" required placeholder="IP Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Birthdate:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="birth_date" required placeholder="Birthdate">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Email:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Phone No:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone_no" required placeholder="Phone No.">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Amount:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="amount" required placeholder="Amount">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Currency:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="currency" required placeholder="Currency">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Response Url:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="response_url" required placeholder="Response Url">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Transaction Ref:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="sulte_apt_no" required placeholder="Transaction Ref">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Card No.:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="card_no" required placeholder="Card No.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Expiry Month:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ccExpiryMonth" required placeholder="Expiry Month">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Expiry Year:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ccExpiryYear" required placeholder="Expiry Year">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">CCV Number:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="cvvNumber" required placeholder="CCV Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping First Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_first_name" required placeholder="Shipping First Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Last Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_last_name" required placeholder="Shipping Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Address:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_address" required placeholder="Shipping Address">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Country:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_country" required placeholder="Shipping Country">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping State:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_state" required placeholder="Shipping State">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping City:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_city" required placeholder="Shipping City">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Zip:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_zip" required placeholder="Shipping Zip">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Email:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_email" required placeholder="Shipping Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 10px">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Shipping Phone No:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="shipping_phone_no" required placeholder="Shipping Phone No">
                            </div>
                        </div>
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

