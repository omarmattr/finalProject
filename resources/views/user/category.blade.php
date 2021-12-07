@extends('layouts.master-user')
@section('content')
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
    <div class="row w-100 d-flex justify-content-around">
        @foreach($categories as $category)
            <div class="card col-6 col-sm-2 card-image">
                <img class="card-img-top image " style="height: 300px" src="{{Storage::url($category->image)}}">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text ">{{$category->description}}</p>

                </div>
            </div>
        @endforeach
    </div>
    <div class="row w-100 d-flex justify-content-around">

        <div class=" w-50 m-auto row d-flex justify-content-center" role="alert">
            <div class="col-12 text-white  d-flex justify-content-around"> {{$categories->links()}}</div></div>
    </div>
    {{--    @include('layouts.includes.newRate')--}}
@endsection
