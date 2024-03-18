@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>Site settings</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">Site settings</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="ajax-form" method="post" action="{{route('admin.settings.edit')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-6 form-group">
                                <label>Address : </label>
                                <input class="form-control" type="text" name="address" value="{{$settings->address}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Sales number : </label>
                                <input class="form-control" type="text" name="sales" value="{{$settings->sales}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Complaints and suggestions : </label>
                                <input class="form-control" type="text" name="complaints" value="{{$settings->complaints}}">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Map : </label>
                                <input class="form-control" type="text" name="map" value="{{$settings->map}}">
                            </div>

                            <div class="col-sm-12"><hr></div>

                            <div class="col-sm-6 form-group">
                                <label>Phone : </label>
                                <input class="form-control" type="text" name="phone" value="{{$settings->phone}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email : </label>
                                <input class="form-control" type="text" name="email" value="{{$settings->email}}">
                            </div>

                            <div class="col-sm-12"><hr></div>

                            <div class="col-sm-6 form-group">
                                <label>Facebook : </label>
                                <input class="form-control" type="text" name="facebook" value="{{$settings->facebook}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>youtube : </label>
                                <input class="form-control" type="text" name="youtube" value="{{$settings->youtube}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Instagram : </label>
                                <input class="form-control" type="text" name="instagram" value="{{$settings->instagram}}">
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