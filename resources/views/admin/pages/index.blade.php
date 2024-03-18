@extends('admin.layouts.master')
@section('content')
    <div class="content">
        <div class="col-sm-12">
            <div class="widget">
                <div class="widget-content">
                    <div class="col-sm-12">
                        <img src="{{asset('public/admin/images/logo.png')}}" class="intro-logo" width="100px">
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Member::count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Members</div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Product::count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Branch::count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Branch</div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Message::count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Messages</div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Competition::count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Total users</div>
                            </div>
                        </div>
                    </div>
                    <div class="funfact-lists">
                        <div class="col-sm-6">
                            <div class="counter">
                                <h3 class="timer" data-to="{{\App\Models\Competition::where('longitude' , '!=' , null)->count()}}" data-speed="2000">0</h3>
                                <div class="count-name">Located users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection