<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Auth Section</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
        body {
            font-family: 'Poppins', sans-serif !important;
        }

        /* add padding on input */
        .text-indent {
            text-indent: .5rem;
        }

        /* add password hide and show icon */
        .password__icon {
            position: absolute;
            right: 0;
            padding: 15px 20px;
            cursor: pointer;
        }

        /* background grey */
        .bg-grey-light {
            background: #f0f0f0;
        }

        .bg-grey-light:focus {
            background: #f0f0f0;
        }

        @media (min-width: 1024px) {
            body {
                overflow-y: hidden;
            }

            /* add circle blue background */
            .ball {
                overflow: hidden;
                transition: margin 1s;
                width: 600px;
                height: 600px;
            }

            .ball.login {
                margin-left: 50%;
                margin-top: 5%;
            }

            .ball.register {
                margin-left: 14%;
                margin-top: 6%;
            }

            /* bouncing effect */
            .bounce {
                animation: bounce 2s infinite alternate;
                -webkit-animation: bounce 2s infinite alternate;
            }

            @keyframes bounce {
                from {
                    transform: translateY(0px);
                }

                to {
                    transform: translateY(-35px);
                }
            }

            @-webkit-keyframes bounce {
                from {
                    transform: translateY(0px);
                }

                to {
                    transform: translateY(-35px);
                }
            }

            /* register form active */
            .register__form.active {
                margin-left: 10% !important;
                opacity: 1;
            }

            /* login form active */
            .login__form.active {
                opacity: 1;
                margin-left: 10% !important;
            }
        }

        @media (max-width: 768px) {
            .container .col-12.p-5 {
                padding: 0px !important;
            }

            body {
                overflow-x: hidden;
            }
        }

        /* register default */
        .register__form {
            position: absolute;
            width: 100%;
            height: 100vh;
            margin-left: -100%;
            opacity: 0;
            transition: margin 1s, opacity .5s;
            z-index: 1;
        }

        /* register form active */
        .register__form.active {
            margin-left: 0%;
            opacity: 1;
        }

        /* login form default */
        .login__form {
            position: absolute;
            width: 100%;
            height: 100vh;
            margin-left: -100%;
            opacity: 0;
            transition: margin 1s, opacity .5s;
            z-index: 1;
        }

        /* login form active */
        .login__form.active {
            opacity: 1;
            margin-left: 0%;
        }
    </style>

</head>

<body>

    <!-- blue circle background -->
    <div class="d-none d-md-block ball login bg-primary bg-gradient position-absolute rounded-circle"></div>

    <!-- logo name -->
    <div class="position-absolute top-0 start-0 p-3">
        <a href="https://www.youtube.com/channel/UCRv_tLsJllG18IhDkpNzh_w" class="text-decoration-none fw-bold fs-5">Webland.</a>
    </div>

    <!-- Login Section -->
    <div class="container login__form active">
        <div class="row vh-100 w-100 align-self-center">
            <div class="col-12 col-lg-6 col-xl-6 px-5">
                <div class="row vh-100">
                    <div class="col align-self-center p-5 w-100">
                        <h3 class="fw-bolder">WELCOME BACK !</h3>
                        <p class="fw-lighter fs-6">Don't have an account,<a href="{{ route('register') }}"> <span id="signUp" role="button" class="text-primary">Register</span></a></p>
                        <!-- form login section -->
                        <form action="{{ route('login') }}" method="POST" class="mt-5">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="d-flex position-relative">
                                    <input type="password" id="password" name="password" class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" required>
                                    <span class="password__icon text-primary fs-4 fw-bold bi bi-eye-slash"></span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-outline-dark btn-lg rounded-pill mt-4 w-100">Login</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 col-xl-6 p-5">
                <div class="row vh-100 p-5">
                    <div class="col align-self-center p-5 text-center">
                    <img src="{{ asset('images/login.png') }}" class="bounce" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        const signUp = document.querySelector("#signUp");
        const signIn = document.querySelector("#signIn");
        const passwordIcon = document.querySelectorAll('.password__icon')
        const authPassword = document.querySelectorAll('.auth__password')

        // when click sign up button
        signUp.addEventListener('click', () => {
            document.querySelector('.login__form').classList.remove('active')
            document.querySelector('.register__form').classList.add('active')
            document.querySelector('.ball').classList.add('register')
            document.querySelector('.ball').classList.remove('login')
        });

        // when click sign in button
        signIn.addEventListener('click', () => {
            document.querySelector('.login__form').classList.add('active')
            document.querySelector('.register__form').classList.remove('active')
            document.querySelector('.ball').classList.add('login')
            document.querySelector('.ball').classList.remove('register')
        });

        // change hidden password to visible password
        for (var i = 0; i < passwordIcon.length; ++i) {
            passwordIcon[i].addEventListener('click', (i) => {
                const lastArray = i.target.classList.length - 1
                if (i.target.classList[lastArray] == 'bi-eye-slash') {
                    i.target.classList.remove('bi-eye-slash')
                    i.target.classList.add('bi-eye')
                    i.currentTarget.parentNode.querySelector('input').type = 'text'
                } else {
                    i.target.classList.add('bi-eye-slash')
                    i.target.classList.remove('bi-eye')
                    i.currentTarget.parentNode.querySelector('input').type = 'password'
                }
            });
        }
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
