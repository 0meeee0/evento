<header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#">E<span>V</span>ento</a></h1>
                <a href="#intro" class="scrollto">
                    <img src="img/logo.png" alt="" title="">
                </a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                   
                    @auth

                    @role('admin')
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endrole
                    @role('organiser')
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('addEvent') }}">New</a></li>
                    @endrole
                   <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                    <!-- <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                    </x-dropdown-link> -->


                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Signup</a></li>
                    @endauth
                    
                </ul>
            </nav>
        </div>
    </header>