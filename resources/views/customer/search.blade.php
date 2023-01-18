@extends('layout')

<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <br>
            <h1>Job Requiter</h1>
        </div>

        <form action="customer" method="post" class="pb-5">
            <div class="row">
                <div class="col-12">
                    <p><a href="customer/create"> Add New Recruiter</a></p>
                    <hr>
                </div>
            </div>
        </form>


        <div class="row">
        </div>
        <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1">



            @foreach($customer as $customer)
                <div class="container-fluid" style="margin: auto;width: 50%; padding: 10px">
                    <div class="card border-secondary text-center" style="background-color: rgba(251,239,251,0.56);" onclick="ShowDetails()">
                        <script>
                            function ShowDetails() {
                                location.href = "customer/{{$customer->id}}";
                            }
                        </script>
                        <div class="row mb-4">
                            <div class="col" style="padding: 15px">
                                <h5 class="card-title">{{$customer->name}}</h5>
                                <p class="card-text">At {{$customer->institution}}</p>
                                <p class="card-text">Location: {{$customer->location}}</p>
                                <hr class="my-4">
                                <p class="card-text">Category: {{$customer->catagory->name}}</p>
                            </div>
                            <div class="col" style="padding: 15px">
                                <p class="card-text">
                                    <a class="btn btn-primary text-monospace border rounded shadow d-inline-flex visible" id="bt" href="customer/{{$customer->id}}" type="button">Job
                                        Details</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>
</section>
