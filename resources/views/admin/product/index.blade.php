@extends('layouts.admin')

{{-- here we are going to fetch the data from the data base and show it in the category page in form of table --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Product Page</h4>
            <hr>
        </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->selling_price}}</td>

                    <td>
                        <img src="{{asset('assets/uploads/products/'.$item->image)}}" class="cate-image2" alt="image here">
                    </td>
                    <td>
                        <a href="{{ url('edit-product/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>

                    </td>

                </tr>
                @endforeach
                
            </tbody>
        </table>
        

    </div>
    </div>
@endsection