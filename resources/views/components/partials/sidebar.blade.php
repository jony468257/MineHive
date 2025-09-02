 <!-- resources/views/partials/sidebar.blade.php -->

<style>
    .left-side {
        background-color: #1e1e2f;
        color: #e4e6eb;
        min-height: 100vh;
        padding: 20px;
        width: 260px;
        font-family: 'Arial', sans-serif;
    }

    .left-side a {
        display: block;
        padding: 10px 15px;
        color: #cdd0d4;
        text-decoration: none;
        border-radius: 5px;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .left-side a:hover {
        background-color: #2e2e48;
        color: #ffffff;
    }

    .left-side a.active {
        background-color: #3f3f5a;
        color: #ffffff;
        font-weight: 600;
    }

    .menu-name, .sub-menu-name {
        margin-left: 10px;
        font-weight: 500;
    }

    .sub-menu-name {
        font-size: 0.9rem;
        color: #b0b3b8;
    }

    .sub-menu-name:hover {
        color: #fff;
    }

    .collapse-head {
        padding: 8px 0;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
        color: #a0a3a8;
    }

    .ni-dashboard,
    .ni-person,
    .ni-list-alt,
    .ni-format-color-text,
    .ni-format-color-fill {
        margin-right: 8px;
    }

    .nav-collapse-separator {
        border-color: #444;
        margin: 15px 0;
    }
</style>

<div class="left-side">
    <button class="mobile-menu-hide"><i class="arrow-back-ico"></i></button>

    <div class="logo mb-4 text-center">
        <img class="nav-open-logo" src="{{ asset('assets/icons/logo-text.svg') }}" alt="Logo" style="width: 150px;">
    </div>

    <div class="menu-scroller">

        {{-- Menu --}}
        <div class="nav-collapse">
            <div class="collapse-head mb-1">Menu</div>

            <div class="collapse-item show">
                <a href="{{ route('dashboard') }}"
                   @class(['collapse-item-single', 'active' => Route::is('dashboard')])>
                    <i class="ni-dashboard"></i><span class="menu-name">Dashboard</span>
                </a>

                {{-- Authorization --}}
                <div class="nav-collapse mt-3">
                    <div class="collapse-head">Authorization</div>
                    <div class="collapse-item mt-2">
                        <a href="{{ route('users.index') }}"
                           @class(['title-small', 'active' => Route::is('users.*')])>
                            <span class="sub-menu-name">User</span>
                        </a>
                        <a href="{{ route('roles.index') }}"
                           @class(['title-small', 'active' => Route::is('roles.*')])>
                            <span class="sub-menu-name">Role</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="nav-collapse-separator"/>

        {{-- Apps --}}
        <div class="nav-collapse">
            <div class="collapse-head">Apps</div>

            <div class="collapse-item show">
                <div class="nav-collapse mt-2">
                    <div class="collapse-head">Home</div>
                    <div class="collapse-item">
                        <a href="{{ route('sliders.index') }}"><span class="sub-menu-name">Slider</span></a>
                        <a href="{{ route('news.index') }}"><span class="sub-menu-name">News</span></a>
                         <a href="{{ route('consultancy.index') }}"><span class="sub-menu-name">Consultancy</span></a>
                        <a href="{{ route('blogs.index') }}"><span class="sub-menu-name">Blog</span></a>
                    </div>
                </div>

                <div class="nav-collapse mt-3">
                    <div class="collapse-head">Menu Group 2</div>
                    <div class="collapse-item">
                        <a href="#"><span class="sub-menu-name">Item 1</span></a>
                        <a href="#"><span class="sub-menu-name">Item 2</span></a>
                        <a href="#"><span class="sub-menu-name">Item 3</span></a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="nav-collapse-separator"/>

        {{-- Settings --}}
        <div class="nav-collapse">
            <div class="collapse-head">Settings</div>

            <div class="collapse-item show">
                <a href="#" class="collapse-item-single">
                    <i class="ni-format-color-text"></i>
                    <span class="menu-name">Parameters</span>
                </a>
                <a href="{{ route('feature.theme') }}"
                   @class(['collapse-item-single', 'active' => Route::is('feature.theme')])>
                    <i class="ni-format-color-fill"></i>
                    <span class="menu-name">Theme</span>
                </a>
            </div>
        </div>
    </div>
</div>
