@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')

<div class="container py-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="">Orders View
                        <a href="{{ url('my-orders')}}" class="btn btn-info text-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h5>Shipping Details</h5>
                            <hr>
                            <label for="">First Name</label>
                            <div class="border">{{ $orders->fname }}</div>
                            <label for="">Last Name</label>
                            <div class="border">{{ $orders->lname }}</div>
                            <label for="">Email</label>
                            <div class="border">{{ $orders->email }}</div>
                            <label for="">Contact No.</label>
                            <div class="border">{{ $orders->phone }}</div>
                            <label for=""> Shipping Address</label>
                            <div class="border">
                                {{ $orders->address1 }},<br>
                                {{ $orders->address2 }},<br>
                                {{ $orders->city }},<br>
                                {{ $orders->state }},
                                {{ $orders->country }}
                            </div>
                            <label for="">Zip Code</label>
                            <div class="border">{{ $orders->pincode }}</div>


                        </div>
                        <div class="col-md-6">
                            <h5>Order Details</h5>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name}}</td>
                                        <td>{{ $item->qty}}</td>
                                        <td>{{ $item->price}}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}"
                                                width="50px" alt="product image">
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <h4 class="px-2">Grand Total price: <span class="float-end">{{ $orders->total_price }}</span></h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection