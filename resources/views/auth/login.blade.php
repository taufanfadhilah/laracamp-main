@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{route('user.login.google')}}" class="btn btn-primary mt-4">Sign In with Google</a>
            </div>
        </div>
    </div>
@endsection