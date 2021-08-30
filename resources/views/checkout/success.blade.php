@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-3">
                <h1>Berhasil Checkout</h1>
                <div class="col-4 mx-auto">
                    <div class="d-grid gap-2">
                        <a href="{{route('welcome')}}" class="btn btn-primary">My Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection