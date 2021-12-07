@extends('layouts.master-user')
@section('content')
    @if($errors->has('err'))
        <div class="row w-100 d-flex justify-content-around">

        <div class="alert alert-warning w-50 m-auto row d-flex justify-content-center" role="alert">
            <h4 class="col-12 text-white  d-flex justify-content-around"> {{$errors->first('err')}}</h4></div>
        </div>

    @endif
    @if($errors->has('succ'))
        <div class="row w-100 d-flex justify-content-around">

            <div class="alert alert-success w-50 m-auto row d-flex justify-content-center" role="alert">
                <h4 class="col-12 text-white  d-flex justify-content-around"> {{$errors->first('succ')}}</h4></div>
        </div>

    @endif
    <div class="row w-100 d-flex justify-content-around">
        <div class="card w-50 ">
            <h3 class=" mb-2 mt-5 d-flex justify-content-around">Search Categories Or Stores!</h3>
            <div class="card-body  d-flex justify-content-around">
                <form class="form-inline my-2 my-lg-0"  method="GET" action="{{URL('/user/search')}}">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-gradient-dark my-4 mb-2" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
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
    <div class="row w-100 d-flex justify-content-around">

        <div class=" w-50 m-auto row d-flex justify-content-center" role="alert">
            <div class="col-12 text-white  d-flex justify-content-around"> {{$stores->links()}}</div></div>
    </div>


    {{--    @isset($aa)--}}
{{--        {{$aa}}--}}

{{--    @endisset--}}


    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
    {{--    @include('layouts.includes.newRate')--}}
@endsection
