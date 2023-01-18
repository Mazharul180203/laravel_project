@extends('layout')
    <br><br><br><br><br>
<!DOCTYPE html>
<html>
<head>
    <style>

        input[type=text] {
            width: 100%;
            height: 25px;
            padding: 25px 10px;
            margin: 12px 0;
            box-sizing: border-box;
            border: #dab4ff;
            /*background-color:  #dab4ff;*/
            color: black;
        }
        label{
            color:#331b4b;
        }
    </style>
</head>
<body>

<h3 style="text-align: center"><i>Recruiter Form</i> </h3>
<div style="padding: 10px;margin: 15px">
<form action="recruiter" method="post" class="pb-5">

    <div style="color: #331b4b" class="form-group">
        <label for="name"><i><strong>Name :</strong></i></label>
        <input type="text" name="name" class="form-control; border border-info">
        <div>{{$errors->first('name')}}</div>
    </div>



    <div style="color: #331b4b" class="form-group">
        <label for="email"><i><strong>email :</strong></i></label>
        <input type="text" name="email" class="form-control; border border-info">
        <div>{{$errors->first('email')}}</div>
    </div>
    <div style="color: #331b4b" class="form-group">
        <label for="company"><i><strong>company :</strong></i></label>
        <input type="text" name="company" class="form-control; border border-info">
        <div>{{$errors->first('company')}}</div>
    </div>
    <div style="color: #331b4b" class="form-group">
        <label for="address"><i><strong>address :</strong></i></label>
        <input type="text" name="address" class="form-control; border border-info">
        <div>{{$errors->first('address')}}</div>
    </div>
    <div style="color: #331b4b" class="form-group">
        <label for="contact_no"><i><strong>contact_no :</strong></i></label>
        <input type="text" name="contact_no" class="form-control; border border-info">
        <div>{{$errors->first('contact_no')}}</div>
    </div>
    <div>

        @if (Route::has('login'))

            @auth
                @foreach($user as $ss)

                    @if (\Illuminate\Support\Facades\Auth::user()['email']==$ss->email)

                        <div  style="color: olivedrab; visibility: hidden" class="form-group">
                            <label for="rec_id"><i><strong>Recruiter_id</strong></i></label>
                            <select style="background-color:#dab4ff" name="rec_id" id="rec_id" class="form-control; border border-info">
                                <option style="background-color: #dab4ff" value="" disabled>Select status</option>
                                <option style="background-color: #dab4ff" value={{$ss->id}} > {{$ss->name}} </option>
                            </select>
                        </div>

                    @endif
                @endforeach
            @endif
        @endif
    </div>



    <button type="submit" class="btn btn-primary"> Submit</button>

    @csrf
</form>
</div>
