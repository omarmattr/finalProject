@extends('layouts.master')
@section('content')
    <div class="container-fluid py-4">

        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-12 mb-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Category delete</h6>

                            </div>
                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        category
                                    </th>
                                    <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        number of stores
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Setting
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $categories as $cat => $item)
                                    <tr>
                                        <td>

                                                <h6 class=" text-sm text-center">{{$loop->index+1}}</h6>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{Storage::url($item->image)}}"
                                                         class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <h6 class=" text-sm text-center "> {{count($item->numOfStores)}} of stores</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="#">
                                                <i class="fa ni-fat-remove text-secondary"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="m-auto">{{$categories->links()}}</div>

                </div>
            </div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>

@endsection
