@extends('layouts.master')
@section('content')
    <div class="container-fluid py-4">

        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-12 mb-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Stores</h6>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stores name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        User IP
                                    </th>
                                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                                        Rating
                                    </th>


                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $reviews as $erv => $item)
{{--                                    {{dd()}}--}}
                                    <tr>
                                        <td>
                                            <h6 class=" text-sm text-center">{{$loop->index+1}}</h6>
                                        </td>

                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">

                                                    <h6 class="mb-0 text-sm">
                                                        <img src="{{\Illuminate\Support\Facades\Storage::url($item->reviews->image)}}"
                                                             class="avatar avatar-sm me-3">
                                                        {{$item->reviews->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 class=" text-sm ">ggggggggg</h6>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                @include("layouts.includes.rating2")
                                            </div>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="m-auto">{{$reviews->links()}}</div>

                </div>
            </div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>

@endsection
