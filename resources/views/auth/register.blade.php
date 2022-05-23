<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Peduli Diri - Register</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('monster/dist/css/style.min.css') }}" rel="stylesheet">


</head>

<body class="">
    <div class="main-wrapper">

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center my-5">
            <div class="auth-box p-5 bg-white rounded">
                <div>
                    <div class="logo">
                        <h3 class="box-title fw-bold mb-3">Sign Up</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum eius quae laboriosam facere
                        </p>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Validation Errors -->
                            @if(count($errors) > 0 )
                            <div class="alert alert-danger" role="alert">
                                <strong>Terdapat Kesalahan</strong>
                                <ul class="px-3 m-0">
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('register') }}"
                                class="form-horizontal  mt-3 form-material">
                                @csrf

                                <!-- Username -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="username"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            type="text" name="username" :value="old('username')" placeholder="Username"
                                            required autofocus />
                                    </div>
                                </div>

                                <!-- Name -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="name"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            type="text" name="name" :value="old('name')" placeholder="Name" required
                                            autofocus />
                                    </div>



                                </div>

                                <!-- nik -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="nik"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            type="number " name="nik" maxlength="16" :value="old('nik')"
                                            placeholder="NIK" required
                                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            autofocus />
                                    </div>
                                </div>



                                <!-- Email Address -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="email"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            type="email" name="email" :value="old('email')" placeholder="Email"
                                            required />
                                    </div>



                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <textarea rows="4" placeholder="Description" style="height:100%;"
                                            name="description"
                                            class="form-control form-control-line border py-3 px-3 rounded-3"></textarea>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="password"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            placeholder="Password" type="password" name="password" required
                                            autocomplete="new-password" />
                                    </div>



                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <x-input id="password_confirmation"
                                            class="form-control {{ count($errors) > 0 ? 'text-danger' : '' }} border py-4 px-3 rounded-3"
                                            type="password" name="password_confirmation" placeholder="Confirm Password"
                                            required />
                                    </div>

                                </div>
                                <div class="form-group text-center mb-3">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block waves-effect waves-light ">
                                            Register
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group mb-0 mt-2 ">
                                    <div class="col-sm-12 text-center ">
                                        Already have an account? <a href="{{ route('login') }}"
                                            class="text-info ml-1 ">Sign In</a>
                                    </div>
                                </div>
                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>