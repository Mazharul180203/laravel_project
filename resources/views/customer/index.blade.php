@if (Route::has('login'))
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()['role']=='Seeker' )
@extends('layout')
<div></div>
<section id="hero" class="hero-container">

        <div class="container">

            <div class="section-title">
                <br>
                <div class="row">


                    <div class="col">
                        @include('cdn')
                        <form class="form-inline my-5 my-lg-3" method="post" action="/new_search">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="d-flex justify-content-center">
                                <div class="searchbar">
                                    <input class="search_input" type="text" name="query" id="query" type="search"
                                           placeholder="Search...">
                                    <a href="#" class="search_icon"><i class="fas fa-search" type="submit"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h1 class="text-center" style="padding:10px;color: white">Listed Jobs</h1>
                    </div>
                </div>
            </div>
        </div>


        @foreach($customer as $customer)
            <div class="container-fluid" style="margin: auto;width: 50%; padding: 10px">
                <div class="card border-secondary text-center" style="background-color: rgba(251,239,251,0.56);"
                     onclick="ShowDetails()">
                    <script>
                        function ShowDetails() {
                            location.href = "customer/{{$customer->id}}";
                        }
                    </script>
                    <div class="row mb-4">
                        <div class="col" style="padding: 15px">
                            <h5 class="card-title">{{$customer->name}}</h5>
                            <p class="card-text">At {{$customer->institution}}</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i>
                                {{$customer->location}}</p>
                            <p class="card-text">Vacancy: {{$customer->vacancy}}</p>
                            <p class="card-text">Deadline: {{$customer->deadline}}</p>

                            <p class="card-text">Category: {{$customer->catagory->name}}</p>

                        </div>
                        <hr class="my-4">
                        <div class="col" style="padding: 15px">
                            <p class="card-text">
                                <a class="btn btn-primary text-monospace border rounded shadow d-inline-flex visible"
                                   id="bt" href="customer/{{$customer->id}}" type="button">Job
                                    Details</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>


        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endif
                </div>
            @endif
        @endif

</section>
