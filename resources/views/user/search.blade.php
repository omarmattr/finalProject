@extends('layouts.master-user')
@section('content')
    <div class="container">
        <div class="row w-100 d-flex justify-content-around">
            <div class="card w-50 ">
                <h3 class=" mb-2 mt-5 d-flex justify-content-around">fond {{count($categories)}} categories
                    and {{count($stores)}} stores</h3>

            </div>
        </div>

        <div class="row">
            <h4>Stores</h4>
        </div>

        <div class="row  w-100 d-flex justify-content-around">

            @foreach($stores as $store)
                <a class="card col-lg-3 col-xl-2 col-md-4 col-sm-6 card-image m-5"
                   data-store="{{ $store }}" data-toggle="modal"
                   href="#show{{$store->id}}" >
                    <div >
                        <img class="card-img-top image" style="height: 300px" src="{{Storage::url($store->image)}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$store->name}}</h5>
                            <p class="card-text ">{{$store->description}}</p>

                        </div>
                    </div>
                </a>
                @include('layouts.includes.dialog-rate')
            @endforeach
        </div>

        <br>
        <div class="row">
            <h4>Categories</h4>
        </div>
        <div class="row  w-100 d-flex justify-content-around">

            @foreach($categories as $category)
                <div class="card  col-lg-3 col-xl-2 col-md-4 col-sm-6 card-image m-5">
                    <img class="card-img-top image h-75" src="{{Storage::url($category->image)}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--    @include('layouts.includes.newRate')--}}
@endsection
