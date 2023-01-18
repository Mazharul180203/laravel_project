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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div>
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
        <label for="ins_name"><i><strong>Institution Name :</strong></i></label>
        <input type="text" name="ins_name" value="{{old('ins_name')}}" class="form-control; border border-info">
        <div>{{$errors->first('ins_name')}}</div>
    </div>

    <div style="color:#331b4b" class="form-outline mb-4">
        <label for="sub"><i><strong>Subject :</strong></i></label>
        <input type="text" name="sub" value="{{old('sub')}}" class="form-control; border border-info">
        <div>{{$errors->first('sub')}}</div>
    </div>
    <div style="color:#331b4b" class="form-outline mb-4">
        <label for="exp"><i><strong>Experience :</strong></i></label>
        <input type="text" name="exp" value="{{old('exp')}}" class="form-control; border border-info">
        <div>{{$errors->first('exp')}}</div>
    </div>
    <div style="color:#331b4b" class="form-outline mb-4">
        <label for="statement"><i><strong>Personal Statement :</strong></i></label>
        <input type="text" name="statement" value="{{old('statement')}}" class="form-control; border border-info">
        <div>{{$errors->first('statement')}}</div>
    </div>
    <div style="color:#331b4b" class="form-outline mb-4">
        <label for="customer_id"><i><strong>customer_id :</strong></i></label>
        <input type="text" name="customer_id" value="{{$customer->recruiter_id}}" class="form-control; border border-info">
        <div>{{$errors->first('$customer->recruiter_id')}}</div>
    </div>

    <div style="color:#331b4b" class="form-outline mb-4">
        <label for="select"><i><strong>select :</strong></i></label>
        <input type="text" name="select" value="0" class="form-control; border border-info">

    </div>

    <div class="form-outline mb-4">

        <label for="exampleInputFile">Attachments</label>
        <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    </div>

    {{--</div>--}}
    <div>

        @if (Route::has('login'))

            @auth
                @foreach($user as $ss)

                    @if (\Illuminate\Support\Facades\Auth::user()['email']==$ss->email)
                        <div style="color: #331b4b" class="form-outline mb-4;border border-info">
                            <label for="user_id"><i><strong>Status :</strong></i></label>
                            <select style="background-color:#dab4ff" name="user_id" id="user_id" class="form-control">
                                <option style="background-color: #dab4ff" value="" disabled>Select status</option>
                                <option style="background-color: #dab4ff" value={{$ss->id}} > {{$ss->name}} </option>
                            </select>
                            <p><br></p>
                        </div>

                    @endif
                @endforeach
            @endif
        @endif
    </div>
</div>
{{--<div class="file-field">--}}
{{--    <div class="btn btn-primary btn-sm float-left">--}}
{{--        <span>Choose file</span>--}}
{{--        <input type="file">--}}
{{--    </div>--}}
{{--    <div class="file-path-wrapper">--}}
{{--        <input class="file-path validate" type="text" placeholder="Upload your file">--}}
{{--    </div>--}}

@csrf
</body>
</html>
