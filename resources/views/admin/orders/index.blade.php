@extends('layouts.admin')

@section('title')
Orders
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h4 class="text-white">New Orders
                        <a href="{{ url('order-history')}}" class="btn btn-primary float-right">Order History</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order Date</th>
                                <th>Tracking Number</th>
                                <th>Total price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{ date('d-m-Y',strtotime($item->create_at)) }}</td>
                                <td>{{ $item->tracking_no }}</td>
                                <td>{{ $item->total_price }}</td>
                                <td>{{ $item->status == '0' ? 'pending' : 'completed'}}</td>
                                <td>
                                    <a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary ">View</a>
                                </td>
                            </tr>
                            {{-- @php
                            $total += $item->total_price;
                            @endphp --}}
                            @endforeach
        
                        </tbody>
                    </table>
                    {{-- <div class="card-footer">
                        <h5 class="">
                            Grand Total :  Rs {{ $total }} 
                        </h5>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection