@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Invoice #{{$checkout->id}}</h3>
            </div>
        </div>
        <dl class="row">
            <dt class="col-sm-2">From</dt>
            <dd class="col-sm-10">
                <b>Buildwith Angga</b>
                <p>Jl. Dago, Coblong, Bandung</p>
                <p>Indonesia</p>
            </dd>
            <dt class="col-sm-2">To</dt>
            <dd class="col-sm-10">
                <b>{{$checkout->User->name}}</b>
                <p>{{$checkout->User->email}}</p>
            </dd>
        </dl>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="6">Invoice Detail</th>
                        </tr>
                        <tr>
                            <th>Camp</th>
                            <th>Price</th>
                            <th>Register Date</th>
                            <th>Card Number</th>
                            <th>CVC</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$checkout->Camp->title}}</td>
                            <td>${{$checkout->Camp->price}}</td>
                            <td>{{$checkout->created_at->format('M d Y')}}</td>
                            <td>
                                {{$checkout->card_number}}
                                <span class="badge bg-warning">{{date('M Y', strtotime($checkout->expired))}}</span>
                            </td>
                            <td>{{$checkout->cvc}}</td>
                            <td>
                                @if ($checkout->is_paid)
                                    <span class="badge bg-success">Paid</span>
                                @else
                                    <span class="badge bg-warning">Waiting</span>
                                @endif    
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection