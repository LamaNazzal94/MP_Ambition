<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        .btn-google {
            color: #545454;
            background-color: #ffffff;
            box-shadow: 0 1px 2px 1px #ddd;
        }
    </style>
</head>

<body>


    <!-- Session Status -->
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center " style="height: 650px">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                            <!-- Name -->
        <div class="form-outline mb-4">
            <x-text-input id="name" class="form-control form-control-lg" placeholder="Your name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <x-text-input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="email" :value="old('email')" required
                                autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <x-text-input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                        </div>

                          <!-- Confirm Password -->
        <div class="mt-4">
          

            <x-text-input id="password_confirmation" class="form-control form-control-lg"
                            type="password"  placeholder="Comfirm password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


                      

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

          
        </div>
                        {{-- <div class="divider d-flex align-items-center my-3">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-lg btn-google btn-block  btn-outline"
                                    href="#"><img width="30px" height="30px"
                                        src="https://img.icons8.com/color/16/000000/google-logo.png"> Sign up Using
                                    Google</a>

                            </div>
                        </div> --}}

                        <div class="text-center text-lg-start mt-4 pt-2">
                           
                            <x-primary-button class="btn btn-primary btn-lg">
                                {{ __('Register') }}
                            </x-primary-button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Do you have an account? <a
                                class="link-danger" href="{{ route('login') }}"
                                    >Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
