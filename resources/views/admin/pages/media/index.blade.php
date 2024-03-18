@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>Media</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">Media</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="ajax-form" method="post" action="{{route('admin.media')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-6">
                                <div class="form-group img-block">
                                    <label>Image</label>
                                    <img src="{{asset('public/admin/images/user.jpg')}}"
                                         class="img-responsive btn-product-image" style="cursor: pointer;">
                                    <input type="file" name="image" style="display: none;">
                                    <div class="text-danger text-center">Please click on image to change it
                                    </div>
                                    <div class="text-danger text-center">Image size should be: 750 * 750</div>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Video ID : </label>
                                <input class="form-control" type="text" name="video">
                            </div>
                            <div class="col-sm-12 form-group">
                                <button class="custom-btn" id="save-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Widget-->
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table id="datatableX" class="table table-hover table-bordered display nowrap" cellspacing="0"
                               width="100%">
                            <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Options</th>
                            </thead>
                            <tbody>
                            @foreach($medias as $index => $media)
                                <tr class="ticket-tr">
                                    <td>{{$index+1}}</td>
                                    <td><img src="{{asset('storage/app/public/media/'.$media->image)}}" width="100px"></td>
                                    <td>{{$media->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.media.edit' , ['id' => $media->id])}}"
                                           class="icon-btn fa fa-wrench" title="Edit"></a>
                                        <button
                                                data-url="{{route('admin.media.delete' ,['id' => $media->id])}}"
                                                data-toggle="modal"
                                                data-target="#delete" class="icon-btn fa fa-trash red-bc deleteBTN"
                                                title="delete">
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--End Widget-->
    </div>
@endsection