@extends('layouts.master')

@section('title', 'About Page')

@section('content')


    <!-- About Banner Section -->


    <!-- SEO Info Section -->
    <section class="agency-section pt-5 py-5" style="background-color: #0f172a; color: #ffffff;">
        <div class="container">
            <h2 class="fw-bold text-center mt-5 mb-5 text-red-glow" style="font-size: 32px; line-height: 1.2;">
                About Our Agency
            </h2>
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="text-content animate-slide-up">
                        <h3 class="fw-bold mb-3" style="font-size: 28px; line-height: 1.3;">
                            We provide <br> <span class="highlight-red" style="color:#ff4444;">best SEO service</span>
                        </h3>
                        <p style="margin-bottom: 15px; line-height: 1.6;">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                            a large language ocean.
                        </p>
                        <p style="margin-bottom: 15px; line-height: 1.6;">
                            A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            Even the all-powerful Pointing has no control about the blind texts.
                        </p>
                    </div>
                </div>

                <!-- Video/Image Section -->
                <div class="col-lg-6 text-center">
                    <div class="position-relative animate-float">
                        <img src="{{ asset('assets/images-m/info/info-1.png') }}" alt="SEO Info"
                            class="img-fluid rounded shadow" style="border: 4px solid #ffffff10;">
                        <a href="https://www.youtube.com/watch?v=dnGs2eOE6hQ"
                            class="video-popup play-btn position-absolute top-50 start-50 translate-middle text-white text-decoration-none">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Glow effect for heading */
        .text-red-glow {
            color: #ff4444;
            text-shadow: 0 0 5px #ff4444, 0 0 10px #ff6666, 0 0 15px #ff8888;
        }

        /* Optional animation for text */
        .animate-slide-up {
            transform: translateY(20px);
            opacity: 0;
            animation: slideUp 1s forwards;
            animation-delay: 0.3s;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>




    <style>
        /* Text animations */
        .animate-slide-up {
            opacity: 0;
            transform: translateY(50px);
            animation: slideUp 1s forwards;
            animation-delay: 0.3s;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Floating image animation */
        .animate-float img {
            animation: floatImg 6s ease-in-out infinite;
        }

        @keyframes floatImg {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        /* Play button hover */
        .play-btn {
            font-size: 40px;
            background: rgba(255, 0, 0, 0.2);
            padding: 20px;
            border-radius: 50%;
            transition: 0.3s;
        }

        .play-btn:hover {
            background: rgba(244, 67, 54, 0.5);
            transform: scale(1.2);
        }

        /* Red highlight */
        .highlight-red {
            color: #f44336;
            font-weight: 700;
        }

        /* Red glowing heading */
        .text-red-glow {
            color: #ffffff;
            text-shadow: 0 0 10px #000000, 0 0 20px #ffffff;
        }

        /* Responsive */
        @media (max-width:768px) {
            h1.display-4 {
                font-size: 2rem;
            }

            h2.fw-bold {
                font-size: 28px;
            }
        }
    </style>


    <!-- Optional CSS Animation -->
    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>


    <!-- Working Process Section -->
    <section class="py-5" style="background-color: #0d1117; color: #ffffff;">
        <div class="container">
            <!-- Heading -->
            <div class="row">
                <div class="col-lg-6 mx-auto text-center mb-5">
                    <h5 class="text-uppercase" style="color: #f44336; letter-spacing: 1px;">Work Flow</h5>
                    <h2 class="fw-bold" style="font-size: 32px;">Our Working Process</h2>
                    <hr style="width: 60px; height: 3px; background-color: #f44336; border: none; margin: 15px auto 0;">
                </div>
            </div>

            <!-- Process Steps -->
            <div class="row text-center g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded shadow-sm h-100 process-card animate-fade">
                        <div class="icon-wrapper">
                            <img src="{{ asset('assets/images-m/work-process/1.png') }}" alt="Planning"
                                class="mb-3 icon-img">
                        </div>
                        <h5 class="fw-semibold">Planning</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded shadow-sm h-100 process-card animate-fade">
                        <div class="icon-wrapper">
                            <img src="{{ asset('assets/images-m/work-process/2.png') }}" alt="Research"
                                class="mb-3 icon-img">
                        </div>
                        <h5 class="fw-semibold">Research</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded shadow-sm h-100 process-card animate-fade">
                        <div class="icon-wrapper">
                            <img src="{{ asset('assets/images-m/work-process/3.png') }}" alt="Optimizing"
                                class="mb-3 icon-img">
                        </div>
                        <h5 class="fw-semibold">Optimizing</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="p-4 rounded shadow-sm h-100 process-card animate-fade">
                        <div class="icon-wrapper">
                            <img src="{{ asset('assets/images-m/work-process/4.png') }}" alt="Results"
                                class="mb-3 icon-img">
                        </div>
                        <h5 class="fw-semibold">Results</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Process Card Style */
        .process-card {
            background-color: #161b22;
            border: 1px solid #2e2e2e;
            transition: transform 0.4s ease, border-color 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .process-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: #f44336;
            box-shadow: 0 15px 30px rgba(244, 67, 54, 0.4);
        }

        .process-card h5 {
            color: #ffffff;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .process-card:hover h5 {
            color: #f44336;
            text-shadow: 0 0 10px rgba(244, 67, 54, 0.5);
        }

        /* Icon Animation on Hover */
        .icon-wrapper {
            display: inline-block;
            transition: transform 0.4s ease;
        }

        .process-card:hover .icon-wrapper {
            transform: rotate(-10deg) scale(1.2);
        }

        .icon-img {
            height: 70px;
            transition: transform 0.4s ease;
        }

        /* Fade-in animation on scroll */
        .animate-fade {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Staggered animation delays */
        .row .col-md-6.col-lg-3:nth-child(1) .animate-fade {
            animation-delay: 0.2s;
        }

        .row .col-md-6.col-lg-3:nth-child(2) .animate-fade {
            animation-delay: 0.4s;
        }

        .row .col-md-6.col-lg-3:nth-child(3) .animate-fade {
            animation-delay: 0.6s;
        }

        .row .col-md-6.col-lg-3:nth-child(4) .animate-fade {
            animation-delay: 0.8s;
        }

        /* Responsive adjustments */
        @media(max-width:768px) {
            .process-card {
                margin-bottom: 20px;
            }

            .process-card h5 {
                font-size: 18px;
            }
        }
    </style>




    <!-- Fun Fact Section -->
    <section
        style="background: linear-gradient(180deg, #0d0d1a, #1a1a2e); color: #fff; padding: 80px 0; position: relative; overflow: hidden;">

        <!-- Star Background -->
        <div
            style="  repeat; opacity: 0.1; position: absolute; top:0; bottom:0; left:0; right:0; animation: starMove 60s linear infinite;">
        </div>

        <div class="container position-relative">
            <!-- Heading -->
            <div class="row">
                <div class="col-lg-6 mx-auto text-center mb-5">
                    <h3 class="fw-bold" style="font-size: 32px;">
                        <span style="color: #f44336;">Google</span> only loves you <br>
                        when everyone else <span style="color: #f44336;">love</span> you first
                    </h3>
                    <hr style="width: 60px; height: 3px; background-color: #f44336; border: none; margin: 15px auto;">
                </div>
            </div>

            <!-- Counters -->
            <div class="row text-center mb-5 g-4">
                <div class="col-md-4 mb-4">
                    <div class="counter-card p-4 rounded shadow-sm">
                        <h2 class="counter display-5 fw-bold" data-target="32548">0</h2>
                        <p class="mt-2">Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="counter-card p-4 rounded shadow-sm">
                        <h2 class="counter display-5 fw-bold" data-target="4295">0</h2>
                        <p class="mt-2">Works Done</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="counter-card p-4 rounded shadow-sm">
                        <h2 class="counter display-5 fw-bold" data-target="25498">0</h2>
                        <p class="mt-2">Subscribers</p>
                    </div>
                </div>
            </div>

            <!-- Subscribe Button -->
            <div class="text-center">
                <a href="#" class="btn btn-danger px-4 py-2 fs-5 btn-animate">
                    <i class="fa fa-envelope me-2"></i>Click here to Subscribe
                </a>
            </div>
        </div>
    </section>

    <style>
        .counter-card {
            background-color: rgba(255, 255, 255, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .counter-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 15px 30px rgba(244, 67, 54, 0.3);
        }

        .btn-animate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-animate:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(244, 67, 54, 0.5);
        }

        @keyframes starMove {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1000px 1000px;
            }
        }

        /* Counter fade in */
        .counter {
            opacity: 0;
            transform: translateY(20px);
            animation: counterFade 1s forwards;
        }

        @keyframes counterFade {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                let current = 0;
                const duration = 2000; // 2 seconds
                const stepTime = Math.abs(Math.floor(duration / target));

                const counterInterval = setInterval(() => {
                    current += Math.ceil(target / 100); // smoother increment
                    if (current >= target) {
                        counter.innerText = target.toLocaleString();
                        clearInterval(counterInterval);
                    } else {
                        counter.innerText = current.toLocaleString();
                    }
                }, stepTime);
            });
        });
    </script>




    <!-- seo info section -->
    <section style="background-color: #111827; color: #ffffff; padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <h3 class="fw-bold mb-3" style="color: #f44336;">Our Vision</h3>
                        <hr style="width: 60px; height: 3px; background-color: #f44336; border: none; margin-bottom: 20px;">
                        <p style="line-height: 1.7;">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarks grove right at the coast of the
                            Semantics, a large language ocean.
                        </p>
                        <ul class="list-unstyled mt-4">
                            <li class="mb-2"><i class="fa fa-check-circle me-2 text-danger"></i> Separated they live in
                                Bookmarksgrove</li>
                            <li class="mb-2"><i class="fa fa-check-circle me-2 text-danger"></i> Right at the coast of
                            </li>
                            <li class="mb-2"><i class="fa fa-check-circle me-2 text-danger"></i> The Semantics</li>
                            <li class="mb-2"><i class="fa fa-check-circle me-2 text-danger"></i> A large language ocean.
                            </li>
                        </ul>
                        <a href="#" class="btn btn-danger mt-4"><i class="fa fa-arrow-right me-2"></i>Get Our
                            Service</a>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/images-m/info/info-2.png') }}" alt="Our Vision"
                        class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #0f172a; color: #ffffff; padding: 80px 0;">
        <div class="container">
            <!-- Heading -->
            <div class="row mb-5">
                <div class="col-md-6 mx-auto text-center">
                    <h5 style="color: #f44336;">Interested!</h5>
                    <h2 class="fw-bold">Meet Our Team</h2>
                    <hr style="width: 60px; height: 3px; background-color: #f44336; border: none; margin: 15px auto;">
                </div>
            </div>

            <!-- Team Cards -->
            <div class="row g-4">
                <!-- Single Team Member -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-card h-100 text-center">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images-m/team/team-1.jpg') }}" class="img-fluid"
                                alt="Grace Charlotte">
                            <div class="team-overlay">
                                <div>
                                    <h5 class="text-white mb-1">Grace Charlotte</h5>
                                    <p class="text-light mb-2">SEO Expert</p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-0"><a href="#" class="text-white text-decoration-none">Grace
                                    Charlotte</a></h5>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other members -->
                <div class="col-md-6 col-lg-3">
                    <div class="team-card h-100 text-center">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images-m/team/team-2.jpg') }}" class="img-fluid"
                                alt="Aaron Brayden">
                            <div class="team-overlay">
                                <div>
                                    <h5 class="text-white mb-1">Aaron Brayden</h5>
                                    <p class="text-light mb-2">Marketing Expert</p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-0"><a href="#" class="text-white text-decoration-none">Aaron
                                    Brayden</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team-card h-100 text-center">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images-m/team/team-3.jpg') }}" class="img-fluid"
                                alt="Samantha Nicole">
                            <div class="team-overlay">
                                <div>
                                    <h5 class="text-white mb-1">Samantha Nicole</h5>
                                    <p class="text-light mb-2">Graphic Designer</p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-0"><a href="#"
                                    class="text-white text-decoration-none">Samantha Nicole</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="team-card h-100 text-center">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('assets/images-m/team/team-4.jpg') }}" class="img-fluid"
                                alt="Samuel Jeremy">
                            <div class="team-overlay">
                                <div>
                                    <h5 class="text-white mb-1">Samuel Jeremy</h5>
                                    <p class="text-light mb-2">Web Expert</p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-0"><a href="#" class="text-white text-decoration-none">Samuel
                                    Jeremy</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .team-card {
            background-color: #1f2937;
            /* slightly lighter than section bg */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        .team-card:hover {
            transform: translateY(-8px);
        }

        .team-card .team-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            transition: bottom 0.4s ease;
        }

        .team-card:hover .team-overlay {
            bottom: 0;
        }

        .card-body {
            padding: 15px;
            background-color: #1f2937;
        }
    </style>



    <!-- we are hiring section -->
    <!-- We’re Hiring Section -->
    <section class="hiring-section py-5" style="background-color: #0f172a; color: #ffffff;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="hiring-image">
                        <img src="{{ asset('assets/images-m/info/info-3.jpg') }}" alt="Hiring"
                            class="img-fluid rounded shadow">
                    </div>
                </div>
                <!-- Content -->
                <div class="col-md-7">
                    <div class="hiring-content">
                        <h2 class="mb-4"><span style="color:#f44336;">We’re Hiring!</span> Interested in working with
                            our Team?</h2>
                        <a href="contact.html" class="btn btn-danger btn-lg">
                            <i class="icon icon-envelope4 me-2"></i> Drop your resume here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        /* General Styling */
        .hiring-section h2 span {
            font-weight: 700;
        }

        .hiring-section .btn-danger {
            background-color: #f44336;
            border: none;
        }

        .sidebar-info h5 {
            font-weight: 600;
        }

        .sidebar-info a {
            text-decoration: none;
        }

        .social-list a:hover {
            color: #ffffff;
        }

        @media (max-width:768px) {
            .hiring-section h2 {
                font-size: 1.8rem;
            }
        }
    </style>




@endsection
