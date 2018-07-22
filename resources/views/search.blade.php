
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Details</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}" >
</head>
    <body style="margin-top: 160px;">
 <div class="container">   
     <h1 style="font-weight: bold; margin-left: 240px; color:crimson">Search Your Academic Details</h1><br>
     <form action="{{ route('show_details') }}" method="post" class="form-horizontal">
        <input style="color:darkslategrey; font-weight: bold" type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group input-group-lg col-md-6" style="margin-left:240px;">
    <input type="text" class="form-control input-normal" name="EIIN" placeholder="Please Enter Your HSC ROLL NO." required>
  </div><br> 
  <div>
    <input type="submit" style="margin-top: 10px; margin-left: 430px;" class="btn btn-outline-info btn-lg" value="Search Info">
</div>
</form>
</div>
</body>


</html>