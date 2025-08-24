<div class="row d-flex justify-content-between align-items-center">
    <div class="logo">
        <img class="nav-open-logo" src="{{ asset('assets/icons/logo-text.svg') }}" alt="" srcset="">
        <img class="nav-close-logo" src="{{ asset('assets/icons/mimba-logo.svg') }}" alt="" srcset="">
    </div>
    <div class="header">
        <button class="menu-button-collapse-button">
            <i class="ni-arrow-back"></i>
        </button>
        <button class="mobile-menu-button">
            <i class="ni-menu"></i>
        </button>
        <div class="logo">
            <img class="nav-open-logo" src="{{ asset('assets/icons/logo-text.svg') }}" alt="" srcset="">
        </div>

        <div class="user-profile-section d-flex align-items-center p-0">
            <select class="form-select me-3 language-selection" aria-label="Default select example">
                <option selected disabled>Language</option>
                <option value="bn" @selected(App::getLocale() === 'bn')>Bangla(BD)</option>
                <option value="en" @selected(App::getLocale() === 'en')>English(USA)</option>
            </select>
            <div class="dropdown user-dropdown">
                <div class="dropdown-header d-flex align-items-center dropdown-toggle" type="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="user-profile user-profile-circle "
                         src="{{ Auth::user()->profile && file_exists('storage/' . Auth::user()->profile) ? asset('storage/' . Auth::user()->profile) : asset('assets/image/fake-user.jpg') }}"
                         alt=""/>
                    <div class="d-flex flex-column h-100 justify-content-end dropdown-user-name">
                        <h3 class="title-small user-name text-700">{{ Auth::user()->name }}</h3>
                    </div>
                </div>
                <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('profile.password.change') }}">Change Password</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>

