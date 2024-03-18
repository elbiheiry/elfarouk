@foreach($medias as $media)
    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery_item">
            <img src="{{asset('storage/app/public/media/'.$media->image)}}">
            @if($media->video == null)
                <a href="{{asset('storage/app/public/media/'.$media->image)}}" data-fancybox="gallery"
                   class="fa fa-image"></a>
            @else
                <a href="https://www.youtube.com/watch?v={{$media->video}}&ab_channel=AlFaroukFoods"
                   data-fancybox="gallery" class="fa fa-video"></a>
            @endif
        </div>
    </div><!-- End Col -->
@endforeach