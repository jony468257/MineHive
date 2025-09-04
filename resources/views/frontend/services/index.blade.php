 @extends('layouts.master')

 @section('title', 'Services Page')

 @section('content')
     <!-- Hero Section -->
     <section style="background-color: #0d1117; color: #fff; padding: 80px 0; position: relative; overflow: hidden;">
         <div class="container">
             <div class="row align-items-center">
                 <!-- Text Section -->
                 <div class="col-lg-6 mb-5 mb-lg-0 animate-fade-left">
                     <h1 class="text-danger mb-3" style="font-size: 28px; font-weight: 700;">Our Services</h1>
                     <h2 class="mb-4" style="font-size: 32px; line-height: 1.4; color: #fff;">
                         We connect your brand with the right audience, on the right platform, at the right time.
                     </h2>
                     <p style="margin-top: 20px; font-size: 16px; line-height: 1.7; color: #fff;">
                         1/ From search to social, we craft data-driven campaigns that get your brand seen, clicked, and
                         remembered.
                     </p>
                     <p style="margin-top: 20px; font-size: 16px; line-height: 1.7; color: #fff;">
                         2/ We don’t just run campaigns — we engineer brand influence.
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

     <!-- Animations -->
     <style>
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


     <!-- Services Cards Section -->
     {{-- <section class="py-5" style="background-color: #000;">
         <div class="container">
             <div class="row g-4">

                 <!-- Card 1: Google Marketing -->
                 <div class="col-md-4 text-center">
                     <a href="{{ route('services.details') }}" class="text-decoration-none">
                         <div class="card bg-dark text-white h-100 border-0 shadow-lg p-3">
                             <img src="{{ asset('assets/images-m/service-tab/analytics.png') }}" class="mx-auto mb-3"
                                 alt="Google Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                             <div class="card-body px-2">
                                 <h2 class="card-title text-danger mb-4" style="font-size: 28px; font-weight: 700;">
                                     Google Marketing
                                 </h2>
                                 <p>
                                     Promote your business through <span class="text-warning">Google's advertising
                                         network</span> to reach <span class="text-danger">potential customers</span>
                                     actively searching for your products or services.
                                 </p>
                                 <ul class="list-unstyled ps-3 text-start">
                                     <li><span class="text-danger">•</span> <strong>Search Ads:</strong> Show <span
                                             class="text-warning">targeted ads</span> at the top of Google search results
                                         for relevant keywords.</li>
                                     <li><span class="text-danger">•</span> <strong>Display Ads:</strong> Place visually
                                         <span class="text-warning">engaging banners</span> across millions of websites.
                                     </li>
                                     <li><span class="text-danger">•</span> <strong>Remarketing Campaigns:</strong>
                                         Re-target visitors who have already interacted with your brand.</li>
                                     <li><span class="text-danger">•</span> <strong>Google Shopping Ads:</strong> Showcase
                                         product images, prices, and offers directly in search results.</li>
                                     <li><span class="text-danger">•</span> <strong>Performance Tracking:</strong> Measure
                                         <span class="text-warning">impressions, clicks, conversions</span>, and ROI for
                                         continuous optimization.
                                     </li>
                                 </ul>
                                 <p class="mt-3 text-warning"><strong>Why it matters:</strong> Google captures over <span
                                         class="text-danger">90% of global search traffic</span> — being there means
                                     reaching customers exactly when they are ready to buy.</p>
                             </div>
                         </div>
                     </a>
                 </div>

                 <!-- Card 2: YouTube Marketing -->
                 <div class="col-md-4 text-center">
                     <div class="card bg-dark text-white h-100 border-0 shadow-lg p-3">
                         <img src="{{ asset('assets/images-m/service-tab/youtube.png') }}" class="mx-auto mb-3"
                             alt="YouTube Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                         <div class="card-body px-2">
                             <h2 class="card-title text-danger mb-4" style="font-size: 28px; font-weight: 700;">
                                 YouTube Marketing
                             </h2>
                             <p>
                                 Leverage the world's second-largest search engine to run <span
                                     class="text-warning">engaging video campaigns</span> for your brand.
                             </p>
                             <ul class="list-unstyled ps-3 text-start">
                                 <li><span class="text-danger">•</span> <strong>YouTube Video Ads:</strong> Skippable,
                                     non-skippable, bumper, and discovery ads.</li>
                                 <li><span class="text-danger">•</span> <strong>Channel Growth Strategy:</strong> Optimize
                                     your YouTube channel for <span class="text-warning">branding and engagement</span>.
                                 </li>
                                 <li><span class="text-danger">•</span> <strong>Video SEO:</strong> Optimize titles,
                                     descriptions, tags, and thumbnails for higher visibility.</li>
                                 <li><span class="text-danger">•</span> <strong>Content Planning:</strong> Suggest trending
                                     content ideas that fit your target audience.</li>
                                 <li><span class="text-danger">•</span> <strong>Engagement Boosting:</strong> Strategies to
                                     increase <span class="text-warning">likes, comments, and shares</span>.</li>
                             </ul>
                             <p class="mt-3 text-warning"><strong>Why it matters:</strong> YouTube reaches over <span
                                     class="text-danger">2 billion logged-in users monthly</span> — ideal for brand
                                 storytelling, product demos, and awareness campaigns.</p>
                         </div>
                     </div>
                 </div>

                 <!-- Card 3: Social Media Marketing -->
                 <div class="col-md-4 text-center">
                     <div class="card bg-dark text-white h-100 border-0 shadow-lg p-3">
                         <img src="{{ asset('assets/images-m/service-tab/bullhorn.png') }}" class="mx-auto mb-3"
                             alt="Social Media Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                         <div class="card-body px-2">
                             <h2 class="card-title text-danger mb-4" style="font-size: 28px; font-weight: 700;">
                                 Social Media Marketing
                             </h2>
                             <p>
                                 Promote your brand across <span class="text-warning">Facebook, Instagram, LinkedIn, and
                                     Pinterest</span> to engage audiences and drive conversions.
                             </p>
                             <ul class="list-unstyled ps-3 text-start">
                                 <li><span class="text-danger">•</span> <strong>Facebook Marketing:</strong> Ads, Boosted
                                     Posts, Lead Generation, Event Promotion, Community Building.</li>
                                 <li><span class="text-danger">•</span> <strong>Instagram Marketing:</strong> Ads, Reels
                                     Marketing, Influencer Collaborations, Content Aesthetics, Hashtag Strategy.</li>
                                 <li><span class="text-danger">•</span> <strong>LinkedIn Marketing:</strong> Ads, Thought
                                     Leadership Content, Lead Generation, Company Page Growth, Recruitment Campaigns.</li>
                                 <li><span class="text-danger">•</span> <strong>Pinterest Marketing:</strong> Ads, SEO for
                                     Pins, Product Catalog Integration, Content Planning, Traffic Building.</li>
                             </ul>
                             <p class="mt-3 text-warning"><strong>Why it matters:</strong> Each platform reaches different
                                 audiences — <span class="text-danger">Facebook & Instagram</span> for visual engagement,
                                 <span class="text-warning">LinkedIn</span> for B2B leads, <span
                                     class="text-danger">Pinterest</span> for purchase-intent users.
                             </p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section> --}}

     <section class="py-5" style="background-color: #0d1117; color: #fff;">
         <div class="container text-center">
             <h1 class="text-danger mb-3" style="font-size: 32px; font-weight: 700;">Our Services</h1>
             <p style="font-size: 18px; line-height: 1.6; max-width: 800px; margin: auto;">
                 We create <span class="text-warning">data-driven campaigns</span> across the most powerful digital
                 platforms — ensuring your brand reaches the right audience, at the right time, with the right message.
             </p>
         </div>
     </section>

     <!-- Services Cards Section -->
     <section class="py-5" style="background-color: #000;">
         <div class="container">
             <div class="row g-4">

                 <!-- Card 1: Google Marketing -->
                 <div class="col-md-4 text-center">
                     <div class="card bg-dark text-white h-100 border-0 shadow-lg p-4">
                         <img src="{{ asset('assets/images-m/service-tab/analytics.png') }}" class="mx-auto mb-3"
                             alt="Google Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                         <div class="card-body px-2">
                             <h2 class="card-title text-danger mb-3" style="font-size: 26px; font-weight: 700;">Google
                                 Marketing</h2>
                             <p>Reach customers exactly when they’re <span class="text-warning">searching for you</span>.
                             </p>
                             <ul class="list-unstyled ps-3 text-start">
                                 <li><span class="text-danger">•</span> <strong>Search Ads:</strong> Show your brand at the
                                     top of Google search results.</li>
                                 <li><span class="text-danger">•</span> <strong>Display Ads:</strong> Eye-catching banner
                                     ads across millions of sites.</li>
                                 <li><span class="text-danger">•</strong> Remarketing:</strong> Bring back visitors who
                                         showed interest but didn’t convert.</li>
                                 <li><span class="text-danger">•</strong> Shopping Ads:</strong> Showcase your products with
                                         images and prices in search.</li>
                                 <li><span class="text-danger">•</strong> Performance Tracking:</strong> Detailed analytics
                                         to measure ROI.</li>
                             </ul>
                             <p class="mt-2 text-warning"><strong>Why it works:</strong> Google dominates <span
                                     class="text-danger">90%+</span> of global search traffic, making it the most effective
                                 place to capture buying intent.</p>
                         </div>
                     </div>
                 </div>

                 <!-- Card 2: YouTube Marketing -->
                 <div class="col-md-4 text-center">
                     <div class="card bg-dark text-white h-100 border-0 shadow-lg p-4">
                         <img src="{{ asset('assets/images-m/service-tab/youtube.png') }}" class="mx-auto mb-3"
                             alt="YouTube Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                         <div class="card-body px-2">
                             <h2 class="card-title text-danger mb-3" style="font-size: 26px; font-weight: 700;">YouTube
                                 Marketing</h2>
                             <p>Tell your story through the world’s biggest video platform.</p>
                             <ul class="list-unstyled ps-3 text-start">
                                 <li><span class="text-danger">•</span> <strong>Video Ads:</strong> Skippable,
                                     non-skippable, bumper, and discovery ads.</li>
                                 <li><span class="text-danger">•</span> <strong>Channel Optimization:</strong> Improve
                                     visibility, branding, and engagement.</li>
                                 <li><span class="text-danger">•</span> <strong>Video SEO:</strong> Rank higher in YouTube
                                     search and suggested videos.</li>
                                 <li><span class="text-danger">•</span> <strong>Content Strategy:</strong> Plan videos that
                                     resonate with your audience.</li>
                                 <li><span class="text-danger">•</span> <strong>Engagement Boost:</strong> Increase likes,
                                     shares, and subscriber growth.</li>
                             </ul>
                             <p class="mt-2 text-warning"><strong>Why it works:</strong> YouTube reaches over <span
                                     class="text-danger">2 billion</span> users every month — ideal for awareness and
                                 storytelling.</p>
                         </div>
                     </div>
                 </div>

                 <!-- Card 3: Social Media Marketing -->
                 <div class="col-md-4 text-center">
                     <div class="card bg-dark text-white h-100 border-0 shadow-lg p-4">
                         <img src="{{ asset('assets/images-m/service-tab/bullhorn.png') }}" class="mx-auto mb-3"
                             alt="Social Media Marketing" style="width: 80px; height: 80px; object-fit: contain;">
                         <div class="card-body px-2">
                             <h2 class="card-title text-danger mb-3" style="font-size: 26px; font-weight: 700;">Social Media
                                 Marketing</h2>
                             <p>Build awareness, drive engagement, and boost sales across major social platforms.</p>
                             <ul class="list-unstyled ps-3 text-start">
                                 <li><span class="text-danger">•</span> <strong>Facebook Marketing:</strong> Ads, Boosted
                                     Posts, Lead Generation, Event Promotion, Group & Community Building.</li>
                                 <li><span class="text-danger">•</span> <strong>Instagram Marketing:</strong> Image, Story,
                                     Carousel, Reels Ads, Influencer Collaborations, Branded Feed & Content Strategy,
                                     Hashtag Optimization.</li>
                                 <li><span class="text-danger">•</span> <strong>LinkedIn Marketing:</strong> Sponsored
                                     Content & InMail Campaigns, B2B Lead Generation, Company Page Growth, Recruitment Ads.
                                 </li>
                                 <li><span class="text-danger">•</span> <strong>Pinterest Marketing:</strong> Promoted Pins,
                                     SEO for Pins & Boards, Product Catalog Integration, Seasonal Content Strategy.</li>
                             </ul>
                             <p class="mt-2 text-warning"><strong>Why it works:</strong> Each platform reaches different
                                 audiences — <span class="text-danger">Facebook & Instagram</span> for visual engagement,
                                 <span class="text-warning">LinkedIn</span> for B2B leads, <span
                                     class="text-danger">Pinterest</span> for purchase-ready users.</p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section>

     <!-- Font Awesome CDN for Icons -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

     <!-- Why Choose Us Section -->
     <section class="py-5 text-center" style="background-color: #0a0a0a;">
         <div class="container">
             <h2 class="text-danger mb-5" style="font-size: 32px; font-weight: 700;">Why Choose Us</h2>
             <div class="row text-white">
                 <div class="col-md-3 mb-4">
                     <div class="p-4 rounded bg-dark shadow-sm h-100 hover-up">
                         <i class="fas fa-cogs fa-2x text-danger mb-3"></i>
                         <h5 class="fw-bold text-white">Multi-platform</h5>
                         <p class="small text-secondary">Expertise across social, search & video platforms.</p>
                     </div>
                 </div>
                 <div class="col-md-3 mb-4">
                     <div class="p-4 rounded bg-dark shadow-sm h-100 hover-up">
                         <i class="fas fa-chart-line fa-2x text-danger mb-3"></i>
                         <h5 class="fw-bold text-white">Data-driven</h5>
                         <p class="small text-secondary">Decisions backed by analytics & performance data.</p>
                     </div>
                 </div>
                 <div class="col-md-3 mb-4">
                     <div class="p-4 rounded bg-dark shadow-sm h-100 hover-up">
                         <i class="fas fa-lightbulb fa-2x text-danger mb-3"></i>
                         <h5 class="fw-bold text-white">Creative</h5>
                         <p class="small text-secondary">Eye-catching campaigns that convert viewers.</p>
                     </div>
                 </div>
                 <div class="col-md-3 mb-4">
                     <div class="p-4 rounded bg-dark shadow-sm h-100 hover-up">
                         <i class="fas fa-search-dollar fa-2x text-danger mb-3"></i>
                         <h5 class="fw-bold text-white">Transparent</h5>
                         <p class="small text-secondary">We track, report & improve with clear reporting.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Call To Action Section with Lottie Animation -->
     <section class="py-5 text-center text-white"
         style="background: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)), url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f') center/cover no-repeat;">
         <div class="container">
             <h2 class="mb-4 text-danger" style="font-size: 32px; font-weight: 700;">Let’s Get Started</h2>
             <p class="lead mb-4 text-white">“Ready to grow your business? Let’s create a custom campaign for your brand.”
             </p>

             <!-- Lottie Animation -->
             <div class="d-flex justify-content-center mb-4">
                 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                 <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_u4yrau.json" background="transparent"
                     speed="1" style="width: 280px; height: 280px;" loop autoplay></lottie-player>
             </div>

             <!-- CTA Buttons -->
             <a href="#" class="btn btn-danger btn-lg me-3"><i class="fas fa-rocket me-2"></i>Start My Campaign</a>
             <a href="#" class="btn btn-outline-light btn-lg"><i class="fas fa-gift me-2"></i>Get My Free Plan</a>
         </div>
     </section>

     <!-- Optional CSS for Hover Effects -->
     <style>
         .hover-up {
             transition: all 0.3s ease;
             cursor: pointer;
         }

         .hover-up:hover {
             transform: translateY(-8px);
             box-shadow: 0 10px 20px rgba(255, 0, 0, 0.3);
         }

         .btn-outline-light:hover {
             background-color: #fff;
             color: #000;
             border-color: #fff;
         }
     </style>
 @endsection
