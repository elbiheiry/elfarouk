<div class="form-title">{{$agent->name}}</div>
<div class="info">
    <i class="fa fa-map-marker"></i>
    {{$agent->address}}
</div>
<div class="info">
    <i class="fa fa-phone"></i> رقم الهاتف :
    <a href="tel:+{{$agent->phone}}">{{$agent->phone}}</a>
</div>
<iframe src="{{$agent->map}}" width="100%" height="350" frameborder="0" style="border:0;"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>