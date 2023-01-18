@include('cdn')
<header id="header" class="fixed-top">
    <div class="container">


        <nav class="navbar navbar-light navbar-expand-md fixed-top border-dark border rounded shadow-lg d-inline-flex"
             style="filter: blur(0px);">
            <div class="container-fluid">
                <i class="fas fa-briefcase shadow d-flex"
                   style="font-size: 40px;color: rgb(232,218,244);filter: blur(0px) brightness(115%);margin: 05px;padding: 05px;"></i>
                <a class="navbar-brand text-white" href="#">Job Recruitment System</a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-white" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        @if (Route::has('login'))
                            @auth
                                @if(\Illuminate\Support\Facades\Auth::user()['email']=='anam1828@cseku.ac.bd' and \Illuminate\Support\Facades\Auth::user()['role']=='Admin')
                                    <li class="nav-item" role="presentation" data-bs-hover-animate="pulse">
                                        <a class="nav-link active text-white" href="/admin">Admin</a>
                                    </li>
                                @elseif(\Illuminate\Support\Facades\Auth::user()['email']!='anam1828@cseku.ac.bd' and \Illuminate\Support\Facades\Auth::user()['role']=='Admin')
                                    <li class="nav-item" role="presentation" data-bs-hover-animate="pulse">
                                        <a class="nav-link active text-white" href="/home">Home</a>
                                    </li>
                                @elseif (\Illuminate\Support\Facades\Auth::user()['role']=='Recruiter' and \Illuminate\Support\Facades\Auth::user()['select']=='1')
                                    <li class="nav-item" role="presentation" data-bs-hover-animate="pulse">
                                        <a class="nav-link active text-white" href="/home">Home</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-white" data-bs-hover-animate="pulse" href="/newshow">Recruiter</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                         <a  class="nav-link text-white" data-bs-hover-animate="pulse" href="/profile">Profile</a>
                                    </li>

                                @elseif(\Illuminate\Support\Facades\Auth::user()['role']=='Recruiter' and \Illuminate\Support\Facades\Auth::user()['select']=='0')
                                    <li class="nav-item" role="presentation" data-bs-hover-animate="pulse">
                                        <a class="nav-link active text-white" href="/recruiter">recruiter</a>
                                    </li>

                                @else
                                    <li class="nav-item" role="presentation" data-bs-hover-animate="pulse">
                                        <a class="nav-link active text-white" href="/home">Home</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-white" data-bs-hover-animate="pulse" href="/customer">Job
                                            Seeker</a>

                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-white" data-bs-hover-animate="pulse" href="/contact">Carrier
                                            Advice</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a  class="nav-link text-white" data-bs-hover-animate="pulse" href="/profile">Profile</a>
                                    </li>

                                @endif


                                <li class="nav-item" role="presentation"style="color:white">
                                    <form class="nav-link text-white" data-bs-hover-animate="pulse" method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </li>
                            @else
                                {{--                                    <a href="{{ route('login') }}" class="text-sm text-gray-45 underline">Login</a>--}}
                                <li class="nav-item" role="presentation"><a class="nav-link text-white"
                                                                            data-bs-hover-animate="pulse"
                                                                            href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    @if (Route::has('register'))
                                        <a class="nav-link text-white" data-bs-hover-animate="pulse"
                                           href="{{ route('register') }}">Register</a></li>
                            @endif
                        @endif
                        @endif
                    </ul>
                </div>

            </div>
        </nav>
    </div>


</header>
