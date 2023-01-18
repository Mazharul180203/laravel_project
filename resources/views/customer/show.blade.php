@if (Route::has('login'))
@auth
@if(\Illuminate\Support\Facades\Auth::user()['role']=='Seeker' )
@extends('layout')
@extends('layout')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Details of Job</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
{{--    <link href="/assets/img/favicon.png" rel="icon">--}}
{{--    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">--}}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">
{{--    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">--}}
{{--    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">--}}
{{--    <link href="/assets/css/style.css" rel="stylesheet">--}}

</head>
<body>
<main id="main">
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="text-info" style="text-align: center; color: #33273f">Details Of  {{$customer->name}}</h1>
                <ol>
                    <li><a style="color: blue" href="/home">Home</a></li>
                    <li>Inner Page</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <h3 class="card-header">{{ $customer->name}}</h3>
        <div class="card-body">
            <h5 class="card-title">Category: {{$customer->catagory->name}}</h5>
            <h6 class="card-subtitle text-muted">{{$customer->institution}}</h6>
        </div>
        {{--            <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">--}}
        {{--                <rect width="100%" height="100%" fill="#868e96"></rect>--}}
        {{--                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>--}}
        {{--            </svg>--}}
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Location: {{ $customer->location}}</li>
            <li class="list-group-item">Job Experience: {{$customer->exp}}</li>
            <li class="list-group-item">Recruiter's Email: {{$customer->email}} </li>
        </ul>
        <div class= "card-body">
            <p class="card-text"></p>
            <iframe src="{{asset('uplods/mazhar/'.$customer->image)}}" style="width:90%; height:500px;" frameborder="0"></iframe>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">Published At: {{$customer->created_at}}</li>

            </ul>
            <div>
                @extends('cdn')
{{--                <button href ="/customer/new/{{$customer->id}}" target="_blank" type="button" class="btn btn-primary btn-lg btn-block">Apply</button>--}}
                <input type="button" class="btn btn-success btn-lg btn-block" value="Apply" onclick=" relocate_home()">

                <script>
                    function relocate_home()
                    {
                        location.href = "/customer/new/{{$customer->id}}";
                    }
                </script>
{{--                <p style="text-align: center"><a class="one" href="/customer/new/{{$customer->id}}" target="_blank" style="font-size: large">Apply</a></p>--}}

            </div>
        </div>

    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            <strong><span>All rights received. </span></strong>.Thank You
        </div>
        <div class="credits">
            Designed by Mazharul Islam & Asif Anam
        </div>
    </div>
</footer><!-- End #footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/venobox/venobox.min.js"></script>
<script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
@else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
        @endif
        @endif
        </div>
    @endif
@endif



