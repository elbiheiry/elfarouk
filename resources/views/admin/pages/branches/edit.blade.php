@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>branches</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">branches</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="ajax-form" method="post" action="{{route('admin.branches.edit',['id' => $branch->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group img-block">
                                    <label>Image</label>
                                    <img src="{{asset('storage/app/public/branches/'.$branch->image)}}"
                                         class="img-responsive btn-product-image" style="cursor: pointer;">
                                    <input type="file" name="image" style="display: none;">
                                    <div class="text-danger text-center">Please click on image to change it
                                    </div>
                                    <div class="text-danger text-center">Image size should be: 140px * 140px</div>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Name : </label>
                                <input class="form-control" type="text" name="name" value="{{$branch->name}}">

                                <label>Address : </label>
                                <input class="form-control" type="text" name="address" value="{{$branch->address}}">

                                <label>Phone : </label>
                                <input class="form-control" type="text" name="phone" value="{{$branch->phone}}">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Map : </label>
                                <input class="form-control" type="text" name="map" value="{{$branch->map}}">
                            </div>

                            <div class="col-sm-12 form-group">
                                <button class="custom-btn" id="save-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Widget-->
    </div>
@endsection