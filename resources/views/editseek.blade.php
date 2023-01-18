@extends('layout')
    <br><br><br><br><br><br>
<!DOCTYPE html>
<html>
<body>

<form action="/newshow3/{{$seeker->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="col-10">

    <input type="hidden" id="select" name="select" value="0">
    <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>

