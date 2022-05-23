<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>PeduliDiri Login</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('monster/dist/css/style.min.css') }}" rel="stylesheet">


</head>

<body>
    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
            style="background:url(../assets/images/background/login-register.jpg) no-repeat top center;">
            <div class="auth-box p-5 bg-white rounded">
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3 fw-bold">Sign In</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eius quae laboriosam facere
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="alert alert-danger mb-3" :errors="$errors" />

                            <form class="form-horizontal mt-3 form-material" id="loginform" method="POST"
                                action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="form-group mb-3">
                                    <x-input id="nik"
                                        class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                        placeholder="NIK" type="text" name="nik" :value="old('nik')" required
                                        autofocus />
                                </div>


                                <!-- Password -->
                                <div class="form-group mb-3">

                                    <x-input id="password"
                                        class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                        placeholder="Password" type="password" name="password" required
                                        autocomplete="current-password" />
                                </div>

                                <div class="form-group mb-3 d-flex">
                                    <!-- Remember Me -->
                                    <div class="block ">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input value="1" id="remember_me" type="checkbox"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </div>



                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" id="to-recover"
                                    class="text-dark ml-auto mb-3 float-end">
                                    <i class="fa fa-lock mr-1"></i>
                                    Forgot
                                    pwd?
                                </a>
                                @endif



                                <div class="form-group text-center">
                                    <x-button class="btn btn-info btn-lg btn-block waves-effect waves-light"
                                        type="submit">
                                        {{ __('Log in') }}
                                    </x-button>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="text-center">
                                        <p>Don't have an account? <a href="{{ route('register') }}"
                                                class="text-info font-weight-normal ml-1">Sign Up</a></p>
                                    </div>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

    <script src="{{ asset('src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>


</body>

</html>