@extends('layout')

<div class="container">
    <div class="main-body">

<br><br><br><br><br>

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <div>
                                @if (Route::has('login'))

                                    @auth
                                        @foreach($user as $ss)

                                            @if (\Illuminate\Support\Facades\Auth::user()['email']==$ss->email)
                            @if(\Illuminate\Support\Facades\Auth::user()['profile_photo_path']== 0)
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            @else
                                <img src="{{asset('uplods/pro/'.$ss->profile_photo_path)}}" alt="Admin" class="rounded-circle" width="150">
                            @endif
{{--                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">--}}


                                                    <div class="mt-3">
                                                        <h4>{{$ss->name}}</h4>
                                                        <p class="text-secondary mb-1">Full Stack Developer</p>

                                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                                        <p class="lead">
                                                            <a class="btn btn-outline-primary" href="/profile/{{$ss->id}}" role="button">Edit
                                                                Profile!</a>
                                                        </p>
                                                    </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>

                                                    <div class="col-md-8">
                                                        <div class="card mb-3">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Full Name</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{$ss->name}}
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Email</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{$ss->email}}
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Phone</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{$ss->mob}}
                                                                    </div>
                                                                </div>
                                                                <hr>

                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <h6 class="mb-0">Nationality</h6>
                                                                    </div>
                                                                    <div class="col-sm-9 text-secondary">
                                                                        {{$ss->Nat}}
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                    <div class="row">
                                                                        <div class="col-sm-3">
                                                                            <h6 class="mb-0">National ID </h6>
                                                                        </div>
                                                                        <div class="col-sm-9 text-secondary">
                                                                            {{$ss->nat_id}}
                                                                        </div>
                                                                    </div>
                                                                <hr>
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <h6 class="mb-0">Passport No</h6>
                                                                            </div>
                                                                            <div class="col-sm-9 text-secondary">
                                                                                {{$ss->pas_no}}
                                                                            </div>
                                                                        </div>
                                                                <hr>
                                                                            <div class="row">
                                                                                <div class="col-sm-3">
                                                                                    <h6 class="mb-0">Death of Birth</h6>
                                                                                </div>
                                                                                <div class="col-sm-9 text-secondary">
                                                                                    {{$ss->d_b}}
                                                                                </div>
                                                                            </div>
                                                                <hr>
                                                                                <div class="row">
                                                                                    <div class="col-sm-3">
                                                                                        <h6 class="mb-0">Gender</h6>
                                                                                    </div>
                                                                                    <div class="col-sm-9 text-secondary">
                                                                                        {{$ss->gender}}
                                                                                    </div>
                                                                                </div>
                                                                <hr>
{{--                                                                <div class="row">--}}
{{--                                                                    <div class="col-sm-3">--}}
{{--                                                                        <h6 class="mb-0">Address</h6>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="col-sm-9 text-secondary">--}}
{{--                                                                        Bay Area, San Francisco, CA--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
                                                            </div>
                                                        </div>

                                                    </div>

                                </div>
        @if(\Illuminate\Support\Facades\Auth::user()['role']== 'Seeker')

        <div class="row gutters-sm">
            <div style="text-align: center" class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-title" >
                        <h4 style="color: #2d2b57">Applied Jobs</h4>
                    </div>
                    <div class="card-body">

                        @foreach($customer as $customer)
                        @foreach($seeker as $sek)
                            @if($customer->recruiter_id == $sek->customer_id and $sek->user_id == $ss->id)
                               <ol> <strong>{{$customer->name}}</strong></ol>
{{--                                @if($customer->recruiter_id == $sek->customer_id and $sek->user_id == $ss->id and $sek->select==1)--}}
{{--                                {{$customer->name}}--}}
{{--                                    @endif--}}

                            @endif

                        @endforeach
                        @endforeach

                    </div>

                </div>
            </div>
            <div style="text-align: center" class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-title">
                        <h4 style="color: #2d2b57">Selected for interview</h4>
                    </div>
                    <div class="card-body">

{{--                        @foreach($customer as $customer)--}}
{{--                            @foreach($seeker as $sek)--}}
{{--                                @if($customer->recruiter_id == $sek->customer_id and $sek->user_id == $ss->id and $sek->select==1)--}}
{{--                                    <ol> <strong>{{$customer->name}}</strong></ol>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        @endforeach--}}
{{--                        @foreach($seeker as $seeker )--}}
{{--                            @foreach($customer as $customer)--}}
{{--                                @if($seeker->user_id == $ss->id)--}}
{{--                                    @if($seeker->customer_id == $customer->recruiter_id)--}}
{{--                                        <ol> {{$customer->name}}</ol>--}}
{{--                                    @endif--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
      @else
                <div style="text-align: center" class="col-sm-6 mb-3">
                    <div class="card ">
                    <div class="card-title" >
                        <h4 style="color: #2d2b57">posted job</h4>
                    </div>
                        <div class="card-body">
                            @foreach($customer as $cust)
                                @if($cust->recruiter_id === $ss->id)
                                    <ol><strong>{{$cust->name}}</strong></ol>
                                @endif
                            @endforeach


                        </div>
                    </div>
                </div>

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </div>
</div>
@endif
@endif
@endforeach
@endif
@endif
</div>
