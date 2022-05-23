<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Travel Log') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">General Form</h4>



                    <h6 class="card-subtitle "> All with bootstrap element classies </h6>

                    @if($errors->any())
                    <div class="alert alert-success">
                        <p>{{ $errors }}</p>
                    </div>
                    @endif

                    <form enctype="multipart/form-data" class="mt-3"
                        action="{{ route('Travellog.update', $travellog->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md mb-3">
                                <label class="form-label text-muted">Tanggal {{ $travellog->date }}</label>
                                <input value="{{ $travellog->date }}" class="form-control" name="date" type="date" />
                            </div>
                            <div class="col-md mb-3">
                                <label class="form-label text-muted">Waktu</label>
                                <input value="{{ $travellog->checkin }}" class="form-control" name="checkin"
                                    type="time" />
                            </div>
                        </div>


                        <div class=" mb-3">
                            <label class="form-label text-muted">Checkout</label>
                            <input value="{{
                                Carbon\Carbon::parse($travellog->checkout)->format('Y-m-d\TH:i:s') }}"
                                class="form-control" name="checkout" type="datetime-local" />
                        </div>

                        <img class="w-100 border mb-3" style="object-fit: cover;max-height: 175px;"
                            src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : asset('images/'.$travellog->image) }}">

                        <div class="mb-3">
                            <label class="form-label text-muted">Gambar</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-floating mb-3">
                            <div id="the-basics">
                                <label class="form-label text-muted">Nama Kota/Tempat</label>
                                <input value="{{ $travellog->location }}" name="location" class="typeahead form-control"
                                    id="floatingInput" list="datalistOptions" id="exampleDataList"
                                    placeholder="Cari Kota">
                            </div>

                        </div>
                        <label class="form-label text-muted">Suhu Badan</label>
                        <div class="form-floating mb-3">

                            <label for="floatingInput">Suhu Badan</label>
                            <div class="input-group mb-3">
                                <input value="{{ $travellog->temperature }}" type="number" name="temperature"
                                    maxlength="1" pattern="[0-9]+([\.,][0-9]+)?" step="0.01" name="location"
                                    class="form-control" id="floatingInput" placeholder="Masukkan suhu badan" required
                                    autofocus>
                                <span class="input-group-text fw-bold">℃</span>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="keterangan" placeholder="Leave a comment here"
                                id="floatingTextarea2" placeholder="" style="height: 100px" required autofocus>{{ $travellog->keterangan }}
                        </textarea>
                            <label for="floatingTextarea2">Keterangan</label>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="{{ route('Dashboard.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<script type="text/javascript">
    //*************
    //The basics
    //*************
    var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
    var matches, substringRegex;
    
    // an array that will be populated with substring matches
    matches = [];
    
    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');
    
    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
    if (substrRegex.test(str)) {
    matches.push(str);
    }
    });
    
    cb(matches);
    };
    };
    
    var states = [
        
    @foreach ($districts as $district)
    "{{ $district }}",
    @endforeach

    ];;
    
    
    $('#the-basics .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
    },
    {
    name: 'states',
    source: substringMatcher(states)
    });
    
</script>