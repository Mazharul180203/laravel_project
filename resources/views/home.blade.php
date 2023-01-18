@extends('layout')
@section('title','Home Page')

<section id="hero1" >
    <div class="hero1-container">
        <h1>Welcome to Get New Experience</h1>
        <h2>Land Of Job Community</h2>

        @if (Route::has('login'))
            @auth
                @if (\Illuminate\Support\Facades\Auth::user()['role']=='Seeker')
                    <a href="/customer" class="btn-get-started scrollto">Get Started</a>

                        @elseif(\Illuminate\Support\Facades\Auth::user()['role']=='Recruiter' and \Illuminate\Support\Facades\Auth::user()['select']=='1')

                    <a href="/newshow" class="btn-get-started scrollto">Get Started</a>
                        @endif

                        @endif
                        @endif
                    </section>
    </section>


<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
{{--                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}
                </head>
                <body>

                <div class="container">
                    <h2>Admin Panel</h2>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Deails of admin</h4>
                                </div>
                                <div class="modal-body">
                                    <h4> First of all admin is the main handeler of our system. Admin's main work here is to chose the eligible recruiter  after getting there application. Then the admin can post blogs.
                                    </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                </body>
                </html>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                </head>
                <body>

                <div class="container">
                    <h2>Recruiter's Side</h2>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" style="padding: 10px">&times;</button>
                                    <h4 class="modal-title">Deails of recruiter</h4>
                                </div>
                                <div class="modal-body">
                                    <h4> Recruiter can post job vacancy for the general seekers. After applying the job that the recruiter posted, the recruiter can call the for interview.
                                    </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                </body>
                </html>
            </div>
            <div class="col-lg-4 col-md-6 icon-box">
                <div class="icon"><i class="icofont-earth"></i></div>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                </head>
                <body>

                <div class="container">
                    <h2>Seeker's Side</h2>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Deails of seeker</h4>
                                </div>
                                <div class="modal-body">
                                    <h4> Seeker can see the job posted by the recruiter. Then seeker can post job form this portal.
                                    </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                </body>
                </html>
            </div>

    </div>
</section><!-- End Services Section -->

<section id="contact" class="contact section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

            <div class="col">
                <div class="contact-about">
                    <h3>Job Recruiter System</h3>
                    <p>Get your destination and make your future</p>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="info">
                    <div>
                        <i class="icofont-google-map"></i>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div>
                        <i class="icofont-envelope"></i>
                        <p>info@example.com</p>
                    </div>

                    <div>
                        <i class="icofont-phone"></i>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section><!-- End Contact Us Section -->
