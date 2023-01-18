@if (Route::has('login'))
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()['role']=='Recruiter' )
            @extends('layout')
@extends('layout')
<section id="hero2" >
    <div class="hero2-container">
<form action="" method ="post">
    @csrf
    <div style="width: 250%" class="container">
        <h1 style="text-align: center;color: whitesmoke">
            Send Mail
        </h1>
        @if(session('success'))
            <b>{{session('success')}}</b>

        @endif
        <div style="padding-bottom: 10px">
        <input class="form-control" name="email" type="email" placeholder="Emil to">
        </div>
        <div style="padding-bottom: 10px">
        <input class="form-control" name="subject" type="text" placeholder="Subject to">
        </div>
        <div style="padding-bottom: 10px">
        <textarea class="form-control" name="content"  placeholder="name"></textarea>
        </div>
{{--            <button style="padding: 15px" class="btn btn-primary" onclick="">send</button>--}}
        <button type="button" class="btn btn-success" onclick="">Send</button>
    </div>

</form>
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
