@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        Update discounts: {{$discount->name}}
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.discount.update', $discount->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$discount->id}}">
                            <div class="form-group mb-4">
                                <label class="form-label">Name</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{old('name') ?: $discount->name}}" required />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label">Code</label>
                                <input name="code" type="text" class="form-control {{$errors->has('code') ? 'is-invalid' : ''}}" value="{{old('code') ?: $discount->code}}" required />
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{$errors->first('code')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="" cols="" rows="2" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description') ?: $discount->description}}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{$errors->first('description')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label class="form-label">Discount Percentage</label>
                                <input name="percentage" type="number" min="1" max="100" class="form-control {{$errors->has('percentage') ? 'is-invalid' : ''}}"  value="{{old('percentage') ?: $discount->percentage}}" required />
                                @if ($errors->has('percentage'))
                                    <p class="text-danger">{{$errors->first('percentage')}}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection