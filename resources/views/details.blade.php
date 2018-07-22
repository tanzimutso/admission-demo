

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
            <h1 style="font-weight: bold; margin-left: 40px; color:indigo; text-align:center ">Mr. <span style="color:crimson">{{ $datas[0]->STUDENT }}</span>, Here is Your Academic Details</h1><br>
             

<table class="table table-hover" style="border: 2px solid #943">
        <thead>
          <tr>
            <th scope="col">NAME</th>
            <th scope="col">FATHER</th>
            <th scope="col">EXAMINATION</th>
            <th scope="col">INSTITUTION CODE</th>
            <th scope="col">EIIN</th>
            <th scope="col">BOARD</th>
            <th scope="col">YEAR</th>
            <th scope="col">INSTITUION NAME</th>
            <th scope="col">DISTRICT</th>
            <th scope="col">THANA</th>
            <th scope="col">GRADE</th>

          </tr>
        </thead>
        <tbody style="color:midnightblue; font-weight:bold">
                @foreach($datas as $data)
          <tr>
            <td>{{ $data->STUDENT }}</td>
            <td>{{ $data->FATHER }}</td>
            <td>{{ $data->EXAM }}</td>
            <td>{{ $data->CODE }}</td>
            <td>{{ $data->EIIN }}</td>
            <td>{{ $data->BOARD }}</td>
            <td>{{ $data->YEAR }}</td>
            <td>{{ $data->NAME }}</td>
            <td>{{ $data->DISTRICT }}</td>
            <td>{{ $data->THANA }}</td>
            <td>{{ $data->GRADE }}</td>
            

          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
</body>


</html>
