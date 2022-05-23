<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Travel Log') }}
        </h2>
    </x-slot>
    @if($errors->any())
    <div class="alert alert-success">
        <p>{{ $errors }}</p>
    </div>
    @endif

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="mt-4">
                        @if (!Auth::user()->avatar)


                        <i class="bi bi-person-circle" style="font-size: 90px"></i>

                        @else

                        <img src="{{ asset('avatars/'.Auth::user()->avatar) }}"
                            class="rounded-circle img-thumbnail mb-3" style="object-fit:cover;width:150px;height:150px">

                        @endif

                        <h4 class="card-title mt-2">{{ Auth::user()->name }}</h4>
                        <h6 class="card-subtitle">{{ Auth::user()->username }}</h6>
                        <div class="row text-center justify-content-md-center mb-3">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                        class="bi bi-check-all fs-5"></i>
                                    <font class="font-weight-medium">{{ $checked->count() }}</font>
                                </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                        class="bi bi-x fs-5 -ml-px"></i>
                                    <font class="font-weight-medium">{{ $checkout->count() }}</font>
                                </a></div>
                        </div>

                        <form method="post" action="/change-avatar" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <input type="file" name="avatar" class="form-control" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                <button class="btn btn-outline-secondary" type="submit"
                                    id="inputGroupFileAddon04">Change</button>
                            </div>
                        </form>



                    </center>
                </div>

                <hr class="my-0">



                <div class="card-body">
                    <p>
                        {{ Auth::user()->description }}
                    </p>
                    <small class="text-muted">Email address </small>
                    <h6>{{ Auth::user()->email }}</h6> <small class="text-muted pt-4 db">NIK</small>
                    <h6>{{ Auth::user()->nik }}</h6>


                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tabs -->
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month"
                            role="tab" aria-controls="pills-timeline" aria-selected="true">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab"
                            aria-controls="pills-profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab"
                            aria-controls="pills-setting" aria-selected="false">Setting</a>
                    </li>
                </ul>
                <!-- Tabs -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="current-month" role="tabpanel"
                        aria-labelledby="pills-timeline-tab">
                        <div class="card-body">

                            @foreach ($timeline as $travellog)
                            <div class="sl-item">

                                <div class="sl-right">
                                    <div>
                                        <a href="{{ route('Travellog.show',$travellog->id) }}"
                                            class="link fw-bold fs-6">
                                            {{ $travellog->location}}
                                        </a>
                                        <span class="sl-date">{{ $travellog->created_at->diffForHumans()}}</span>
                                        <div class="mt-3 row">
                                            <div class="col-md-3 col-xs-12"><img
                                                    src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : asset('images/'.$travellog->image) }}"
                                                    alt="user" class="img-fluid rounded"
                                                    style="max-width: 160px; min-width:160px; max-height:100px;object-fit:cover;" />
                                            </div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> {{ $travellog->keterangan }}</p>
                                                @if (is_null($travellog->checkout))
                                                <p>
                                                    {{ Carbon\Carbon::parse($travellog->checkin)->format('H:i') }} {{
                                                    $travellog->date
                                                    }}
                                                </p>
                                                @else

                                                <p>
                                                    {{ Carbon\Carbon::parse($travellog->checkin)->format('H:i') }}
                                                    {{ Carbon\Carbon::parse($travellog->checkin)->format('M d Y') }}
                                                    sampai
                                                    {{ Carbon\Carbon::parse($travellog->checkout)->format('H:i') }}
                                                    {{ Carbon\Carbon::parse($travellog->checkout)->format('M d Y') }}
                                                </p>

                                                @endif

                                                @if (is_null($travellog->checkout))
                                                <p class="text-danger fw-bold">
                                                    Belum Checkout
                                                </p>
                                                @else

                                                <p class="fw-bold text-success">
                                                    Sudah Checkout
                                                </p>

                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->name }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>NIK</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->nik }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">j{{ Auth::user()->email }}</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Username</strong>
                                    <br>
                                    <p class="text-muted">{{ Auth::user()->username }}</p>
                                </div>
                            </div>
                            <hr>
                            <p class="mt-4">{{ Auth::user()->description }}
                            </p>


                            <h4 class="font-weight-medium mt-4">My Diary</h4>
                            <hr>
                            <h5 class="mt-4">Checked <span class="pull-right">{{ round($checked->count() == 0 &&
                                    $travellogs->count() == 0 ? '0' :
                                    $checked->count() / $travellogs->count() * 100) }}%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{ round($checked->count() == 0 && $travellogs->count() == 0 ? '0' :
                        $checked->count() / $travellogs->count() * 100) }}" aria-valuemin="0" aria-valuemax="100"
                                    style="width:{{ round($checked->count() == 0 && $travellogs->count() == 0 ? '0' :
                                    $checked->count() / $travellogs->count() * 100) }}%; height:6px;"> <span
                                        class="sr-only">50%
                                        Complete</span> </div>
                            </div>
                            <h5 class="mt-4">not Checked <span class="pull-right">{{ round($checkout->count() == 0 &&
                                    $travellogs->count() == 0 ? '0' :
                                    $checkout->count() / $travellogs->count() * 100) }}%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="{{ round($checkout->count() == 0 &&
                                    $travellogs->count() == 0 ? '0' :
                                    $checkout->count() / $travellogs->count() * 100) }}" aria-valuemin="0"
                                    aria-valuemax="100" style="width:{{ round($checkout->count() == 0 &&
                                    $travellogs->count() == 0 ? '0' :
                                    $checkout->count() / $travellogs->count() * 100) }}%; height:6px;"> <span
                                        class="sr-only">50%
                                        Complete</span> </div>
                            </div>


                        </div>
                    </div>

                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form method="POST" action="{{ route('Profile.update', Auth::user()->id) }}"
                                class="form-horizontal form-material">
                                @method('put')
                                @csrf
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="form-group">
                                    <label class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input name="username" type="text" placeholder="your username"
                                            value="{{ Auth::user()->username }}" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input name="name" type="text" value="{{ Auth::user()->name }}"
                                            placeholder="Johnathan Doe" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">NIK</label>
                                    <div class="col-md-12">
                                        <input name="nik" type="text" value="{{ Auth::user()->nik }}"
                                            placeholder="Johnathan Doe" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input name="email" value="{{ Auth::user()->email }}" type="email"
                                            placeholder="johnathan@admin.com" class="form-control form-control-line"
                                            name="example-email" id="example-email">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-12">Message</label>
                                    <div class="col-md-12">
                                        <textarea rows="7" style="height:100%;" name="description"
                                            class="form-control form-control-line">{{ Auth::user()->description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>



</x-app-layout>