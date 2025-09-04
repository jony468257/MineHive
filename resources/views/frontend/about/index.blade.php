@extends('layouts.master')

@section('title', 'About Page')

@section('content')





    <!-- SEO Info Section -->
    @if ($agency)
        <section class="agency-section pt-5 py-5" style="background-color: #0f172a; color: #ffffff;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Title + Text Column -->
                    <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                        <h2 class="fw-bold text-start text-danger mb-4"
                            style="font-size: 32px; text-shadow: 0 0 10px #f44336;">
                            {{ app()->getLocale() == 'bn' ? $agency->title_bn : $agency->title_en }}
                        </h2>
                        <div class="text-content animate-slide-up">
                            <p style="margin-bottom: 15px; line-height: 1.6;">
                                {!! app()->getLocale() == 'bn' ? $agency->description_bn : $agency->description_en !!}
                            </p>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="col-lg-6 text-center" data-aos="fade-left">
                        <div class="position-relative animate-float" style="margin-top:30px;">
                            <img src="{{ asset('storage/' . $agency->image) }}" alt="Agency Image"
                                class="img-fluid rounded shadow" style="max-height: 350px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <p class="text-center text-danger my-5">Agency content not found.</p>
    @endif

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

        /* Red glowing heading */
        .text-danger {
            color: #f44336 !important;
            text-shadow: 0 0 10px #f44336, 0 0 20px #f44336;
        }

        /* Responsive */
        @media (max-width:768px) {
            h2.fw-bold {
                font-size: 28px;
                text-align: center !important;
            }
        }
    </style>

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <!-- AOS Animation Library (Add to <head> or before </body>) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- What We Do Section -->
    <section class="py-5" style="background: linear-gradient(to right, #000000, #111111); color: #fff;">
        <div class="container">
            <h2 class="text-danger mb-4 text-center" style="font-size: 32px; font-weight: 700;">What We Do</h2>
            <p class="text-center mb-5" style="max-width: 800px; margin: auto;">
                We help businesses grow by leveraging the power of:
            </p>

            <div class="row g-4 text-start">
                <!-- Google Marketing -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 rounded bg-dark border border-secondary h-100 hover-glow">
                        <div class="mb-3 text-danger fs-2">
                            <img src="{{ asset('assets/images-m/service-tab/analytics.png') }}" class="mx-auto mb-3"
                                alt="Google Marketing" style="width: 80px; height: 80px; object-fit: contain;">

                        </div>
                        <h5 class="text-warning">Google Marketing</h5>
                        <ul class="mt-2 text-white-50">
                            <li>Capture high-intent customers at the moment they’re searching.</li>
                            <li>Search Ads, Display Ads, Remarketing, Shopping Ads</li>
                        </ul>
                    </div>
                </div>

                <!-- YouTube Marketing -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 rounded bg-dark border border-secondary h-100 hover-glow">
                        <div class="mb-3 text-danger fs-2">
                            <img src="{{ asset('assets/images-m/service-tab/youtube.png') }}" class="mx-auto mb-3"
                                alt="YouTube Marketing" style="width: 80px; height: 80px; object-fit: contain;">

                        </div>
                        <h5 class="text-warning">YouTube Marketing</h5>
                        <ul class="mt-2 text-white-50">
                            <li>Engage audiences with powerful video storytelling.</li>
                            <li>Video Ads, Channel Optimization, Video SEO, Content Strategy</li>
                        </ul>
                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 rounded bg-dark border border-secondary h-100 hover-glow">
                        <div class="mb-3 text-danger fs-2">
                            <img src="{{ asset('assets/images-m/service-tab/bullhorn.png') }}" class="mx-auto mb-3"
                                alt="Social Media Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                        </div>
                        <h5 class="text-warning">Social Media Marketing</h5>
                        <ul class="mt-2 text-white-50">
                            <li>Build brand presence and loyalty across major platforms.</li>
                            <li>Facebook, Instagram, LinkedIn, Pinterest campaigns</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        .hover-glow {
            transition: all 0.3s ease;
        }

        .hover-glow:hover {
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.2);
            transform: translateY(-6px);
        }

        ul {
            padding-left: 1rem;
        }
    </style>

    <!-- AOS Init -->
    <script>
        AOS.init();
    </script>

    <!-- How We Work Section -->
    <!-- Font Awesome CDN -->
    <!-- Font Awesome & AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- How We Work Section -->
    <section class="py-5" style="background-color: #0d1117; color: #fff;">
        <div class="container">
            <h2 class="text-danger text-center mb-5" style="font-size: 32px; font-weight: 700;">How We Work</h2>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 rounded bg-dark gradient-border h-100 shadow-sm step-box">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-icon me-3 bg-transparent text-white border border-light">
                                <i class="fas fa-search"></i>
                            </div>
                            <h5 class="mb-0 text-warning">1. Discovery & Strategy</h5>
                        </div>
                        <p class="text-white-50 mb-0">
                            We start by understanding your goals, audience, and market. Competitor analysis and KPIs are
                            defined for success.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 rounded bg-dark gradient-border h-100 shadow-sm step-box">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-icon me-3 bg-transparent text-white border border-light">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h5 class="mb-0 text-warning">2. Custom Campaign Design</h5>
                        </div>
                        <p class="text-white-50 mb-0">
                            We create targeted marketing plans tailored to your brand, including content ideas, ad
                            creatives, and audience targeting.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 rounded bg-dark gradient-border h-100 shadow-sm step-box">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-icon me-3 bg-transparent text-white border border-light">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h5 class="mb-0 text-warning">3. Launch & Optimize</h5>
                        </div>
                        <p class="text-white-50 mb-0">
                            Campaigns are executed with precise targeting, monitored in real-time, and optimized for maximum
                            results.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="p-4 rounded bg-dark gradient-border h-100 shadow-sm step-box">
                        <div class="d-flex align-items-center mb-3">
                            <div class="step-icon me-3 bg-transparent text-white border border-light">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5 class="mb-0 text-warning">4. Report & Scale</h5>
                        </div>
                        <p class="text-white-50 mb-0">
                            We provide transparent reporting and scale strategies that deliver measurable ROI.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Styling -->
    <style>
        .step-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-box {
            transition: all 0.3s ease;
            border-left: 5px solid transparent;
            background-clip: padding-box;
            position: relative;
        }

        .gradient-border {
            border-left: 5px solid;
            border-image: linear-gradient(to bottom, #ff0000, #990000);
            border-image-slice: 1;
        }

        .step-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.2);
        }
    </style>

    <!-- AOS Init Script -->
    <script>
        AOS.init();
    </script>




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

    <!-- AOS (optional animation) -->

    <!-- Font Awesome & AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <section class="py-5"
        style="background: linear-gradient(to bottom, #0d1117, #000000); color: #fff; overflow: hidden;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Text Column -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right" style="z-index: 2;">
                    <h2 class="text-danger mb-4" style="font-size: 32px; font-weight: 700;">Why Businesses Choose MineHive
                    </h2>
                    <ul class="list-unstyled mb-0" style="font-size: 17px; line-height: 2;">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span class="text-warning fw-bold">Multi-Platform Expertise</span> – One agency to manage all
                            your digital channels.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span class="text-warning fw-bold">Data + Creativity</span> – Analytical insight meets creative
                            execution.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span class="text-warning fw-bold">Full Transparency</span> – Clear communication, detailed
                            reports, no hidden results.
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <span class="text-warning fw-bold">Growth Partnership</span> – We work <em>with</em> you, not
                            just for you.
                        </li>
                    </ul>
                </div>

                <!-- Floating Social Logos Column -->
                <div class="col-md-6 position-relative" style="height: 300px;" data-aos="fade-left">
                    <div
                        class="logos-wrapper position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center flex-wrap">
                        <i class="fab fa-google social-logo google" style="--i:0;"></i>
                        <i class="fab fa-facebook-f social-logo facebook" style="--i:1;"></i>
                        <i class="fab fa-youtube social-logo youtube" style="--i:2;"></i>
                        <i class="fab fa-tiktok social-logo tiktok" style="--i:3;"></i>
                        <i class="fab fa-whatsapp social-logo whatsapp" style="--i:4;"></i>
                        <i class="fab fa-telegram-plane social-logo telegram" style="--i:5;"></i>
                        <i class="fab fa-x-twitter social-logo x" style="--i:6;"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Custom Styling -->
    <style>
        .social-logo {
            font-size: 40px;
            margin: 15px;
            animation: float 3s ease-in-out infinite;
            animation-delay: calc(var(--i) * 0.3s);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .social-logo:hover {
            transform: scale(1.3) rotate(10deg);
        }

        /* Brand Colors */
        .google {
            color: #4285F4;
        }

        .facebook {
            color: #1877F2;
        }

        .youtube {
            color: #FF0000;
        }

        .tiktok {
            color: #010101;
        }

        .whatsapp {
            color: #25D366;
        }

        .telegram {
            color: #0088CC;
        }

        .x {
            color: #000000;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(10deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }
    </style>

    <!-- AOS Init -->
    <script>
        AOS.init();
    </script>



    <!-- Mission & Vision Section -->
    <section class="py-5" style="background-color: #0d1117; color: #fff;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Mission & Vision Text Column -->
                <div class="col-lg-6" data-aos="fade-right">
                    <!-- Mission -->
                    <div class="mb-5">
                        <h3 class="text-danger mb-3">Our Mission</h3>
                        <p style="line-height: 1.7;">
                            To help brands connect with the right audience at the right time and turn every marketing
                            investment into measurable growth. We believe in campaigns that inspire, influence, and convert.
                        </p>
                    </div>
                    <!-- Vision -->
                    <div>
                        <h3 class="text-danger mb-3">Our Vision</h3>
                        <p style="line-height: 1.7;">
                            To become a trusted global partner for businesses seeking to grow their digital presence,
                            combining innovation, strategy, and creativity for long-term success.
                        </p>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <img src="{{ asset('assets/images-m/info/info-2.png') }}" alt="Mission & Vision"
                        class="img-fluid rounded shadow-lg animate-img" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <!-- Optional Custom Styling -->
    <style>
        h3 {
            font-weight: 700;
        }

        p {
            color: #d1d5db;
            /* Slight gray for readability */
        }

        /* Subtle image animation */
        .animate-img {
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .animate-img:hover {
            transform: scale(1.08) translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
        }

        /* Responsive tweak */
        @media (max-width: 991px) {
            .animate-img:hover {
                transform: scale(1.05) translateY(0);
            }
        }
    </style>

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



    <!-- Taglines Section -->
    <section class="py-5" style="background-color: #111827; color: #fff;">
        <div class="container text-center">
            <!-- Section Title -->
            <h2 class="text-danger mb-5" style="font-size: 36px; font-weight: 800;">Taglines for MineHive</h2>

            <!-- Taglines Cards -->
            <div class="row justify-content-center g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="tagline-card d-flex align-items-center p-3 rounded shadow-sm">
                        <i class="fas fa-database text-warning me-3 fa-2x"></i>
                        <span class="flex-grow-1 text-start">“Where Data Meets Creativity.”</span>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="tagline-card d-flex align-items-center p-3 rounded shadow-sm">
                        <i class="fas fa-bullhorn text-warning me-3 fa-2x"></i>
                        <span class="flex-grow-1 text-start">“We Build Brands That Buzz.”</span>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="tagline-card d-flex align-items-center p-3 rounded shadow-sm">
                        <i class="fas fa-link text-warning me-3 fa-2x"></i>
                        <span class="flex-grow-1 text-start">“Turning Clicks Into Connections.”</span>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="tagline-card d-flex align-items-center p-3 rounded shadow-sm">
                        <i class="fas fa-chart-line text-warning me-3 fa-2x"></i>
                        <span class="flex-grow-1 text-start">“Marketing That Works. Growth That Lasts.”</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Styling -->
    <style>
        .tagline-card {
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .tagline-card:hover {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
            transform: translateY(-5px);
        }

        .tagline-card i {
            transition: transform 0.3s ease;
        }

        .tagline-card:hover i {
            transform: scale(1.2) rotate(10deg);
        }

        .tagline-card span {
            font-size: 18px;
            font-weight: 500;
        }
    </style>

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>




@endsection
