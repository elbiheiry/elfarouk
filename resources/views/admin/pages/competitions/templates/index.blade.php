@if(sizeof($competitions) > 0)
    <div class="table-responsive">
        <table class="table table-hover table-bordered display nowrap" cellspacing="0"
               width="100%">
            <thead>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>government</th>
            <th>age</th>
            <th>Options</th>
            </thead>
            <tbody>
            @foreach($competitions as $index => $competition)
                <tr class="ticket-tr">
                    <td>{{$index+1}}</td>
                    <td>{{$competition->name}}</td>
                    <td>{{$competition->phone}}</td>
                    <td>{{$competition->government}}</td>
                    <td>{{$competition->age}}</td>
                    <td>
                        <button
                                data-url="{{route('admin.competitions.delete' ,['id' => $competition->id])}}"
                                data-toggle="modal"
                                data-target="#delete" class="icon-btn fa fa-trash red-bc deleteBTN"
                                title="delete">
                        </button>
                        @if($competition->latitude != null)
                            <button
                                    data-url="{{route('admin.competitions.map' ,['id' => $competition->id])}}"
                                    data-toggle="modal"
                                    data-target="#map" class="icon-btn fa fa-map blue-bc mapBTN"
                                    title="show map">
                            </button>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="alert alert-danger">
        No results where found
    </div>
@endif