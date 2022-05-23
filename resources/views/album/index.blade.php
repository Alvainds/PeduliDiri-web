<x-app-layout>
    <div class="d-flex flex-wrap justify-content-start">
        @foreach ($travellogs as $travellog)
        <div class="d-flex flex-column">
            <a>
                <img data-toggle="modal" data-target="#myModal{{ $travellog->id }}" class="img-fluid border card m-1"
                    style="object-fit: cover;height:180px;"
                    src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : asset('images/'.$travellog->image) }}"
                    alt="Card image cap">

            </a>
        </div>

        <!-- sample modal content -->
        <div id="myModal{{ $travellog->id }}" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                        <h4 class="modal-title" id="myModalLabel">Photos Information</h4>
                        <button type="button" class="close ml-auto" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <img class="img-fluid border card mb-3 w-100" style="object-fit: cover;height:180px;"
                            src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : asset('images/'.$travellog->image) }}"
                            alt="Card image cap">
                        <h6 class="fw-bold">Location</h6>
                        <p>{{ $travellog->location }}</p>
                        <hr>
                        <h6 class="fw-bold">Description</h6>
                        <p>{{$travellog->keterangan}}</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        @endforeach
    </div>



</x-app-layout>