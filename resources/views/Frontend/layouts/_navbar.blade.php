<nav class="navbar navbar-expand-md navbar-light fixed-top navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            My<span>Blo</span>g
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">


                <li class="nav-item {{ Route::currentRouteName() == 'frontend.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'pages.about' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('pages.about') }}">About</a>
                </li>

                <li class="nav-item dropdown {{ Route::currentRouteName() == 'getPostsByCategory' ? 'active' : '' }}">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Categories <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        
                        @foreach( categories() as $category )
                            <a href="{{ route('getPostsByCategory' , [$category->slug]) }}" class="dropdown-item">{{ $category->name }}</a>
                        @endforeach 
                        
                    </div>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'frontend.posts.index' || Route::currentRouteName() == 'frontend.posts.show' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('frontend.posts.index') }}">Blog</a>
                </li>

                <li class="nav-item {{ Route::currentRouteName() == 'pages.contact' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('pages.contact') }}">Contact</a>
                </li>


                <!-- Authentication Links -->
                @guest
                    <li class="nav-item {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img style="width:30px;height:30px;margin-bottom:-5px;border-radius:50%;margin-right:5px" src="{{ asset(auth()->guard('web')->user()->avatar) }}" alt="">{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('frontend.profile.index') }}">Profile</a>

                            <a class="dropdown-item" href="{{ route('frontend.user.logout') }}">
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>
                @endguest


                
                    
            </ul>
        </div>

        <!-- Form For Search -->
        <div class="live-search-form">
            <form action="{{ route('frontend.posts.search') }}" method="GET">
                @csrf
                <input type="text" name="search"  placeholder="Write your search here ..." class="form-control searchBox" autocomplete="off" required>

                <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i> Search</button>
            </form>

            <div class="searchContent">
                
            </div>

        </div>

        

    </div>
</nav>



