<x-app-layout>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Welcome, {{ Auth::user()->username }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional
                                content. This content is a little bit longer.</p>
                            <a href="{{ route('Travellog.create') }}" type="button" class="btn btn-primary">Create a New
                                Travellog</a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <img src="{{ asset('images/undraw_settings_tab_mgiw.png') }}"
                            class="img-fluid rounded-start float-end" alt="welcome" width="300">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <h4 class="d-inline fw-bold">Details Information</h4>
    <p class="text-muted mt-0">For the code click on above code icon</p>
    <div class="row">
        <div class="col-lg-4 col-md-12 d-flex">
            <div class="card w-100">
                <div class="card-body flex-fill">
                    <div class="d-flex flex-row">
                        <div class=""><i class="bi bi-person-fill  fs-3"></i>
                        </div>
                        <div class="pl-3">
                            <h4 class="font-weight-medium">{{ Auth::user()->name }}</h4>
                            <h6>{{ Auth::user()->username }}</h6>
                        </div>
                    </div>
                    <div class="row mt-4 pt-2">
                        <div class="col border-right">
                            <h2 class="font-weight-light">{{ $total->count()}}</h2>
                            <h6>Total</h6>
                        </div>
                        <div class="col border-right">
                            <h2 class="font-weight-bold">{{ $travellogs->where('checkout',NULL)->count()}}</h2>
                            <h6 class="fw-bold">Checkout</h6>
                        </div>
                        <div class="col">
                            <h2 class="font-weight-light">{{ $travellogs->where('checkout',!NULL)->count()}}</h2>
                            <h6>Checked</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top">
                    <p class="text-center scrollable" style="overflow: hidden; width: auto; height: 130px;">
                        {{ Auth::user()->description }}
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Checkin</h5>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">{{ $checkin->count() }}</span>
                                    <h5 class="text-muted mt-5">Today checked</h5>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="{{ $checkin->count() == 0 &&
                                        $travellogs->count() == 0 ? '0' :
                                        round($checkin->count() / $travellogs->count() * 100, -1) }}%" class="css-bar mb-5 css-bar-success css-bar-{{ $checkin->count() == 0 &&
                                        $travellogs->count() == 0 ? '0' :
                                        round($checkin->count() / $travellogs->count() * 100, -1) }}"><i
                                            class="bi bi-check"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body ">
                            <h5 class="card-title fw-bold">Checkout</h5>
                            <div class="d-flex flex-row">
                                <div class="align-self-center">
                                    <span class="display-6">{{ $checkout->count() }}</span>
                                    <h5 class="text-muted mt-5">Today checkout</h5>
                                </div>
                                <div class="ml-auto">
                                    <div data-label="{{ $checkout->count() == 0 &&
                                                                            $travellogs->count() == 0 ? '0' :
                                                                            round($checkout->count() / $travellogs->count() * 100, -1) }}%"
                                        class="css-bar mb-5 css-bar-danger css-bar-{{ $checkout->count() == 0 &&
                                                                            $travellogs->count() == 0 ? '0' :
                                                                            round($checkout->count() / $travellogs->count() * 100, -1) }}">
                                        <i class="bi bi-x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Charts</h5>
                    <div id="visitor" class="mt-3 m-auto" style="height:300px; width:300px;"></div>
                    <div class="round-overlap mt-2"><i class="bi bi-geo-fill"></i></div>
                    <ul class="list-inline mt-4 text-center pt-1">
                        <li class="list-inline-item"><i class="fa fa-circle text-primary"></i> Checked</li>
                        <li class="list-inline-item"><i class="fa fa-circle text-danger"></i> Unchecked</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    @if (is_null($travellogs))

    @else
    <h4 class="d-inline fw-bold">Perjalanan Terbaru</h4>
    <p class="text-muted mt-0">For the code click on above code icon</p>
    @endif

    <div class="row">
        <div class="col-md-12">
            <!-- Swiper -->
            <div class="swiper dashSwiper">
                <div class="swiper-wrapper mb-3">
                    @foreach ($travellogs as $travellog)
                    <div class="swiper-slide">

                        <div class="img-responsive d-flex">
                            <!-- Card -->
                            <div class="card flex-column w-100">
                                <img class="card-img-top img-responsive w-100"
                                    src="{{ $travellog->image == null ? 'https://source.unsplash.com/random/?'.$travellog->location : 'images/'.$travellog->image }}"
                                    style="
                                    height: 300px;
                                    object-fit: cover;" alt="Card image cap">
                                <div class="card-body flex-fill">
                                    <a class="fs-5 " href="{{ route('Travellog.show',$travellog->id) }}"
                                        class="card-title">{{ $travellog->location }}</a>
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


                                    <p class="card-text">{{ $travellog->keterangan }}</p>

                                    @if (is_null($travellog->checkout))


                                    <form class="btn-group"
                                        action="{{ route('Travellog.checkout', ['id' => $travellog->id]) }}"
                                        method="post">
                                        {{ csrf_field() }}

                                        <input type="submit" class="btn btn-warning rounded-3 text-bold"
                                            value="Checkout" />
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
                            <!-- Card -->
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>





</x-app-layout>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".dashSwiper", {
        slidesPerView: 4,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        });
</script>

<script>
    $(function () {
        "use strict";
        var chart = c3.generate({
        bindto: '#visitor',
        data: {
        columns: [
        ['checked', {{ $checkin->count() }}],
        ['unchecked', {{ $checkout->count() }}],
        
        ],
        
        type: 'donut',
        tooltip: {
        show: true
        }
        },
        donut: {
        label: {
        show: false
        },
        title: "",
        width: 15,
        },
        
        legend: {
        hide: true
        },
        color: {
        pattern: ['#009EFB', '#FC4B6C']
        }
        });
        // ############################################################
        // Revenue Statistics
        // ############################################################
        new Chartist.Line('.revenue', {
        labels: ['0', '4', '8', '12', '16', '20', '24', '30']
        , series: [
        [0, 2, 3.5, 0, 13, 1, 4, 1]
        , [0, 4, 0, 4, 0, 4, 0, 4]
        ]
        }, {
        high: 15
        , low: 0
        , showArea: true
        , fullWidth: true
        , plugins: [
        Chartist.plugins.tooltip()
        ],
        // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
        axisY: {
        onlyInteger: true
        , offset: 20
        , labelInterpolationFnc: function (value) {
        return (value / 1) + 'k';
        }
        }
        });
        
        // ############################################################
        // Sales difference
        // ############################################################
        new Chartist.Pie('.sales-diff', {
        series: [35, 15, 10]
        }, {
        donut: true
        , donutWidth: 20
        , startAngle: 0
        , showLabel: false
        });
        });
</script>