<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PeduliDiri | LandingPage </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('productly/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('productly/assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container">
                <i class="bi bi-geo-alt-fill fs-4 px-3 text-primary"></i>
                <a class="navbar-brand fw-bold" href="/">Peduli Diri</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('Travellog.create') }}">Buat Log</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page"
                                href="{{ route('Travellog.index') }}">Logs</a>
                        </li>

                    </ul>
                    @if (Route::has('login'))
                    <div class="d-flex ms-lg-4">
                        @auth
                        <a href="{{ route('Dashboard.index') }}" class="btn btn-warning rounded-pill">Dashboard</a>
                        @else
                        <a class="btn btn-secondary-outline rounded-pill" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                        <a class="btn btn-warning ms-3 rounded-pill" href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <section class="pt-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center py-6">
                        <h1 class="mb-4 fs-9 fw-bold">EXPLORE. CREATE. INSPIRE.</h1>
                        <p class="mb-6 lead text-secondary">Tools tutorials, design and innovation experts, all<br
                                class="d-none d-xl-block" />in one place! The most intuitive way to imagine<br
                                class="d-none d-xl-block" />your next user experience.</p>
                        <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg rounded-pill"
                                href="#!" role="button">Mulai Perjalanan Saya</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                            src="{{ asset('images/undraw_Adventure_re_ncqp.png') }}" alt="" /></div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        {{-- <section class="pt-5 pt-md-9 mb-6" id="feature">


            <!--/.bg-holder-->

            <div class="container">
                <h1 class="fs-9 fw-bold mb-4 text-center"> We design tools to unveil <br
                        class="d-none d-xl-block" />your
                    superpowers</h1>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3"
                            src="{{ asset('productly/assets/img/category/icon1.png') }}" width="75" alt="Feature" />
                        <h4 class="mb-3">First click tests</h4>
                        <p class="mb-0 fw-medium text-secondary">While most people enjoy casino gambling,</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3"
                            src="{{ asset('productly/assets/img/category/icon2.png') }}" width="75" alt="Feature" />
                        <h4 class="mb-3">Design surveys</h4>
                        <p class="mb-0 fw-medium text-secondary">Sports betting,lottery and bingo playing for the fun
                        </p>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3"
                            src="{{ asset('productly/assets/img/category/icon3.png') }}" width="75" alt="Feature" />
                        <h4 class="mb-3">Preference tests</h4>
                        <p class="mb-0 fw-medium text-secondary">The Myspace page defines the individual.</p>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3"
                            src="{{ asset('productly/assets/img/category/icon4.png') }}" width="75" alt="Feature" />
                        <h4 class="mb-3">Five second tests</h4>
                        <p class="mb-0 fw-medium text-secondary">Personal choices and the overall personality of the
                            person.</p>
                    </div>
                </div>
                <div class="text-center"><a class="btn btn-warning" href="#!" role="button">SIGN UP NOW</a></div>
            </div><!-- end of .container-->

        </section> --}}
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="validation">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('images/undraw_Sign_in_re_o58h.png') }}"
                            alt="" />
                    </div>
                    <div class="col-lg-6 p-4">
                        <h5 class="text-secondary">Effortless Validation for</h5>
                        <p class="fs-7 fw-bold mb-2">Product Managers</p>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nam, placeat nobis
                            consequuntur dolor corporis minus facere. Velit expedita quis, animi nostrum, vero ipsum
                            delectus corrupti tempora numquam voluptatibus natus.
                        </p>

                    </div>

                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="marketer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-4">
                        <h5 class="text-secondary">Optimisation for</h5>
                        <p class="mb-2 fs-8 fw-bold">Marketers</p>
                        <p class="mb-4 fw-medium text-secondary">Few would argue that, despite the advancements
                            of<br />feminism
                            over the past three decades, women still face a<br />double standard when it comes to their
                            behavior.</p>
                        <h4 class="fw-bold fs-1">Accessory makers</h4>
                        <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports
                            betting,<br />lottery and bingo playing for the fun</p>

                    </div>
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('images/undraw_grid_design_obmd.png') }}"
                            alt="" />
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="manager">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="img-fluid"
                            src="{{ asset('images/undraw_My_current_location_re_whmt.png') }}" alt="" /></div>
                    <div class="col-lg-6 p-4">
                        <h5 class="text-secondary">Easier decision making for</h5>
                        <p class="fs-7 fw-bold mb-2">Product Managers</p>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                        </p>
                        <div class="d-flex align-items-center mb-3"> <i
                                class="bi bi-check-circle-fill text-primary fs-4 pe-3"></i>
                            <p class="fw-medium mb-0 text-secondary">Never worry about overpaying for your<br />energy
                                again.</p>
                        </div>
                        <div class="d-flex align-items-center mb-3"> <i
                                class="bi bi-check-circle-fill text-primary fs-4 pe-3"></i>
                            <p class="fw-medium mb-0 text-secondary">We will only switch you to energy
                                companies<br />that we trust
                                and will treat you right</p>
                        </div>
                        <div class="d-flex align-items-center mb-3"><i
                                class="bi bi-check-circle-fill text-primary fs-4 pe-3"></i>
                            <p class="fw-medium mb-0 text-secondary"> We track the markets daily and know where
                                the<br />savings are.
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->









        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-md-11 py-8" id="superhero">

            <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top"
                style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="fw-bold mb-4 fs-7">Need a super hero?</h1>
                        <p class="mb-5 text-info fw-medium">Do you require some help for your project: Conception
                            workshop,<br />prototyping, marketing strategy, landing page, Ux/UI?</p>
                        <button class="btn btn-warning btn-md">Contact our expert</button>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="marketing">

            <div class="container">
                <h1 class="fw-bold fs-6 mb-3">Marketing Strategies</h1>
                <p class="mb-6 text-secondary">Join 40,000+ other marketers and get proven strategies on email marketing
                </p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png" alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing02.png" alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing03.png" alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-2 pb-lg-5">

            <div class="container">
                <div class="row border-top border-top-secondary pt-7">
                    <div
                        class="col-lg-3 col-md-6 mb-4 mb-md-6 mb-lg-0 mb-sm-2 order-1 order-md-1 order-lg-1 text-primary fw-bolder fs-2">
                        <i class="bi bi-geo-alt-fill fs-4 px-3 "></i>
                        Peduli Diri
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-3 order-md-3 order-lg-2">
                        <p class="fs-2 mb-lg-4">Quick Links</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">About
                                    us</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Blog</a>
                            </li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Contact</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 order-4 order-md-4 order-lg-3">
                        <p class="fs-2 mb-lg-4">Legal stuff</p>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Disclaimer</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none"
                                    href="#!">Financing</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Privacy
                                    Policy</a></li>
                            <li class="mb-1"><a class="link-900 text-secondary text-decoration-none" href="#!">Terms of
                                    Service</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 mb-4 mb-lg-0 order-2 order-md-2 order-lg-4">
                        <p class="fs-2 mb-lg-4">
                            knowing you're always on the best energy deal.</p>
                        <form class="mb-3">
                            <input class="form-control" type="email" placeholder="Enter your phone Number"
                                aria-label="phone" />
                        </form>
                        <button class="btn btn-warning fw-medium py-1">Sign up Now</button>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="text-center py-0">

            <div class="container">
                <div class="container border-top py-3">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-auto mb-1 mb-md-0">
                            <p class="mb-0">&copy; 2022 PeduliDiri </p>
                        </div>

                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <iframe class="rounded" style="width:100%;height:500px;" src="https://www.youtube.com/embed/_lhdhL4UDIo"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('productly/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('productly/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('productly/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('https://polyfill.io/v3/polyfill.min.js?features=window.scroll') }}"></script>
    <script src="{{ asset('productly/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('productly/assets/js/theme.js') }}"></script>

    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap') }}"
        rel="stylesheet">
</body>

</html>