<!DOCTYPE html>
<html>
<head>
    <title>Reservation</title>
</head>
<body>

<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">    
   @include("admin.navbar") 

   <div style="position:relative; top:60px; right:-150px">
       <table bgcolor='lightblue' border='3px'>
           <tr>

           <th style='padding:70px'>Name</th>
           <th style='padding:50px'>Email</th>
           <th style='padding:50px'>Phone</th>
           <th style='padding:50px'>Chef</th>
           <th style='padding:50px'>Guest</th>
           <th style='padding:50px'>Date</th>
           <th style='padding:50px'>Time</th>
           <th style='padding:70px'>Message</th>


    
           </tr>

           @foreach($data as $data)
<tr align='center'>
   
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->chef}}</td>
    <td>{{$data->guest}}</td>
    <td>{{$data->date}}</td>
    <td>{{$data->time}}</td>
    <td>{{$data->message}}</td>
    </tr>
    @endforeach
</table>
   

    </div>
   </div>

   
   @include("admin.adminscript")
  </body>
  </html>
</body>  

</html>