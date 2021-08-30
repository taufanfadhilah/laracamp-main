@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header text-center">
                        Checkout Bootcamp - {{$camp->title}}
                    </div>
                    <div class="card-body">
                        <form action="{{route('checkout.store', $camp->id)}}" method="post">
                            @csrf
                            <div class="form-group mb-1">
                                <label for="email">Email Address</label>
                                <input name="email" type="text" class="form-control" value="{{Auth::user()->email}}" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Full Name</label>
                                <input name="name" type="text" class="form-control" value="{{Auth::user()->name}}" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Occupation</label>
                                <input name="occupation" type="text" class="form-control" value="{{Auth::user()->occupation}}" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="email">Card Number</label>
                                <input name="card_number" type="text" class="form-control" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Expired</label>
                                        <input name="expired" type="date" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">CVC</label>
                                        <input name="cvc" type="text" class="form-control" maxlength="3" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary">Pay Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection