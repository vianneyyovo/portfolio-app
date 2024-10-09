<div>
    <nav class="navbar navbar-expand-lg header">
        <div class="container-fluid menu">
            <a class="navbar-brand mobile-logo" href="#">Welcome to my portfolio</a>
            <span class="navbar-toggler drop" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </span>
            <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active home" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                    </ul>
                <span class="justify-content-center descktop-logo">Welcome to my portfolio</span>

                <span class="">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
</div>

<style>
    .header {
        background-color: #583EBC;
        margin: 20px 50px 10px 50px;
        border-radius: 50px;
    }

    .menu {
        margin: 0px 5px 0px 5px;
    }

    .drop {
        color: white;
    }

    .menu li a {
        color: white;
    }

    @media (min-width: 992px) {
        .mobile-logo {
            display: none;
        }
        
        .descktop-logo {
            margin-right: 500px;
        }

        .home {
            margin-left: -50px;
        }

        .menu ul li {
            margin: 0px 0px 0px 60px;
        }
    }

    @media (max-width: 991.98px) {
        .descktop-logo {
            display: none;
        }
    }
</style>