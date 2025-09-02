@extends('layouts.master')

 @section('title', 'Portfolio Page')

 @section('content')

     <style>
         /* Scrollbar style */
         .scrolling-wrapper::-webkit-scrollbar {
             height: 8px;
         }

         .scrolling-wrapper::-webkit-scrollbar-thumb {
             background-color: #ccc;
             border-radius: 10px;
         }

         .scrolling-wrapper {
             scroll-behavior: smooth;
             padding-bottom: 5px;
         }

         /* Banner section */
         .banner-section {
             background-color: #111;
             min-height: 60vh;
             display: grid;
             place-items: center;
             text-align: center;
             margin: 0;
             padding: 0;
         }

         /* Floating visiting card */
         .floating-section {
             position: relative;
             z-index: 5;
             margin-top: -50px;
             /* Banner সাথে overlap */
             margin-bottom: 40px;
         }

         .floating-section .scrolling-wrapper {
             overflow-x: auto;
             overflow-y: hidden;
             white-space: nowrap;
             padding: 15px 0;
             scroll-behavior: smooth;
             gap: 15px;
         }

         .floating-section .card {
             display: inline-block;
             min-width: 250px;
             border: none;
             border-radius: 12px;
             overflow: hidden;
         }

         /* Scroll Buttons */
         .scroll-btn {
             position: absolute;
             top: 50%;
             transform: translateY(-50%);
             background-color: rgba(0, 0, 0, 0.5);
             border: none;
             color: white;
             font-size: 2rem;
             padding: 0 12px;
             cursor: pointer;
             border-radius: 5px;
             z-index: 10;
         }

         .left-btn {
             left: 0;
         }

         .right-btn {
             right: 0;
         }

         .scroll-btn:hover {
             background-color: rgba(0, 0, 0, 0.7);
         }

         /* Video Section */
         .video-section {
             background-color: #0b0b0b;
             padding: 60px 0;
             color: #fff;
         }

         /* Cover Photo Section */
         .cover-photo-section .cover-card {
             display: block;
             text-decoration: none;
             color: inherit;
             border-radius: 15px;
             overflow: hidden;
             position: relative;
         }

         .cover-image-wrapper {
             position: relative;
             width: 100%;
             height: 250px;
             overflow: hidden;
             border-radius: 15px;
         }

         .cover-image-wrapper img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             transition: transform 0.5s ease;
         }

         .cover-card:hover img {
             transform: scale(1.1);
         }

         .cover-overlay {
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background-color: rgba(0, 0, 0, 0.6);
             color: #fff;
             opacity: 0;
             transition: opacity 0.3s ease;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             text-align: center;
             padding: 15px;
         }

         .cover-card:hover .cover-overlay {
             opacity: 1;
         }

         .cover-overlay h3 {
             font-size: 1.5rem;
             margin-bottom: 10px;
         }

         .cover-overlay p {
             font-size: 1rem;
             overflow-y: auto;
             max-height: 6em;
             /* 6 lines scrollable */
         }
     </style>

     <!-- Banner Section -->
     <section class="banner-section">
         <div  class="mt-5">
             <h1 style="font-size: 5rem; font-weight: 900; color: white; margin:0; line-height:1.1;">Where Creativity</h1>
             <h1
                 style="font-size:5rem; font-weight:900; background:linear-gradient(45deg,#ff0000,#fff); -webkit-background-clip:text; -webkit-text-fill-color:transparent; display:inline-block; margin:0; line-height:1.1;">
                 Meets Results
             </h1>
         </div>

         <!-- Floating Visiting Cards -->

         <div class="container position-relative">
             <button class="scroll-btn left-btn" onclick="scrollLeft()">&#10094;</button>
             <button class="scroll-btn right-btn" onclick="scrollRight()">&#10095;</button>

             <div class="scrolling-wrapper d-flex" id="scrollWrapper">
                 @for ($i = 1; $i <= 6; $i++)
                     <div class="card me-3" style="background-color: {{ $i % 2 == 0 ? '#2a2a2a' : '#1c1c1c' }}">
                         <img src="{{ asset('assets/image/brand card/bicavs.jpg') }}" class="card-img-top"
                             alt="Card {{ $i }}">
                     </div>
                 @endfor
             </div>
         </div>
     </section>

     <script>
         const scrollContainer = document.getElementById('scrollWrapper');

         function scrollLeft() {
             scrollContainer.scrollBy({
                 left: -300,
                 behavior: 'smooth'
             });
         }

         function scrollRight() {
             scrollContainer.scrollBy({
                 left: 300,
                 behavior: 'smooth'
             });
         }
     </script>

     <!-- Video Section -->
     <section class="video-section">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-md-6 mb-4 mb-md-0">
                     <h2 class="mb-4"><span style="color:#ff4d4d;">Flourish Brands</span> in the Digital Landscape Through
                         <span style="color:#fff;">Expert Video Production</span></h2>
                     <p style="color:#ddd;">At MineHive, our passion lies in harnessing the immense impact of expert video
                         production to drive business success in the digital realm.</p>
                     <p style="color:#bbb;">A recent study by Wyzowl revealed that <span style="color:#ff4d4d;">92%</span>
                         of marketers consider video essential. <span style="color:#ff4d4d;">84%</span> of consumers made
                         purchases after watching a video, and <span style="color:#ff4d4d;">74%</span> were influenced by
                         product explainers.</p>
                     <p>When you’re ready to harness the potential of video in the digital world, <strong
                             style="color:#ff4d4d;">IMBD Agency</strong> is your dedicated partner for success.</p>
                 </div>
                 <div class="col-md-6 text-center">
                     <img src="{{ asset('assets/image/brand card/OVC.jpg') }}" alt="Video Production"
                         class="img-fluid rounded shadow-lg mb-4">
                     <a href="#video-solutions" class="btn btn-danger px-4 py-2">Explore Video Solutions</a>
                 </div>
             </div>
         </div>
     </section>

     <!-- Cover Photo Section -->
     <section class="cover-photo-section py-5" style="background-color: #0b0b0b;">
         <div class="container">
             <div class="row g-4">
                 <!-- Card 1 -->
                 <div class="col-md-4 col-sm-6">
                     <a href="#" class="cover-card">
                         <div class="cover-image-wrapper">
                             <img src="{{ asset('assets/image/brand card/bicavs.jpg') }}" alt="Card 1">
                             <div class="cover-overlay">
                                 <h3>Card Title 1</h3>
                                 <p>Short description for card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Card 2 -->
                 <div class="col-md-4 col-sm-6">
                     <a href="#" class="cover-card">
                         <div class="cover-image-wrapper">
                             <img src="{{ asset('assets/image/brand card/expense-bd.jpg') }}" alt="Card 2">
                             <div class="cover-overlay">
                                 <h3>Card Title 2</h3>
                                 <p>Short description for card 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Card 3 -->
                 <div class="col-md-4 col-sm-6">
                     <a href="#" class="cover-card">
                         <div class="cover-image-wrapper">
                             <img src="{{ asset('assets/image/brand card/ftc-edu.jpg') }}" alt="Card 3">
                             <div class="cover-overlay">
                                 <h3>Card Title 3</h3>
                                 <p>Short description for card 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                 </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </div>
     </section>

     <style>
         .cover-card {
             display: block;
             text-decoration: none;
             color: inherit;
             border-radius: 15px;
             overflow: hidden;
             position: relative;
             transition: transform 0.3s ease;
         }

         .cover-card:hover {
             transform: scale(1.03);
         }

         .cover-image-wrapper {
             position: relative;
             width: 100%;
             height: 250px;
             overflow: hidden;
             border-radius: 15px;
         }

         .cover-image-wrapper img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             transition: transform 0.5s ease;
         }

         .cover-card:hover img {
             transform: scale(1.1);
         }

         .cover-overlay {
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background-color: rgba(0, 0, 0, 0.6);
             color: #fff;
             opacity: 0;
             transition: opacity 0.3s ease;
             display: flex;
             flex-direction: column;
             justify-content: center;
             align-items: center;
             text-align: center;
             padding: 15px;
         }

         .cover-card:hover .cover-overlay {
             opacity: 1;
         }

         .cover-overlay h3 {
             font-size: 1.5rem;
             margin-bottom: 10px;
         }

         .cover-overlay p {
             font-size: 1rem;
             overflow-y: auto;
             max-height: 6em;
         }
     </style>
     <section class="graphic-growth-section py-5" style="background-color: #0b0b0b;">
         <div class="container">
             <div class="row align-items-center">
                 <!-- Left Image -->
                 <div class="col-md-6 mb-4 mb-md-0">
                     <img src="{{ asset('assets/images-m/Graphics.png') }}"
                         alt="Graphics that Deliver Business Growth" class="img-fluid rounded shadow-lg">
                 </div>

                 <!-- Right Text -->
                 <div class="col-md-6 text-white">
                     <h2 style="color: #ff4d4d; font-size: 2.5rem; margin-bottom: 20px;">
                         Graphics that Deliver Business Growth
                     </h2>
                     <p>
                         At IMBD Agency, our commitment to delivering business growth through impactful design has been
                         unwavering since 2016. Our global and local clients have witnessed the transformative power of our
                         visuals,
                         meticulously crafted by our dynamic graphic design team. Each project is a success story,
                         showcasing how our
                         designs play a vital role in achieving our clients’ goals. We take pride in our ability to create
                         visuals that
                         not only captivate but also drive tangible business results. Explore our portfolio and witness
                         firsthand the
                         potential of graphics that deliver business growth.
                     </p>
                     <p>
                         Our portfolio stands as a testament to the success stories woven into each project, illustrating
                         the pivotal
                         role our designs play in realizing and surpassing our clients’ goals. We consider every undertaking
                         not merely
                         as an assignment but as an opportunity to create visual narratives that resonate and drive tangible
                         business results.
                     </p>
                 </div>
             </div>
         </div>
     </section>

     <style>
         .graphic-growth-section h2 {
             font-weight: 700;
         }

         .graphic-growth-section p {
             color: #ffffff;
             font-size: 1rem;
             line-height: 1.8;
         }

         .graphic-growth-section img {
             width: 100%;
             height: auto;
             object-fit: cover;
         }
     </style>
 <section class="creative-website-section py-5" style="background-color:#111;">
    <div class="container px-0">
        <div class="row align-items-center">
            <!-- Left Side: Title + Buttons -->
            <div class="col-md-6 px-3">
                <h2 class="text-white mb-4 animate__animated animate__fadeInLeft">
                    A Creative Website Can Fulfil Business Proposes
                </h2>

                <div class="button-list d-flex flex-wrap gap-3  ">
                    @php
                    $clients = [
                        "Go by Fabrifest","Eduman","Lucia Belia","Aurora Elegance","South Seven",
                        "Labahtong","Tezewa","Dr Sayedul Haque","Nabobi","SEOK","Artho BDX",
                        "Ahmad Organic Food","Chip Crafters","Bicavs","Dr Gazi & Associates",
                        "Specialized Gastroliver Care","Mama Achar","Charter Deal"
                    ];
                    @endphp

                    @foreach($clients as $key => $client)
                        <button class="custom-btn animate__animated animate__fadeInLeft animate__delay-{{ $key }}s">
                            {{ $client }}
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-md-6 px-3 text-center animate__animated animate__fadeInRight">
                <img src="{{ asset('assets/images-m/Dr-Gazi-and-associates.jpg') }}" class="img-fluid rounded shadow-lg" alt="Creative Website">
            </div>
        </div>
    </div>
</section>

<!-- Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
.creative-website-section h2 {
    font-size: 2.5rem;
    color: #fff;
    font-weight: 700;
}

/* Custom button styling */
.button-list .custom-btn {
    border-radius: 0.15rem; /* 4-corner small rounded */
    padding: 10px 20px;
    font-weight: 500;
    background-color: #ff0000; /* full red */
    color: #fff; /* white text */
    border: none;
    transition: transform 0.3s, background-color 0.3s, color 0.3s;
    margin-bottom: 10px; /* vertical spacing */
    margin-right: 10px; /* horizontal spacing */
}

.button-list .custom-btn:hover {
    transform: scale(1.05);
    background-color: #fff; /* hover white */
    color: #ff0000; /* text red */
}
</style>

     
            
          
            
         

        
     
 

 


 @endsection
