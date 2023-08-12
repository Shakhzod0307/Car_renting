<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="{{route('cars')}}" class="nav-link">Cars</a></li>
	          <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

	          <li class="nav-item"><a href="{{route('user_order')}}" class="nav-link">Orders</a></li>

              @if (Route::has('login'))

                @auth
                    @if(Auth::user()->role == '1' )
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><button  id="profile_btn" class="underline text-sm text-gray-600
                            hover:text-gray-900 rounded-md focus:outline-none focus:ring-2
                        focus:ring-offset-2 focus:ring-indigo-500 ml-2"><a style="color:black;" href="{{route('admin')}}">admin</a></button>
                        </li>

                        <li><button  id="profile_btn" class="underline text-sm text-gray-600
                        hover:text-gray-900 rounded-md focus:outline-none focus:ring-2
                        focus:ring-offset-2 focus:ring-indigo-500 ml-2"><a style="color:black;" href="{{ url('user/profile') }}">Profile</a></button></li>
                        <li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf

                                <button id="profile_btn" type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                    </li>





                    @else

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">{{Auth::user()->name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><button  id="profile_btn" class="underline text-sm text-gray-600
                        hover:text-gray-900 rounded-md focus:outline-none focus:ring-2
                        focus:ring-offset-2 focus:ring-indigo-500 ml-2"><a style="color:black;" href="{{ url('user/profile') }}">Profile</a></button></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf

                                <button type="submit" id="profile_btn" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                    </li>
                    @endif
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                    @endif
                @endauth

        @endif

	        </ul>
	      </div>
	    </div>
	  </nav>

<style>

#profile_btn
{
    width: 120px;

}

#profile_btn:hover
{
    margin-bottom: 5px;
    margin-top: 5px;
    background-color: springgreen;
    width: 140px;

}

</style>



