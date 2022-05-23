<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Travel Log') }}
        </h2>
    </x-slot>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $travellog->location }}</h3>
                    <h6 class="card-subtitle">Location</h6>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box text-center"> <img class="w-100"
                                    style="object-fit: cover;max-height: 300px;"
                                    src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : asset('images/'.$travellog->image) }}"
                                    class="img-responsive"> </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-9 col-md-9 col-sm-6">
                            <h4 class="box-title mt-5">Travellog description</h4>
                            <p>{{ $travellog->keterangan }}</p>

                            @if (is_null($travellog->checkout))


                            <form class="btn-group" action="{{ route('Travellog.checkout', ['id' => $travellog->id]) }}"
                                method="post">
                                {{ csrf_field() }}

                                <input type="submit" class="btn btn-warning rounded-3 text-bold" value="Checkout" />
                            </form>
                            @else

                            <div class="mt-auto">
                                <button type="button" class="btn btn-success text-bold" disabled><i
                                        class="bi bi-check"></i>
                                    Checked
                                </button>

                            </div>
                            @endif

                        </div>

                    </div>
                    <h3 class="box-title mt-3">General Info</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td width="390" class="fw-bold">Nama Lengkap</td>
                                    <td> {{ Auth::user()->name }} </td>
                                </tr>
                                <tr>
                                    <td width="390" class="fw-bold">NIK</td>
                                    <td> {{ Auth::user()->nik }} </td>
                                </tr>
                                <tr>
                                    <td width="390" class="fw-bold">Lokasi Checkin</td>
                                    <td> {{ $travellog->location }} </td>
                                </tr>
                                <tr>
                                    <td width="390" class="fw-bold">Tanggal & Waktu Checkin</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($travellog->checkin)->format('M d Y') }}
                                        {{ Carbon\Carbon::parse($travellog->checkin)->format('H:i') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td width="390" class="fw-bold">Tanggal & Waktu Checout</td>
                                    <td>
                                        {{ Carbon\Carbon::parse($travellog->checkout)->format('M d Y') }}
                                        {{ Carbon\Carbon::parse($travellog->checkout)->format('H:i') }}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>




</x-app-layout>