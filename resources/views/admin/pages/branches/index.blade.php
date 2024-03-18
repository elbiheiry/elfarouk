@extends('admin.layouts.master')

@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>Agents</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">Agents</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="ajax-form" method="post" action="{{route('admin.branches')}}"
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
                                    <div class="text-danger text-center">Image size should be: 140px * 140px</div>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Name : </label>
                                <input class="form-control" type="text" name="name">

                                <label>Address : </label>
                                <input class="form-control" type="text" name="address">

                                <label>Phone : </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Map : </label>
                                <input class="form-control" type="text" name="map">
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
                            @foreach($branches as $index => $branch)
                                <tr class="ticket-tr">
                                    <td>{{$index+1}}</td>
                                    <td>{{$branch->name}}</td>
                                    <td>{{$branch->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.branches.edit' , ['id' => $branch->id])}}"
                                           class="icon-btn fa fa-wrench" title="Edit"></a>
                                        <button
                                                data-url="{{route('admin.branches.delete' ,['id' => $branch->id])}}"
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