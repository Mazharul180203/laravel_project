@extends('layout')
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
    </style>
</head>
<body>
<br><br><br><br>
<form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="col-10">
        <div style="color:#331b4b" class="form-outline mb-4; " >
            <label for="name"><i><strong>Name :</strong></i></label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control; border border-info">
            <div>{{$errors->first('name')}}</div>
        </div>
        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="email"><i><strong>Email :</strong></i></label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control; border border-info">
            <div>{{$errors->first('email')}}</div>
        </div>
        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="mob"><i><strong>Mob :</strong></i></label>
            <input type="text" name="mob" value="{{old('mob')}}" class="form-control; border border-info">
            <div>{{$errors->first('mob')}}</div>
        </div>


        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="Nat"><i><strong>Nationality :</strong></i></label>
            <input type="text" name="Nat" value="{{old('Nat')}}" class="form-control; border border-info">
            <div>{{$errors->first('Nat')}}</div>
        </div>
        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="nat_id"><i><strong>National ID :</strong></i></label>
            <input type="text" name="nat_id" value="{{old('nat_id')}}" class="form-control; border border-info">
            <div>{{$errors->first('nat_id')}}</div>
        </div>


        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="pas_no"><i><strong>Passport No :</strong></i></label>
            <input type="text" name="pas_no" value="{{old('pas_no')}}" class="form-control; border border-info">
            <div>{{$errors->first('pas_no')}}</div>
        </div>

        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="d_b"><i><strong>Date of Birth :</strong></i></label>
            <input type="text" name="d_b" value="{{old('d_b')}}" class="form-control; border border-info">
            <div>{{$errors->first('d_b')}}</div>
        </div>

        <div style="color:#331b4b" class="form-outline mb-4">
            <label for="gender"><i><strong>Gender :</strong></i></label>
            <input type="text" name="gender" value="{{old('gender')}}" class="form-control; border border-info">
            <div>{{$errors->first('gender')}}</div>
        </div>



        <div style="color: #331b4b" class="form-group">
            <label for="exampleInputFile"><i><strong>Image</strong></i></label>
            <input type="file" name="profile_photo_path" class="form-control-file" id="exampleInputFile"
                   aria-describedby="fileHelp">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </div>

</form>
