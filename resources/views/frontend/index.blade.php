@extends('layouts.front')

@section('title')
Welcome to Jewelery Palace
@endsection

@section('content')
@include('layouts.inc.slider')


<div class="py-5">
    <div class="container">
        <div class="row gy-3">
            <h2 class="text-center">FEATURED PRODUCTS</h2>
            {{-- <div class="owl-carousel featured-carousel owl-theme"> --}}
                @foreach ($featured_products as $prod)
                <div class="col-md-3">
                    <a href="{{ url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="card-img" style="height:280px;"
                            alt="product image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <span class="float-start">{{ $prod-> selling_price}}</span>
                            <span class="float-end"><s>{{ $prod-> original_price}}</s></span>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            {{-- </div> --}}
        </div>
    </div>
</div>




<div class="py-5">
    <div class="container">
        <div class="row gy-3">
            <h2 class="text-center">TRENDING CATEGORY</h2>
            <div class="owl-carousel treading-carousel owl-theme">
                @foreach ($trending_category as $tcategory)
                <div class="items">
                    <a href="{{ url('category/'.$tcategory->slug)}}">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" class="card-img" style="height:280px;"
                                alt="category image">
                            <div class="card-body">
                                <h5>{{ $tcategory->name }}</h5>
                                <p>{{ $tcategory->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    autoplay:true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

  
</script>
@endsection