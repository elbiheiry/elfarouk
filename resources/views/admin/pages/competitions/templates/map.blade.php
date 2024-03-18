<div class="modal-dialog" role="document">
    <form class="modal-content text-center" id="delete-form">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Map</h5>
        </div>
        <div class="modal-body text-center">
            <iframe
                    width="300"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.com/maps?q={{$competition->latitude}},{{$competition->longitude}}&hl=es&z=14&amp;output=embed"
            >
            </iframe>
        </div>
        <div class="modal-footer text-center">

            <button type="button" class="custom-btn" data-dismiss="modal">
                <i class="fa fa-times"></i>Dismiss
            </button>
        </div>
    </form>
</div>