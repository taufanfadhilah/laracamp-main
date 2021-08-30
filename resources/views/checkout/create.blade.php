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
                                <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{old('email') ?: Auth::user()->email}}" required />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-1">
                                <label for="name">Full Name</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}" required />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-1">
                                <label for="occupation">Occupation</label>
                                <input name="occupation" type="text" class="form-control {{$errors->has('occupation') ? 'is-invalid' : ''}}" value="{{old('occupation') ?: Auth::user()->occupation}}" required />
                                @if ($errors->has('occupation'))
                                    <p class="text-danger">{{$errors->first('occupation')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-1">
                                <label for="card_number">Card Number</label>
                                <input name="card_number" type="text" class="form-control {{$errors->has('card_number') ? 'is-invalid' : ''}}" required />
                                @if ($errors->has('card_number'))
                                    <p class="text-danger">{{$errors->first('card_number')}}</p>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="expired">Expired</label>
                                        <input name="expired" type="month" class="form-control {{$errors->has('expired') ? 'is-invalid' : ''}}" required />
                                        @if ($errors->has('expired'))
                                    <p class="text-danger">{{$errors->first('expired')}}</p>
                                @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cvc">CVC</label>
                                        <input name="cvc" type="text" class="form-control {{$errors->has('cvc') ? 'is-invalid' : ''}}" maxlength="3" required />
                                        @if ($errors->has('cvc'))
                                    <p class="text-danger">{{$errors->first('cvc')}}</p>
                                @endif
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