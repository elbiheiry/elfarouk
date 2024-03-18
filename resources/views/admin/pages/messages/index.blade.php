@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>messages</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">messages</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
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
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Created at</th>
                            <th>Options</th>
                            </thead>
                            <tbody>
                            @foreach($messages as $index => $message)
                                <tr class="ticket-tr">
                                    <td>{{$index+1}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>{{$message->created_at}}</td>
                                    <td>
                                        <button
                                                data-url="{{route('admin.messages.delete' ,['id' => $message->id])}}"
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