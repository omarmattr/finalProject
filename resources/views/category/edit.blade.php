@extends('layouts.master')
@section('content')
    <div class="container-fluid py-4" xmlns:wire="http://www.w3.org/1999/xhtml">

        <div class="row my-4">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Edit Category</h6>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{URL('/category/update/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input type="text" class="form-control" value="{{$category->name}}" placeholder="Name" name="name">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('file') border border-danger rounded-3 @enderror">
                                    <input  onchange="loadFile(event)" type="file" class="form-control" name="image">
                                </div>
                                @error('file') <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div  class="mb-3 max-width-400">
                                <img class="img-thumbnail"  id="output"  src="{{Storage::url($category->image)}}">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Save</button>
                            </div>

                        </form></div>
                </div>
            </div>
            <div class="col-lg-2 "></div>

        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
        var loadFile = function(event) {

            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            console.log(output.src)
            output.onload = function() {

                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>

@endsection
