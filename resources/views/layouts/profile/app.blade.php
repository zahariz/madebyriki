<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madebyriki | Web Developer</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('img/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('img/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('img/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="img/favicon_io/site.webmanifest">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/swiper-bundle.min.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
    {!! htmlScriptTagJsApi([
        'action' => 'homepage',
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch'
    ]) !!}

</head>

<body>
    <!-- HEADER -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav-logo">Riki</a>

            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list grid">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active-link">
                            <i class="fas fa-home nav-link-icon"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">
                            <i class="fas fa-user nav-link-icon"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#skills" class="nav-link">
                            <i class="fas fa-file-alt nav-link-icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">
                            <i class="fas fa-briefcase nav-link-icon"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">
                            <i class="fas fa-image nav-link-icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">
                            <i class="fas fa-envelope nav-link-icon"></i> Contact
                        </a>
                    </li>
                </ul>
                <i class="fas fa-times nav-close" id="nav-close"></i>
            </div>
            <div class="nav-btns">

                <!-- Theme change button -->
                <i class="fas fa-moon change-theme" id="theme-button"></i>

                <div class="nav-toggle" id="nav-toggle">
                    <i class="fas fa-qrcode"></i>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main class="main">
        <!-- HOME -->
        <section class="home section" id="home">
            <div class="home-container container grid">
               @yield('content')
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-bg">
            <div class="footer-container container grid">
                <div class="footer-texts">
                    <h1 class="footer-title">Riki</h1>
                    <span class="footer-subtitle">Web Developer</span>
                </div>

                <ul class="footer-links">
                    <li>
                        <a href="#services" class="footer-link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer-link">Contact Me</a>
                    </li>
                </ul>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/xiaozex/" target="_blank">
                        <i class="fab fa-facebook-f footer-social"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <i class="fab fa-twitter footer-social"></i>
                    </a>
                    <a href="https://www.instagram.com/rikikurniawn8/" target="_blank">
                        <i class="fab fa-instagram footer-social"></i>
                    </a>
                </div>
            </div>
            <p class="footer-copy">&#169; Riki Kurniawan. All right reserved</p>
        </div>
    </footer>

    <!-- SCROLL TOP -->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="fas fa-arrow-up scrollup-icon"></i>
    </a>

    <!-- Google Recaptcha -->


    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/027d3564f6.js" crossorigin="anonymous"></script>

    <!-- SWIPER JS -->
    <script src="{{ URL::to('js/swiper-bundle.js') }}"></script>

    <!-- MAIN JS -->
    <script src="{{ URL::to('js/main.js') }}"></script>
</body>

</html>
