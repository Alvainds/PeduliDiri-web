<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="{{ asset('https://unpkg.com/swiper@8/swiper-bundle.min.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('https://unpkg.com/swiper@8/swiper-bundle.min.css') }}" />

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css') }}"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Custom CSS -->
    <link href="{{ asset('monster/src/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('monster/src/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('monster/src/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('monster/dist/js/pages/chartist/chartist-init.css') }}" rel="stylesheet">
    <link href="{{ asset('monster/src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}"
        rel="stylesheet">
    <link href="{{ asset('monster/src/assets/extra-libs/css-chart/css-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('monster/src/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('monster/dist/css/style.min.css') }}" rel="stylesheet">

    {{-- Datatables Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />

    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>

    <script src="{{ asset('monster/dist/js/pages/contact/contact.js') }}"></script>

    {{-- Datatables Script --}}
    <script type="text/javascript" charset="utf8" src="{{ asset('DataTables/datatables.min.js') }}">
    </script>

</head>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>



<body class="font-sans antialiased">

    <div id="main-wrapper">

        @include('layouts.navigation')

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-md-5 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-dark" href="{{ route('Dashboard.index') }}">Dashboard</a>
                                    </li>
                                    <?php $segments = ''; ?>
                                    @foreach(Request::segments() as $segment)
                                    <?php $segments .= '/'.$segment; ?>
                                    <li class="breadcrumb-item"><a href="{{ $segments }}">{{$segment}}</a></li>
                                    @endforeach

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
            <footer class="footer">
                © 2022 Peduli Diri by Alvainds
            </footer>
        </div>

    </div>

    <script>
        $(document).ready(function () {
                $('#table_id').DataTable(
                    {
                    dom: 'Bfrtip',
                    buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                    }
                );
            }

        );
    </script>



    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('monster/src/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('monster/src/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- apps -->
    <script src="{{ asset('monster/dist/js/app.min.js') }}"></script>


    <script src="{{ asset('monster/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('monster/dist/js/app-style-switcher.js') }}"></script>



    <!--Wave Effects -->
    <script src="{{ asset('monster/dist/js/waves.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('monster/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('monster/dist/js/app.init.horizontal.js') }}"></script>
    <script src="{{ asset('monster/dist/js/app-style-switcher.horizontal.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('monster/src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset('monster/src/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('monster/dist/js/waves.js') }}"></script>

    <!--Menu sidebar -->
    <script src="{{ asset('monster/dist/js/sidebarmenu.js') }}"></script>

    <!--Custom JavaScript -->
    <script src="{{ asset('monster/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('monster/dist/js/custom.min.js') }}"></script>


    <script src="{{ asset('monster/src/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('monster/src/assets/libs/echarts/dist/echarts.min.js') }}"></script>
    <script src="{{ asset('monster/src/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
    </script>

    <!--c3 charts -->
    <script src="{{ asset('monster/src/assets/libs/d3/dist/d3.min.js') }}"></script>
    <script src="{{ asset('monster/src/assets/libs/c3/c3.min.js') }}"></script>

    <script src="{{ asset('monster/src/assets/libs/typeahead.js/dist/typeahead.jquery.min.js') }}"></script>
    <script src="{{ asset('monster/src/assets/libs/typeahead.js/dist/bloodhound.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
                    var form =  $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                        form.submit();
                        }
                    });
                });
    </script>







</body>

</html>