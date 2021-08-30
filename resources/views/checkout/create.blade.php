@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        Checkout Bootcamp
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group mb-1">
                                <label for="email">Email Address</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Full Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Occupation</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Card Number</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Expired</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">CVC</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-grid gap-2">
                                    <a href="{{route('checkout.success')}}" class="btn btn-primary">Pay Now</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection