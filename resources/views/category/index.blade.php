@extends('layouts.master')
@section('content')
    <div class="container-fluid py-4">

        <div class="row my-4">
            <div class="col-lg-12 col-md-12 mb-md-12 mb-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Category</h6>

                            </div>
{{--                            <div class="col-lg-6 col-5 my-auto text-end">--}}
{{--                                <a href="{{URL('/category/create')}}">--}}
{{--                                    <div class=" text-end">--}}
{{--                                        <div class="icon icon-shape bg-dark shadow text-center border-radius-md">--}}
{{--                                            <i class="ni ni-fat-add text-lg" aria-hidden="true"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}

{{--                            </div>--}}
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
                                            <div class="dropdown ">
                                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v text-secondary"></i>
                                                </a>
                                                <ul class="dropdown-menu " aria-labelledby="dropdownTable">
                                                    <li><a class="dropdown-item border-radius-md" href="{{URL('category/update/'.$item->id)}}">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item border-radius-md" href="{{URL('category/delete/'.$item->id)}}">Delete</a></li>

                                                </ul>
                                            </div>

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
