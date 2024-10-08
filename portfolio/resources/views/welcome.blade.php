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
                        Software Engineer<span id="dash">_</span>
                    </span>
                    <p class="bio">
                        Passionate by software developement, I primarily use NestJS and Vue.js to build robust and high-performance web applications, with expertise in React Native for mobile development. As a Postman Student Leader, I promote API literacy on my campus. With Docker, I excel at containerizing applications and deploying them to cloud environments. My work also integrates MongoDB and TypeScript, allowing me to deliver reliable and scalable projects. Always seeking innovation, I am committed to sharing my knowledge with the tech community.
                        <!-- I harmonize aesthetics and functionality to deliver an innovative user experience with AI integration. -->
                    </p>
                    <div class="buttons">
                        <button type="button" class="btn btn-secondary about-button gap-5">About</button>
                        <button type="button" class="btn btn-secondary download-cv-button"><a href="/images/cv_vianney_yovo_dev_en.pdf" class="download-cv_link" download>Download CV</a></button>
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
            <div class="head">
                <div class="my-experiences">
                    <span>MY EXPERIENCES</span>
                    <div class="services-slogan">
                        Innovative Solutions
                    </div>
                </div><br>
                <div>
                    ok
                </div>
            </div>
        </section>
        <section class="skills">
            <div class="head">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="my-skills">
                            <span>MY SKILLS</span>
                            <div class="skills-words">
                                Beautyfull and unique digital</br>experiences
                            </div>
                            <p class="skills-txt">
                                Blending creativity with technical expertise to deliver seamless, high-quality results. Each project is crafted to perfection, focusing on both functionality and memorable user experiences.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12  col-md-8">col-sm-4</div>
                </div>
            </div>
        </section>

        <section class="work">
            <div class="head">
                <div class="my-works">
                    <h3>Featured Works</h3>
                </div>
                <div>
                    <div class="row">
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="education">
            <div class="head">
                <div class="my-education">
                    <h3>Education</h3>
                </div>
                <div>
                    <div class="row">
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                        <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="experiences">
            <div class="head">
                <div class="my-experiences">
                    <div class="services-slogan">
                        Hapy Clients Say
                    </div>
                </div><br>
                <div>
                    ok
                </div>
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

            .buttons {
                margin-bottom: 10px;
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
            margin-top: 12px;
            line-height: 30px;
            word-wrap: break-word;
            text-align: justify;
        }

        .about-button {
            padding: 7px 50px 7px 50px;
            background-color: black;
            border: none;
        }

        .download-cv-button {
            background-color: #583EBC;
        }

        .my-experiences {
            text-align: center;
            color: white;
            padding: 30px 0px 0px 0px;
        }

        .my-works {
            text-align: center;

        }

        .my-works h3 {
            font-weight: bold;
            font-size: 60px;
        }

        #dash {
            animation: blink 1s steps(1) infinite;

        }

        @keyframes blink {

            50% {
                opacity: 0;
            }
        }

        .services-slogan {
            font-weight: bold;
            font-size: 45px;
        }

        .download-cv_link {
            text-decoration: none;
        }

        .download-cv-button a {
            color: white;
        }

        .skills {
            padding-top: 40px;
        }

        .skills-words {
            line-height: 45px;
            font-size: 40px;
            font-weight: 900;
        }

        .skills-txt {
            text-align: justify;
            margin-top: 20px;
        }

        .my-education h3 {
           text-align: center; 
        }
    </style>

    <script>
        const dash = document.getElementById("dash");

        setTimeout(() => {
            dash.style.animation = 'blink 1s steps(1) infinite';
        }, 2000);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>