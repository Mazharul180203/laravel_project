@if (Route::has('login'))
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()['role']=='Recruiter' )
@extends('layout')
@extends('cdn')
<section id="hero" class="hero1-container">
    <div class="container">

        <div class="section-title">
            <br>
            <div class="row">


                <div class="col">
                    @include('cdn')
                    <form class="form-inline my-5 my-lg-3" method="post" action="/new_search2">
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

            </div>
        </div>


        <div class="section-title">
            <br>
            <div class="row">

                <div class="col">
                    <h1  style="padding:10px; color: white">Job Recruiter</h1>
                </div>
            </div>
        </div>
    </div>


    <form action="customer" method="post" class="pb-5">
        <div class="row">
            <div class="col-12">
                <p class="btn-get-started scrollto" style="padding:10px; margin-left:10px"><a href="customer/create" class="btn btn-success"> Add New
                        job</a></p>
                <hr>
            </div>
        </div>
    </form>
    <div class="row">
    </div>
        <div>

    @if (Route::has('login'))

        @auth
            @foreach($user as $ss)

                @if (\Illuminate\Support\Facades\Auth::user()['email']===$ss->email)
                    <div>
                        <h1 class="" style="text-align: center;padding: 10px; color: white">Hey,I am
                            Recruiter {{$ss->name}}</h1>
                    </div>
                    @foreach($seeker as $seeker)

                        @if($seeker->customer_id === $ss->id)
                            <div class="center" style="margin: auto;width: 50%; padding: 10px">
                                <div class="card border-secondary text-center"
                                     style="background-color: rgba(251,239,251,0.56);">
                                    <div class="card-body text-center border rounded"
                                         style="background-color: rgba(251,239,251,0.56);margin: 10px;padding: 15px;">
                                        <div></div>
                                        <h4 class="card-title">{{$seeker -> name}}</h4>
                                    </div>
                                    <div class="text-left border rounded-0"
                                         style="padding: 5px;margin: 10px;background-color: rgba(251,239,251,0.56);">
                                        <div class="row" style="margin: 10px;padding: 10px;">
                                            <div class="col" style="margin: 08px;padding: 5px;">
                                                <div>

                                                    <p class="card-text"><i class="far fa-envelope-open"></i>  {{$seeker->email}}</p>
                                                    <p class="card-text"><i class="fas fa-graduation-cap"></i>  {{$seeker->sub}}</p>
                                                    <p class="card-text"><i class="fa fa-university"></i>  {{$seeker->ins_name}}</p>
                                                    <p class="card-text">Exprence:  {{$seeker->exp}}</p>
                                                    <a style="color: darkblue" href="newshow/{{$seeker->id}}"><i class="fas fa-paperclip"></i> Attachment</a>
                                                    <br><br>
                                                    @if($seeker->select==1)
                                                       <strong><p style="color: green"> {{'Email is send'}}</p></strong>
                                                        @endif
                                                </div>
                                            </div>
                                            <div class="col" style="opacity: 0.87;filter: brightness(122%);">
                                                <div class="btn-group d-inline-flex" role="group"
                                                     style="margin: 0;padding: 10px;">

                                                    <!DOCTYPE html>
                                                    <html>
                                                    <head>
                                                        <style>
                                                            .button {
                                                                display: inline-block;
                                                                padding: 15px 25px;
                                                                font-size: 24px;
                                                                cursor: pointer;
                                                                text-align: center;
                                                                text-decoration: none;
                                                                outline: none;
                                                                color: #fff;
                                                                background-color: #4CAF50;
                                                                border: none;
                                                                border-radius: 15px;
                                                                box-shadow: 0 9px #999;
                                                            }

                                                            .button:hover {background-color: #3e8e41}

                                                            .button:active {
                                                                background-color: #3e8e41;
                                                                box-shadow: 0 5px #666;
                                                                transform: translateY(4px);
                                                            }
                                                        </style>
                                                    </head>
                                                    <body>


                                                    <form action="/newshow/{{$seeker->id}}" method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PATCH')
                                                        <div>
                                                            <input type="hidden" id="select" name="select"
                                                                   value="1">
                                                            <p><input class="button" style="text-align:center;background-color: #1e0033 ;color: wheat; padding: 9px 20px;margin: 17px;font-size: 20px;" type="submit" value="Select"></p>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div>
                                                    <p><a class="button" style="text-align:center; background-color: #1e0033 ;color: wheat; padding: 9px 20px;margin: 17px;font-size: 20px;"href="newshow4/email">Email</a></p>
                                                </div>

                                            </div>
                                            </body>
                                            </html>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif

    @endif
        </div>




</section>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endif
                </div>
            @endif
        @endif
