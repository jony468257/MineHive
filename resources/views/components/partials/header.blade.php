 <div class="row d-flex justify-content-between align-items-center"
     style="background-color: #000000; padding: 15px 20px; color: #ffffff;">

     <div class="logo">
         <style>
             @keyframes glowBlink {
                 0% {
                     filter: drop-shadow(0 0 2px #ffffff);
                 }

                 50% {
                     filter: drop-shadow(0 0 10px #c7f305);
                 }

                 100% {
                     filter: drop-shadow(0 0 2px #256ad1);
                 }
             }

             .glow-blink {
                 animation: glowBlink 2s infinite;
             }
         </style>
         <img id="logo" src="{{ asset('assets/image/logo/logo.png') }}" alt="MineHive Logo"
             style="width: 140px; height: auto;" class="glow-blink">

         <img class="nav-close-logo" src="{{ asset('assets/image/logo/logo.png') }}" alt="MineHive Logo"
             style="width: 140px; height: auto;">
     </div>

     <div class="header d-flex align-items-center">

         <!-- Collapse Button -->
         <button class="menu-button-collapse-button"
             style="background: none; border: none; color: #0e0909; font-size: 20px; margin-right: 10px;">
             <i class="ni-arrow-back"></i>
         </button>

         <!-- Mobile Menu Button -->
         <button class="mobile-menu-button"
             style="background: none; border: none; color: #160b0b; font-size: 20px; margin-right: 20px;">
             <i class="ni-menu"></i>
         </button>

         <!-- Language & Profile -->
         <div class="user-profile-section d-flex align-items-center p-0 ms-auto">

             <!-- Language Selector -->
             <select class="form-select me-3 language-selection"
                 style="background-color: #000000; color: #ffffff; border: 1px solid #3b3b3b;">
                 <option selected disabled style="color: #594c77;">Language</option>
                 <option value="bn" @selected(App::getLocale() === 'bn')>Bangla (BD)</option>
                 <option value="en" @selected(App::getLocale() === 'en')>English (USA)</option>
             </select>

             <!-- User Dropdown -->
             <div class="dropdown user-dropdown">
                 <div class="dropdown-header d-flex align-items-center dropdown-toggle" type="button"
                     data-bs-toggle="dropdown" aria-expanded="false"
                     style="cursor: pointer; background-color: #000000; color: #5a5a5a;">
                     <img class="user-profile user-profile-circle"
                         src="{{ Auth::user()->profile && file_exists('storage/' . Auth::user()->profile) ? asset('storage/' . Auth::user()->profile) : asset('assets/image/fake-user.jpg') }}"
                         alt="User Profile"
                         style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover; margin-right: 10px;" />
                     <div class="d-flex flex-column h-100 justify-content-end dropdown-user-name">
                         <h3 class="title-small user-name text-700" style="margin: 0; font-size: 16px; color: #ffffff;">
                             {{ Auth::user()->name }}
                         </h3>
                     </div>
                 </div>

                 <!-- Dropdown Menu -->
                 <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu"
                     style="background-color: #000000; border: 1px solid #444;">
                     <li><a class="dropdown-item" href="{{ route('profile.edit') }}" style="color: #ffffff;">Profile</a>
                     </li>
                     <li><a class="dropdown-item" href="{{ route('profile.password.change') }}"
                             style="color: #ffffff;">Change Password</a></li>
                     <li>
                         <hr class="dropdown-divider" style="border-color: #444;">
                     </li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button class="dropdown-item" type="submit" style="color: #ff4d4d;">Logout</button>
                     </form>
                 </ul>
             </div>
         </div>
     </div>
 </div>
