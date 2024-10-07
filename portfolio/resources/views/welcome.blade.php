<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @stack('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Css -->
    @push('css')
    <link rel="stylesheet" href="/public/css/home.css">
    @endpush
</head>

<body class="antialiased">
    <div>
        <x-navbar />

        <section class="head">
            <div class="row">
                <div class="col-md-8 my-profile">
                    <span class="name">
                        I'm <span class="my-name">Vianney YOVO</span>,
                    </span><br>

                    <span class="title">
                        Software Engineer_
                    </span>
                    <p class="bio">
                        Passionate by software developement, I primarily use NestJS and Vue.js to build robust and high-performance web applications, with expertise in React Native for mobile development. As a Postman Student Leader, I promote API literacy on my campus. With Docker, I excel at containerizing applications and deploying them to cloud environments. My work also integrates MongoDB and TypeScript, allowing me to deliver reliable and scalable projects. Always seeking innovation, I am committed to sharing my knowledge with the tech community.
                        I harmonize aesthetics and functionality to deliver an innovative user experience with AI integration.
                    </p>
                    <div>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    </div>
                </div>
                <div class="col-md-4 photo">
                    <img src="/images/vianneyyovo.jpg" alt="profile" class="profile">
                    <span class="follow-me">
                        Follow me on: <div class="vertical-line"></div>
                    </span>

                </div>
            </div>
        </section>
        <section class="experiences">
            <div>
                ok
            </div>
        </section>

    </div>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <style>
        .head {
            margin: 20px 50px 10px 50px;
        }

        .profile {
            width: 100%;
            max-width: 700px;
            height: auto;
            margin-bottom: 20px;
        }

        @media (min-width: 992px) {
            .photo {
                width: 30rem;
            }

            .my-profile {
                margin-top: 150px;
            }

            .name,
            .title {
                font-size: 60px;
                font-weight: bold;
                line-height: 70px;
            }
        }

        .photo {
            display: flex;
        }


        @media (max-width: 991.98px) {
            .follow-me {
                display: none;
            }

            .name,
            .title {
                font-size: 45px;
                font-weight: bold;
                line-height: 45px;
            }
        }

        .experiences {
            background-color: #583EBC;
            height: 50px;
        }

        .follow-me {
            transform: rotate(90deg);
            transform-origin: left top;
            font-size: 15px;
            text-orientation: upright;
            white-space: nowrap;
            margin-left: 8rem;
            color: #583EBC;
            margin-top: 15rem;
        }

        .vertical-line {
            transform: rotate(90deg);
            width: 2px;
            height: 60px;
            background-color: #583EBC;
            margin-left: 10rem;
            margin-top: -2.5rem;
        }

        .my-name {
            color: #583EBC;
        }

        .bio {
            margin-top: 20px;
            line-height: 30px;
            word-wrap: break-word;
            text-align: justify;
        }
    </style>
</body>

</html>