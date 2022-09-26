@extends('layouts.front')

@section('title')
My Orders
@endsection

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="text-white">My Orders</h4>
                </div>
                <div class="card-body">
                    {{-- @php
                    $total = 0;
                    @endphp --}}
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
                                    <a href="{{ url('view-order/'.$item->id) }}" class="btn btn-info ">View</a>
                                </td>
                            </tr>
                            {{-- @php
                            $total += $item->total_price;
                            @endphp --}}
                            @endforeach

                        </tbody>
                    </table>
                    {{-- <div class="card-footer">
                        <h4 class="px-2">Grand Total : Rs <span class="float-end">{{ $total }}</span></h4>
                        Grand Total : Rs {{ $total }}
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection