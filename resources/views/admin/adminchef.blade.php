<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
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
       <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
          @csrf
           <div>
               <label>Name</label>
               <input type="text" name="name" placeholder="Enter Name" required>
            </div> 
            <div>
               <label>Speciality</label>
               <input type="text" name="speciality" placeholder="Your speciality" required>
            </div>   
             
            <div>
               <label>Email</label>
               <input type="text" name="email" placeholder="Your email address" required>
            </div> 
            <div>
               <label>Ratings</label>
               <input type="number" name="ratings" placeholder="Give Rating" required>
            </div> 
            <div>
               <label>Image</label>
               <input type="file" name="image"  required>
            </div>  
            <div>
               
               <input style="color:black" type="submit" value="Save">
            </div>  



</form>



<table bgcolor='lightblue', border='2px'>
<tr >
<th style='padding:70px'>Name</th>
<th style='padding:70px'>Speciality</th>
<th style='padding:70px'>Email</th>
<th style='padding:70px'>Ratings</th>
<th style='padding:70px'>Image</th>
<th style='padding:70px'>Delete</th>
<th style='padding:70px'>Update</th>



</tr>
@foreach ($data as $data)
<tr align="center">
   <td>{{$data->name}}</td>
   <td>{{$data->speciality}}</td>
   <td>{{$data->email}}</td>
   <td>{{$data->ratings}}</td>
   <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
   <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
   <td><a href="{{url('/updatechef', $data->id)}}">Update</a></td>
</tr>
@endforeach
</table>

        <!-- main-panel ends -->
  </div> 
   @include("admin.adminscript")
  </body>
  </html>
</body>  

</html>