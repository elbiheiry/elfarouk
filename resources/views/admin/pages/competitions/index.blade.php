@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
@endpush
@section('models')
    <div class="modal fade" id="map" tabindex="-1" role="dialog" aria-hidden="true">

    </div>
@endsection
@section('content')
    <div class="content">
        <div class="col-sm-12 page-heading">
            <div class="col-sm-6">
                <h2>competitions</h2>
            </div><!--End col-md-6-->
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="{{route('admin.dashboard')}}">dashboard</a></li>
                    <li class="active">competitions</li>
                </ul>
            </div><!--End col-md-6-->
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div id="mapid" style="width: 1100px; height: 500px;"></div>
                </div>
            </div>
        </div>
        <div class="spacer-15"></div>
        <div class="widget">
            <div class="widget-content">
                <div class="col-sm-12">
                    <div class="add-user-form">
                        <form class="competition-form" method="post" action="{{route('admin.competitions.filter')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-6 form-group">
                                <label>Name : </label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Age : </label>
                                <input class="form-control" type="text" name="age">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Phone : </label>
                                <input class="form-control" type="text" name="phone">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>government : </label>
                                <input class="form-control" type="text" name="government">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>From date : </label>
                                <input class="form-control" type="date" name="from">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>To date : </label>
                                <input class="form-control" type="date" name="to">
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
                <div class="col-sm-12" id="competitions-area">
                    @include('admin.pages.competitions.templates.index')
                    {!! $competitions->links() !!}
                </div>
            </div>
        </div><!--End Widget-->
    </div>
@endsection
@push('js')
    <script>
        $('.competition-form').on('submit', function () {
            var form = $(this);

            $.ajax({
                url: "{{route('admin.competitions.filter')}}",
                method: 'post',
                dataType: 'json',
                data: form.serialize(),
                success: function (response) {
                    $('#competitions-area').html(response.html);
                }
            });

            return false;
        })

        $(document).on('click', '.mapBTN', function () {
            var $this = $(this);
            var url = $this.data('url');
            var originalHtml = $this.html();

            $.ajax({
                url: url,
                method: 'GET',
                success: function (data) {
                    $this.prop('disabled', false).html(originalHtml);
                    $('#map').modal('show').html(data);
                }
            });
        });


        var locations = [
            @foreach($dimensions as $dimension)
                [
                {{$dimension->longitude}},
                {{$dimension->latitude}},
                "{{$dimension->name}}",
                "{{$dimension->government}}",
                "{{$dimension->phone}}"
            ],
            @endforeach
        ];

        var map = L.map('mapid').setView([30.5972, 30.9876], 8);
        mapLink =
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; ' + mapLink + ' Contributors',
                maxZoom: 18,
            }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][1], locations[i][0]])
                .bindPopup(locations[i][2]+","+locations[i][3]+","+locations[i][4])
                .addTo(map);
        }
    </script>
@endpush