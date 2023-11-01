<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav-link>
                {{-- <x-nav-link :active="request()->routeIs('profile')" href="{{ route('profile') }}">Profile</x-nav-link> --}}
                <x-nav-link :active="request()->routeIs('login')" href="{{ route('login') }}">login</x-nav-link>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.html">Dashboard style 1</a></li>
                        <li><a href="index2.html">Dashboard style 2</a></li>
                        <li><a href="index3.html">Dashboard style 3</a></li>
                    </ul>
                </li>


                {{-- <li>
                    <a href="calendar.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                    </a>
                </li> --}}


                <li>
                    <a wire:navigate href="{{ route('profile') }}"
                        class="dropdown-toggle no-arrow {{ Route::is('profile') ? 'active' : '' }}">
                        <span class="micon bi bi-diagram-3"></span><span class="mtext">Profile</span>
                    </a>
                </li>
                <li>
                    <a wire:navigate href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}"
                        class="dropdown-toggle no-arrow {{ Route::is('home') ? 'active' : '' }}">
                        <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
