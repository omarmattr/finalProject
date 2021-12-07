@extends('layouts.master')
@section('content')
    <div class="container-fluid" >

        <div class="row my-4">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Add Store</h6>

                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">


                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {{--                        {{URL('/store/create')}}--}}
                        <form action="{{url('/store/update/'.$store->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <div class="@error('name') border border-danger rounded-3 @enderror">
                                    <input type="text" class="form-control" value="{{$store->name}}" placeholder="Name" name="name">
                                </div>
                                @error('name') <div class="text-danger">{{ $message }}</div> @enderror                                      </div>
                            <div class="mb-3">
                                <div class="@error('description') border border-danger rounded-3 @enderror">
                                    <input type="text" class="form-control" value="{{$store->description}}" placeholder="Description" name="description">
                                </div>
                                @error('description') <div class="text-danger">{{ $message }}</div> @enderror                                      </div>

                            <div class="mb-3">
                                <select class="form-select" aria-label="Disabled select example"  name="categoryId" >
                                    @foreach($categories as $category)

                                            <option value="{{$category->id}}" @if($category->id == $store->categoryId) selected @endif > {{$category->name}}</option>
                                    @endforeach


                                </select>

                            <div class="mb-3">
                                <div class=" border  rounded-3 ">
                                    <input onchange="loadFile(event)" type="file" value="{{Storage::url($store->image)}}" class="form-control" name="image"   >
                                </div>
                                @error('image') <div class="text-danger">{{ $message }}</div> @enderror                            </div>
                            <div class="mb-3 max-width-400">
                                <img class="img-thumbnail"  id="output"  src="{{Storage::url($store->image)}}" >
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
    <script src="../assets/js/plugins/chartjs.min.js">

    </script>
    <script>
        var loadFile = function(event) {

            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            console.log(output.src)
            output.onload = function() {

                URL.revokeObjectURL(output.src) // free memory
            }
        };
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        function changeName(id) {
            console.log("kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk")
            document.getElementById("dropbtn").value = document.getElementById(id).value;
        }
        function filterFunction() {
            var input, filter, btn,a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            btn = document.getElementById("dropbtn");
            a = div.getElementsByTagName("span");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

    </script>
@endsection
