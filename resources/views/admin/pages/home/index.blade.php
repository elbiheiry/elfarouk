@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>home </h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">home </li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="ajax-form" method="post" action="{{route('admin.home.edit')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group img-block">
                                    <label>First image</label>
                                    <img src="{{asset('storage/app/public/home/'.$home->image1)}}"
                                         class="img-responsive btn-product-image" style="cursor: pointer;">
                                    <input type="file" name="image1" style="display: none;">
                                    <div class="text-danger text-center">Please click on image to change it
                                    </div>
                                    <div class="text-danger text-center">Image size should be: 470 * 615</div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group img-block">
                                    <label>Second image</label>
                                    <img src="{{asset('storage/app/public/home/'.$home->image2)}}"
                                         class="img-responsive btn-product-image" style="cursor: pointer;">
                                    <input type="file" name="image2" style="display: none;">
                                    <div class="text-danger text-center">Please click on image to change it
                                    </div>
                                    <div class="text-danger text-center">Image size should be: 445 * 590</div>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">
                                <input class="form-control" type="text" name="title1" value="{{$home->title1}}">
                            </div>

                            <div class="col-sm-6 form-group">
                                <textarea class="form-control" name="description1">{{$home->description1}}</textarea>
                            </div>

                            <div class="col-sm-12"><hr></div>

                            <div class="col-sm-6 form-group">
                                <input class="form-control" type="text" name="title2" value="{{$home->title2}}">
                            </div>

                            <div class="col-sm-6 form-group">
                                <textarea class="form-control" name="description2">{{$home->description2}}</textarea>
                            </div>

                            <div class="col-sm-12"><hr></div>

                            <div class="col-sm-6 form-group">
                                <input class="form-control" type="text" name="title3" value="{{$home->title3}}">
                            </div>

                            <div class="col-sm-6 form-group">
                                <textarea class="form-control" name="description3">{{$home->description3}}</textarea>
                            </div>


                            <div class="col-sm-12"><hr></div>

                            <div class="col-sm-6 form-group">
                                <input class="form-control" type="text" name="title4" value="{{$home->title4}}">
                            </div>

                            <div class="col-sm-6 form-group">
                                <textarea class="form-control" name="description4">{{$home->description4}}</textarea>
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