@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Date</th>
                                    <th>Card Number</th>
                                    <th>CVC</th>
                                    <th>Payment Status</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
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
                                        <td>
                                            <a href="{{route('user.checkout.invoice', $checkout->id)}}" class="btn btn-sm btn-info">Get Invoice</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No camp registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection