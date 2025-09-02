@extends('layouts.master')

@section('title', 'Services Page')

@section('content')
    <section style="background-color: #0d1117; color: #fff; padding: 80px 0; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-6 mb-5 mb-lg-0 animate-fade-left">
                    <h2 style="font-size: 32px; line-height: 1.4;">
                        From <span style="color: #f44336;">Strategy</span> to <span style="color: #f44336;">Screen</span>:
                        MineHive - Fueling Your Digital Evolution with excellence.
                    </h2>
                    <p style="margin-top: 20px; font-size: 16px; line-height: 1.7;">
                        Since our establishment in 2016, <span style="color: #f44336;">MineHive Agency</span> has been the
                        cornerstone of success for numerous international and local businesses. As your dedicated Digital
                        Marketing Agency in Bangladesh, we’ve seamlessly blended innovation and expertise. From strategic
                        inception to captivating screens, our journey has been marked by excellence. So partner with us as
                        we continue to navigate the digital realm, ensuring your brand’s seamless and successful evolution
                        in this dynamic landscape.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 text-center animate-fade-right">
                    <img src="{{ asset('assets/images-m/service-tab/image.png') }}" alt="IMBD Agency"
                        class="img-fluid rounded shadow" style="border: 4px solid #ffffff10;">
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Fade-in Animations */
        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-left {
            opacity: 0;
            animation: fadeInLeft 1s forwards;
            animation-delay: 0.3s;
        }

        .animate-fade-right {
            opacity: 0;
            animation: fadeInRight 1s forwards;
            animation-delay: 0.5s;
        }

        /* Responsive */
        @media(max-width: 768px) {

            .animate-fade-left,
            .animate-fade-right {
                animation: fadeInUp 1s forwards;
                transform: translateY(20px);
            }
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="py-5" style="background-color: #000;">
        <div class="container">
            <div class="row gy-5 gx-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <a href="{{ route('services.details') }}" class="text-decoration-none">
                        <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4">
                            <img src="https://via.placeholder.com/600x400" class="card-img-top rounded mb-3" alt="Image 1">
                            <div class="card-body px-2">
                                <h2 class="card-title text-danger">Digital Marketing</h2>
                                <p class="card-text">Elevate your online presence with our strategic digital marketing
                                    solutions, merging tactics and trends to grow your brand.</p>
                            </div>
                        </div>
                    </a>
                </div>


                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top rounded mb-3" alt="Image 2">
                        <div class="card-body px-2">
                            <h2 class="card-title text-danger">VSMM</h2>
                            <p class="card-text">Navigate and optimize your brand’s social landscape for maximum engagement
                                through our Virtual Social Media Marketing.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card bg-dark text-white h-100 border-0 shadow-sm p-3 mb-4">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top rounded mb-3" alt="Image 3">
                        <div class="card-body px-2">
                            <h2 class="card-title text-danger">SEO</h2>
                            <p class="card-text">Ensure your brand is seen online with expert SEO strategies that put you on
                                top of search results.</p>
                        </div>
                    </div>
                </div>

            
    </section>






@endsection
