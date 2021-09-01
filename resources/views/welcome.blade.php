@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Laracamp</h2>
            </div>
            @foreach ($camps as $camp)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{$camp->title}} - ${{$camp->price}}
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($camp->CampBenefits as $campBenefit)
                                    <li>{{$campBenefit->name}}</li>
                                @endforeach
                            </ul>
                            @if ($camp->isRegistered)
                                <button class="btn btn-primary" disabled>Registered</button>    
                            @else
                                <a href="{{route('checkout.create', $camp->slug)}}" class="btn btn-primary">
                                    Subscribe
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection