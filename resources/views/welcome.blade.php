@extends("layouts.profile.app")
@section('content')
<div class="home-content grid">
    <div class="home-social">
        <a href="https://www.linkedin.com/in/riki-kurniawan8/" target="_blank" class="home-social-icon">
            <i class="fab fa-linkedin-in"></i>
        </a>

        <a href="https://github.com/zahariz" target="_blank" class="home-social-icon">
            <i class="fab fa-github"></i>
        </a>
    </div>
    <div class="home-img">
        <svg class="home-blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <mask id="mask0" mask-type="alpha">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
            </mask>
            <g mask="url(#mask0)">
                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                <image class="home-blob-img" x='12' y='18' xlink:href="{{ URL::to('img/profile.png') }}" />
            </g>
        </svg>
    </div>
    <div class="home-data">
        <h1 class="home-data-title">Hi, I'm Riki</h1>
        <h3 class="home-data-subtitle">Web Developer</h3>
        <p class="home-data-description">High level experience in web development knowledge,
            producing quality work.</p>
        <a href="#contact" class="button button-flex">
            Contact Me <i class="fab fa-telegram-plane button-icon"></i>
        </a>
    </div>
</div>
<div class="home-scroll">
    <a href="#about" class="home-scroll-button button-flex">
        <span class="home-scroll-button-name">Scroll down</span>
        <i class="fas fa-arrow-down home-scroll-button-arrow"></i>
    </a>
</div>
</div>
</section>

<!-- ABOUT -->
<section class="about section" id="about">
<h2 class="section-title">About Me</h2>
<span class="section-subtitle">My introduction</span>

<div class="about-container container grid">
<div class="about-container-img">
    <img src="{{ URL::to('img/about1.jpg') }}" alt="About" class="about-container-imgAlt">
</div>

<div class="about-container-data">
    <p class="about-container-data-description">I have worked in web development since 2019. Specialized in web on top of Linux, Apache, MySQL, Javascript and PHP Stack.</p>

    <div class="about-container-data-info">
        <div>
            <span class="about-container-data-info-title">03+</span>
            <span class="about-container-data-name">Years <br> experience</span>
        </div>
        <div>
            <span class="about-container-data-info-title">5+</span>
            <span class="about-container-data-name">Completed <br> project</span>
        </div>
        <div>
            <span class="about-container-data-info-title">04+</span>
            <span class="about-container-data-name">Companies <br> worked</span>
        </div>
    </div>
    <div class="about-buttons">
        <a download="" href="{{ URL::to('pdf/CV-Riki Kurniawan.pdf') }}" class="button button-flex">
            Download CV <i class="fas fa-download button-icon"></i>
        </a>
    </div>
</div>
</div>
</section>

<!-- SKILLS -->
<section class="skills section" id="skills">
<h2 class="section-title">Skills</h2>
<span class="section-subtitle">My technical level</span>

<div class="skills-container container grid">
<div>
    <!-- SKILLS 1 -->
    <div class="skills-container-content skills-open">

        <div class="skills-container-header">
            <i class="fas fa-code skills-icon"></i>
            <div>
                <h1 class="skills-title">Front-End Developer</h1>
                <span class="skills-subtitle">More than 3 years</span>
            </div>
            <i class="fas fa-angle-down skills-arrow"></i>
        </div>

        <div class="skills-list grid">

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">HTML</h3>
                    <span class="skills-number">90%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-html"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">CSS</h3>
                    <span class="skills-number">80%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-css"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">JavaScript</h3>
                    <span class="skills-number">60%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-js"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">jQuery</h3>
                    <span class="skills-number">60%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-jquery"></span>
                </div>
            </div>

        </div>

    </div>

    <!-- SKILLS 2 -->


</div>

<div>
    <div class="skills-container-content skills-close">

        <div class="skills-container-header">
            <i class="fas fa-server skills-icon"></i>
            <div>
                <h1 class="skills-title">Back-End Developer</h1>
                <span class="skills-subtitle">More than 3 years</span>
            </div>
            <i class="fas fa-angle-down skills-arrow"></i>
        </div>

        <div class="skills-list grid">

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">PHP</h3>
                    <span class="skills-number">80%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-php"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">Laravel</h3>
                    <span class="skills-number">70%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-node"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">Codeigniter</h3>
                    <span class="skills-number">70%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-codeigniter"></span>
                </div>
            </div>

            <div class="skills-data">
                <div class="skills-titles">
                    <h3 class="skills-name">MySQL</h3>
                    <span class="skills-number">80%</span>
                </div>
                <div class="skills-bar">
                    <span class="skills-percentage skills-mysql"></span>
                </div>
            </div>

        </div>

    </div>
</div>

</div>
</section>

<!-- QUALIFICATION -->
<section class="qualification section">
<h2 class="section-title">Qualification</h2>
<span class="section-subtitle">My personel journey</span>

<div class="qualification-container container">
<div class="qualification-tabs">
    <div class="qualification-tabs-button button-flex qualification-active" data-target="#education">
        <i class="fas fa-graduation-cap qualification-icon"></i>
        Education
    </div>
    <div class="qualification-tabs-button button-flex" data-target="#work">
        <i class="fas fa-briefcase qualification-icon"></i>
        Work
    </div>
</div>
<div class="qualification-sections">
    <!-- QUALIFICATION CONTENT 1 -->
    <div class="qualification-content qualification-active" data-content id="education">
        <!-- QUALIFICATION 1 -->
        <div class="qualification-data">
            <div class="qualification-data-alt">
                <h3 class="qualification-title">Multimedia</h3>
                <span class="qualification-subtitle">SMKN 3 Bandung</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2012 - 2015
                </div>
            </div>
            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>
        </div>
        <!-- QUALIFICATION 2 -->
        <div class="qualification-data">
            <div></div>

            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>

            <div class="qualification-data-alt">
                <h3 class="qualification-title">Teknik Informatika</h3>
                <span class="qualification-subtitle">Universitas Langlangbuana</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2019 - 2023
                </div>
            </div>
        </div>

    </div>

    <!-- QUALIFICATION CONTENT 2 -->
    <div class="qualification-content" data-content id="work">
        <!-- QUALIFICATION 1 -->
        <div class="qualification-data">
            <div class="qualification-data-alt">
                <h3 class="qualification-title">Freelance Web Developer</h3>
                <span class="qualification-subtitle">Upwork</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2020 - Now
                </div>
            </div>
            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>
        </div>
        <!-- QUALIFICATION 2 -->
        <div class="qualification-data">
            <div></div>

            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>

            <div class="qualification-data-alt">
                <h3 class="qualification-title">Freelance Web Developer</h3>
                <span class="qualification-subtitle">Sumber Mulya Laundry</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2019 - Now
                </div>
            </div>
        </div>
        <!-- QUALIFICATION 3 -->
        <div class="qualification-data">
            <div class="qualification-data-alt">
                <h3 class="qualification-title">Founder</h3>
                <span class="qualification-subtitle">Madebyriki</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2021 - Now
                </div>
            </div>
            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>
        </div>

        <!-- QUALIFICATION 2 -->
        <div class="qualification-data">
            <div></div>

            <div>
                <span class="qualification-rounder"></span>
                <span class="qualification-line"></span>
            </div>

            <div class="qualification-data-alt">
                <h3 class="qualification-title">Warehouse Staff</h3>
                <span class="qualification-subtitle">PT Perusahaan Industri Ceres</span>
                <div class="qualification-calendar">
                    <i class="fas fa-calendar-alt"></i>
                    2022 - Now
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</section>

<!-- SERVICES -->
<section class="services section" id="services">
<h2 class="section-title">Services</h2>
<span class="section-subtitle">What i offer</span>

<div class="services-container container grid">
<!-- SERVICES 1 -->
<div class="services-content">
    <div>
        <i class="fas fa-border-all services-icon"></i>
        <h3 class="services-title">Website <br> Development</h3>
    </div>

    <span class="button button-flex button-small button-link services-button">
        View More
        <i class="fas fa-arrow-right button-icon"></i>
    </span>

    <div class="services-modal">
        <div class="services-modal-content">
            <h4 class="services-modal-title">Website <br> Development</h4>
            <i class="fas fa-times services-modal-close"></i>

            <div class="services-modal-services grid">
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>Web page development.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>Fixing an issue or bugs.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I create your landing page.</p>
                </li>

            </div>
        </div>
    </div>
</div>
<!-- SERVICES 2 -->
<div class="services-content">
    <div>
        <i class="fas fa-arrows-alt-h services-icon"></i>
        <h3 class="services-title">Web Apps<br> Development</h3>
    </div>

    <span class="button button-flex button-small button-link services-button">
        View More
        <i class="fas fa-arrow-right button-icon"></i>
    </span>

    <div class="services-modal">
        <div class="services-modal-content">
            <h4 class="services-modal-title">Web Apps<br> Development</h4>
            <i class="fas fa-times services-modal-close"></i>

            <div class="services-modal-services grid">
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I develop the user interface.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>Web page development.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I design database architecture.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I create your website application.</p>
                </li>
            </div>
        </div>
    </div>
</div>
<!-- SERVICES 3 -->
<div class="services-content">
    <div>
        <i class="fas fa-pencil-alt services-icon"></i>
        <h3 class="services-title">Wordpress<br> Development</h3>
    </div>

    <span class="button button-flex button-small button-link services-button">
        View More
        <i class="fas fa-arrow-right button-icon"></i>
    </span>

    <div class="services-modal">
        <div class="services-modal-content">
            <h4 class="services-modal-title">Wordpress<br> Development</h4>
            <i class="fas fa-times services-modal-close"></i>

            <div class="services-modal-services grid">
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>Optimization Website.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>Plugin.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I fix an issue or bugs.</p>
                </li>
                <li class="services-modal-service">
                    <i class="far fa-check-circle services-modal-icon"></i>
                    <p>I create your wordpress website.</p>
                </li>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<!-- PORTFOLIO -->
<section class="portfolio section" id="portfolio">
<h2 class="section-title">Portfolio</h2>
<span class="section-subtitle">Most recent work</span>

<div class="portfolio-container container swiper-container">
<div class="swiper-wrapper">
    <!-- PORTFOLIO 1 -->
    <div class="portfolio-content grid swiper-slide">
        <img src="{{ URL::to('img/Sistem Manajemen Laundry.png') }}" alt="Portfolio" class="portfolio-img">
        <div class="portfolio-data">
            <h3 class="portfolio-title">System Management Laundry</h3>
            <p class="portfolio-description">Website application for system management laundry. I built this project using Bootstrap, jQuery, Laravel and MySQL </p>
            <a href="#" target="_blank" class="button button-flex button-small portfolio-button">
                Demo <i class="fas fa-arrow-right button-icon"></i>
            </a>
        </div>
    </div>
    <!-- PORTFOLIO 2 -->
    <div class="portfolio-content grid swiper-slide">
        <img src="{{ URL::to('img/Smart Performa.png') }}" alt="Portfolio" class="portfolio-img">
        <div class="portfolio-data">
            <h3 class="portfolio-title">Smart Performa</h3>
            <p class="portfolio-description">Website application for KPIs employees. I built this project using Bootstrap, jQuery, Codeigniter and MySQL</p>
            <a href="https://www.behance.net/gallery/167963257/Smart-Perforama" target="_blank" class="button button-flex button-small portfolio-button">
                Demo <i class="fas fa-arrow-right button-icon"></i>
            </a>
        </div>
    </div>
    <!-- PORTFOLIO 3 -->
    <div class="portfolio-content grid swiper-slide">
        <img src="{{ URL::to('img/Wedding Invitation.png') }}" alt="Portfolio" class="portfolio-img">
        <div class="portfolio-data">
            <h3 class="portfolio-title">Wedding Invitation</h3>
            <p class="portfolio-description">Website for wedding invitation online. I built this project using HTML, CSS, Javascript, and jQuery</p>
            <a href="https://prototype-nikahan-ika.vercel.app/" class="button button-flex button-small portfolio-button">
                Demo <i class="fas fa-arrow-right button-icon"></i>
            </a>
        </div>
    </div>
</div>
<!-- Add Arrow -->
<div class="swiper-button-next">
    <i class="fas fa-angle-right swiper-portfolio-icon"></i>
</div>
<div class="swiper-button-prev">
    <i class="fas fa-angle-left swiper-portfolio-icon"></i>
</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>
</div>
</section>

<!-- PROJECT IN MIND -->
<section class="project section">
<div class="project-bg">
<div class="project-container container grid">
    <div class="project-data">
        <h2 class="project-bg-title">You have a new project</h2>
        <p class="project-bg-description">Contact me now and get a 30% discount on your <br> new project.</p>
        <a href="#contact" class="button button-flex button-white">
            Contact Me
            <i class="fab fa-telegram-plane project-icon button-icon"></i>
        </a>
    </div>
    <img src="{{ URL::to('img/profile.png') }}" alt="Project img" class="project-bg-img">
</div>
</div>
</section>

<!-- TESTIMONIAL -->
<section class="testimonial section">
<h2 class="section-title">Testimonial</h2>
<span class="section-subtitle">My client saying</span>

<div class="testimonial-container container swiper-container">
<div class="swiper-wrapper">
    <!-- TESTIMONIAL 1 -->
    <div class="testimonial-content swiper-slide">
        <div class="testimonial-data">
            <div class="testimonial-header">
                <img src="{{ URL::to('img/testimonial1.jpg') }}" alt="Testimonial" class="testimonial-img">

                <div>
                    <h3 class="testimonial-name">Ir. Zuchriyah Trimulyati</h3>
                    <span class="testimonial-client">Client</span>
                </div>
            </div>
            <div>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
            </div>

        </div>
        <p class="testimonial-description">Hasilnya sungguh memuaskan, usaha laundry saya sekarang sudah terkomputerisasi dan laporan menjadi akurat. Terima kasih Riki!.
        </p>
    </div>
    <!-- TESTIMONIAL 2 -->
    <div class="testimonial-content swiper-slide">
        <div class="testimonial-data">
            <div class="testimonial-header">
                <img src="{{ URL::to('img/testimonial2.jpg') }}" alt="Testimonial" class="testimonial-img">

                <div>
                    <h3 class="testimonial-name">Rika Kurniaty</h3>
                    <span class="testimonial-client">Client</span>
                </div>
            </div>
            <div>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
            </div>
        </div>
        <p class="testimonial-description">Undangan online nya bagus dan memuaskan jadi menghemat biaya nikah karena tidak perlu lagi bikin undangan kertas.
        </p>
    </div>
    <!-- TESTIMONIAL 3 -->
    <div class="testimonial-content swiper-slide">
        <div class="testimonial-data">
            <div class="testimonial-header">
                <img src="{{ URL::to('img/testimonial3.jpg') }}" alt="Testimonial" class="testimonial-img">

                <div>
                    <h3 class="testimonial-name">Raul Harris</h3>
                    <span class="testimonial-client">Client</span>
                </div>
            </div>
            <div>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
                <i class="far fa-star testimonial-icon-star"></i>
            </div>
        </div>
        <p class="testimonial-description">I get a good impression, I carry out my project with
            all the possible quality and attention and support 24 hours a day.
        </p>
    </div>
</div>
</div>
</section>

<!-- CONTACT ME -->
<section class="contact section" id="contact">
<h2 class="section-title">Contact Me</h2>
<span class="section-subtitle">Get in touch</span>

<div class="contact-container container grid">
<div class="contact-items">
    <div class="contact-information">
        <i class="fas fa-phone contact-icon"></i>

        <div>
            <h3 class="contact-title">Call Me</h3>
            <span class="contact-subtitle">089519067218</span>
        </div>
    </div>
    <div class="contact-information">
        <i class="far fa-envelope contact-icon"></i>
        <div>
            <h3 class="contact-title">Email</h3>
            <span class="contact-subtitle">rikikurniawan88@gmail.com</span>
        </div>
    </div>
    <div class="contact-information">
        <i class="fas fa-map-marker-alt contact-icon"></i>

        <div>
            <h3 class="contact-title">Location</h3>
            <span class="contact-subtitle">Bandung</span>
        </div>
    </div>
</div>

<form action="{{ route('contact') }}" method="POST" class="contact-form grid">
    @csrf
    <div class="contact-inputs grid">
        <div class="contact-content">
            <label for="" class="contact-label">Name</label>
            <input type="text" name="name" class="contact-input" required>
        </div>
        <div class="contact-content">
            <label for="" class="contact-label">Email</label>
            <input type="email" name="email" class="contact-input" required>
        </div>
    </div>
    <div class="grid">
        <div class="contact-content">
            <label for="" class="contact-label">Project</label>
            <input type="text" name="project" class="contact-input" required>
        </div>
        <div class="contact-content">
            <label for="" class="contact-label">Message</label>
            <textarea style="resize: none;" rows="5" name="message" class="contact-input" required></textarea>
        </div>
    </div>
    {!! htmlFormSnippet([
        "theme" => "light",
        "size" => "normal",
        "tabindex" => "3",
        "callback" => "callbackFunction",
        "expired-callback" => "expiredCallbackFunction",
        "error-callback" => "errorCallbackFunction",
    ]) !!}
    <div class="contact-button">
        <button type="submit" class="button button-flex">
            Send Message <i class="fab fa-telegram-plane button-icon"></i>
        </button>
    </div>
</form>

@endsection
