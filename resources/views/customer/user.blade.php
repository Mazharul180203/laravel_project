@if (Route::has('login'))
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()['role']=='Seeker' )

@extends('layout')

<section id="team" class="team">

    <div class="container">

        <div class="section-title">
            <br>
            <div class="jumbotron">
                <h2 class = "display-3">Blogs Posted By the admin</h2>
            </div>


        </div>


        <ul>
            @foreach($customer as $customer)
                <hr>
                <div class="container row" >
                   ----------------------------------
                    <div class="col-1" style="margin-bottom:2%; padding:10px">
                        <ul>{{ $customer->id }}</ul>
                    </div>

                    <div class="container">
                        <h2>{{ $customer->take }}</h2>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{{ $customer->take }}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h4> {{ $customer->name }} </h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    ---------------------------------
                    <div class="col-1" style="margin-bottom:2%; padding:10px">
                        <ul>{{ $customer->id }}</ul>
                    </div>

                    <div class="col-10" style="width:100%; margin-bottom:5%">
                <div class="card" >
                     <div class ="card-title" >
                        <ul><h4>{{ $customer->take }}</h4></ul>
                     </div>
                <div class="card-text">
                    <ul style="padding:10px" >{{ $customer->name }}</ul>
                </div>
                    </div>
                </div>

            </div>

            @endforeach
        </ul>
    </div>


</section>  <!-- End Our Team Section -->
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endif
                </div>
            @endif
        @endif
