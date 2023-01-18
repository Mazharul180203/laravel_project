@if (Route::has('login'))
@auth
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
        .form-control{

        }
        select{
            background-color: #dab4ff;
        }
        label{
            color:#331b4b
        }
    </style>
</head>
<body>


<div style="color: olivedrab" class="form-outline">
    <label for="name"><i><strong>Job Title :</strong></i></label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control; border border-info">
    <div>{{$errors->first('name')}}</div>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="email"><i><strong>Email :</strong></i></label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control; border border-info">
    <div>{{$errors->first('email')}}</div>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="link"><i><strong>Appy link :</strong></i></label>
    <input type="text" name="link" value="{{old('link')}}" class="form-control; border border-info">
    <div>{{$errors->first('link')}}</div>
</div>

<div style="color: olivedrab" class="form-group">
    <label for="location"><i><strong>Job Location :</strong></i></label>
    <input type="text" name="location"value="{{old('location')}}" class="form-control; border border-info">
    <div>{{$errors->first('location')}}</div>
</div>







<div style="color: olivedrab" class="form-outline">
    <label for="vacancy"><i><strong>vacancy :</strong></i></label>
    <input type="text" name="vacancy" value="{{old('vacancy')}}" class="form-control; border border-info">
    <div>{{$errors->first('vacancy')}}</div>
</div>
<div style="color: olivedrab" class="form-outline">
    <label for="deadline"><i><strong>deadline :</strong></i></label>
    <input type="text" name="deadline" value="{{old('deadline')}}" class="form-control; border border-info">
    <div>{{$errors->first('deadline')}}</div>
</div>







<div style="color: olivedrab" class="form-group">
    <label for="institution"><i><strong>Institution Name:</strong></i></label>
    <input type="text" name="institution"value="{{old('institution')}}" class="form-control; border border-info">
    <div>{{$errors->first('institution')}}</div>
</div>
<div style="color: olivedrab" class="form-group">
    <label for="exp"><i><strong>Required Experience :</strong></i></label>
    <input type="text" name="exp"value="{{old('exp')}}" class="form-control; border border-info">
    <div>{{$errors->first('exp')}}</div>
</div>






<div  style="color: olivedrab" class="form-group">
    <label for="active"><i><strong>Status :</strong></i></label>
    <select style="background-color:#dab4ff" name="active" id="active" class="form-control; border border-info">
        <option style="background-color: #dab4ff" value="" disabled>Select status</option>
        <option style="background-color: #dab4ff" value="1"> Active</option>
        <option style="background-color: #dab4ff" value="0"> Inactive</option>
    </select>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="catagory_id"><i><strong>Catagory :</strong></i></label>
    <select style="background-color:#dab4ff" name="catagory_id" id="catagory_id" class="form-control; border border-info">
        @foreach($catagory as $catagory)
            <option style="background-color: #dab4ff" value="{{ $catagory->id }}">{{$catagory->name}}</option>
        @endforeach
    </select>

</div>

<div class="form-group">
    <label for="exampleInputFile">Attachments</label>
    <input  type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
</div>
<div>

    @if (Route::has('login'))

        @auth
            @foreach($user as $ss)

                @if (\Illuminate\Support\Facades\Auth::user()['email']==$ss->email)

                    <div  style="color: olivedrab; visibility: hidden" class="form-group">
                        <label for="recruiter_id"><i><strong>Recruiter_id</strong></i></label>
                        <select style="background-color:#dab4ff" name="recruiter_id" id="recruiter_id" class="form-control; border border-info">
                            <option style="background-color: #dab4ff" value="" disabled>Select status</option>
                            <option style="background-color: #dab4ff" value={{$ss->id}} > {{$ss->name}} </option>
                        </select>
                    </div>

                @endif
            @endforeach
        @endif
    @endif
</div>

@csrf
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
