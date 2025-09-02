 <footer class="custom-footer pt-5">
     <div class="container">
         <!-- Top Footer -->
         <div class="row align-items-center mb-4">
             <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                 <div class="logo">
                     <style>
                         @keyframes glowBlink {
                             0% {
                                 filter: drop-shadow(0 0 2px #f72702);
                             }

                             50% {
                                 filter: drop-shadow(0 0 10px #3105f3);
                             }

                             100% {
                                 filter: drop-shadow(0 0 2px #ff4800);
                             }
                         }

                         .glow-blink {
                             animation: glowBlink 2s infinite;
                         }
                     </style>
                     <img id="logo" src="{{ asset('assets/image/logo/logo.png') }}" alt="MineHive Logo"
                         style="width: 140px; height: auto;" class="glow-blink">
                 </div>
             </div>
             <div class="col-md-8">
                 <div class="row">
                     <div class="col-12 col-sm-6 mb-3 d-flex align-items-start">
                         <img src="{{ asset('assets/images-m/pin.png') }}" alt="Location" class="footer-icon">
                         <div>
                             <a href="https://www.google.com/maps/place/1010+Grand+St,+Brooklyn,+NY"
                                 class="footer-link">
                                 1010 Grand Avenue<br>New York, USA
                             </a>
                         </div>
                     </div>
                     <div class="col-12 col-sm-6 mb-3 d-flex align-items-start">
                         <img src="{{ asset('assets/images-m/massage.png') }}" alt="Message" class="footer-icon">
                         <div>
                             <a href="tel:009-215-5596" class="footer-link">009-215-5596</a> (Toll Free)<br>
                             <a href="mailto:info@example.com" class="footer-link">info@example.com</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Main Footer Widgets -->
         <div class="row text-start text-md-start">
             <div class="col-md-6 col-lg-3 mb-4">
                 <h5 class="footer-title">Company</h5>
                 <ul class="list-unstyled">
                     <li><a href="#" class="footer-link">About Us</a></li>
                     <li><a href="#" class="footer-link">Partners</a></li>
                     <li><a href="#" class="footer-link">Case Studies</a></li>
                     <li><a href="#" class="footer-link">Our Team</a></li>
                     <li><a href="#" class="footer-link">Career</a></li>
                     <li><a href="#" class="footer-link">Contact</a></li>
                 </ul>
             </div>

             <div class="col-md-6 col-lg-3 mb-4">
                 <h5 class="footer-title">Services</h5>
                 <ul class="list-unstyled">
                     <li><a href="#" class="footer-link">Real Time Analytics</a></li>
                     <li><a href="#" class="footer-link">Online Marketing</a></li>
                     <li><a href="#" class="footer-link">SEO Services</a></li>
                     <li><a href="#" class="footer-link">Pay Per Click</a></li>
                     <li><a href="#" class="footer-link">Email Marketing</a></li>
                     <li><a href="#" class="footer-link">Advertisement</a></li>
                 </ul>
             </div>

             <div class="col-md-6 col-lg-3 mb-4">
                 <h5 class="footer-title">Articles</h5>
                 <ul class="list-unstyled">
                     <li class="mb-2">
                         <a href="#" class="footer-link d-block">Twice profit than before you ever</a>
                         <small class="text-muted"><i class="fa fa-clock me-1"></i> Jan 14, 2018</small>
                     </li>
                     <li class="mb-2">
                         <a href="#" class="footer-link d-block">Twice profit than before you ever</a>
                         <small class="text-muted"><i class="fa fa-clock me-1"></i> Jan 14, 2018</small>
                     </li>
                     <li>
                         <a href="#" class="footer-link d-block">Twice profit than before you ever</a>
                         <small class="text-muted"><i class="fa fa-clock me-1"></i> Jan 14, 2018</small>
                     </li>
                 </ul>
             </div>

             <div class="col-md-6 col-lg-3 mb-4">
                 <h5 class="footer-title">Request a Quote</h5>
                 <form action="#" method="post">
                     <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                     <textarea name="message" rows="3" class="form-control mb-2" placeholder="Message" required></textarea>
                     <button type="submit" class="btn btn-danger w-100">Submit Now</button>
                 </form>
             </div>
         </div>

         <!-- Partner & Cards -->
         <div class="border-top border-secondary mt-5 pt-4">
             <div class="row align-items-center">
                 <div class="col-md-8 mb-3 mb-md-0">
                     <h6 class="text-uppercase mb-2">Partnership:</h6>
                     <div class="d-flex flex-wrap gap-3">
                         <img src="{{ asset('assets/images-m/partner/partner-1.png') }}" alt="" height="40">
                         <img src="{{ asset('assets/images-m/partner/partner-2.png') }}" alt="" height="40">
                         <img src="{{ asset('assets/images-m/partner/partner-3.png') }}" alt=""
                             height="40">
                         <img src="{{ asset('assets/images-m/partner/partner-4.png') }}" alt=""
                             height="40">
                     </div>
                 </div>
                 <div class="col-md-4 text-md-end">
                     <div class="d-flex justify-content-md-end gap-2">
                         <img src="{{ asset('assets/images-m/card/visa.png') }}" alt="" height="30">
                         <img src="{{ asset('assets/images-m/card/master-card.png') }}" alt=""
                             height="30">
                         <img src="{{ asset('assets/images-m/card/discover.png') }}" alt="" height="30">
                         <img src="{{ asset('assets/images-m/card/american-express.png') }}" alt=""
                             height="30">
                     </div>
                 </div>
             </div>
         </div>

         <!-- Copyright -->
         <div class="text-center text-md-start mt-4 pt-3 border-top border-secondary">
             <div class="row align-items-center">
                 <div class="col-md-6 mb-2 mb-md-0">
                     <p class="mb-0 small">&copy; 2018 All Rights Reserved <a href="#"
                             class="text-danger text-decoration-none">SEOPress</a></p>
                 </div>
                 <div class="col-md-6 text-md-end">
                     <div class="d-flex justify-content-center justify-content-md-end gap-2">
                         <a href="https://www.facebook.com/" class="text-danger"><i class="fa fa-facebook"></i></a>
                         <a href="https://twitter.com/" class="text-danger"><i class="fa fa-twitter"></i></a>
                         <a href="https://bd.linkedin.com/" class="text-danger"><i class="fa fa-linkedin"></i></a>
                         <a href="https://www.instagram.com/" class="text-danger"><i class="fa fa-instagram"></i></a>
                         <a href="#" class="text-danger"><i class="fa fa-google-plus"></i></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <style>
     .custom-footer {
         background-color: #0d0d1a;
         color: #fff;
         font-family: 'Poppins', sans-serif;
     }

     .custom-footer .footer-title {
         color: #f44336;
         margin-bottom: 15px;
     }

     .custom-footer .footer-link {
         color: #fff;
         text-decoration: none;
         transition: color 0.3s ease;
     }

     .custom-footer .footer-link:hover {
         color: #f44336;
     }

     .custom-footer .footer-icon {
         width: 30px;
         height: auto;
         margin-right: 10px;
     }

     .custom-footer .btn-danger {
         background-color: #f44336;
         border-color: #f44336;
         transition: transform 0.3s ease, box-shadow 0.3s ease;
     }

     .custom-footer .btn-danger:hover {
         transform: scale(1.05);
         box-shadow: 0 8px 20px rgba(244, 67, 54, 0.5);
     }

     /* Responsive */
     @media (max-width: 767px) {

         .custom-footer .text-md-start,
         .custom-footer .text-md-end {
             text-align: center !important;
         }
     }
 </style>
