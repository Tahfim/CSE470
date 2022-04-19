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
       <form action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
           @csrf
           <div>
               <label>Name</label>
               <input type="text" name="name" value="{{$data->name}}" required>
            </div> 
            <div>
               <label>Speciality</label>
               <input type="text" name="speciality" value="{{$data->speciality}}" required>
            </div>   
            
            <div>
               <label>Email</label>
               <input type="text" name="email" value="{{$data->email}}" required>
            </div> 
            <div>
               <label>Ratings</label>
               <input type="num" name="ratings" value="{{$data->ratings}}" required>
            </div> 
            <div>
               <label>Old Image</label>
               <img height="100" width="100" src="/chefimage/{{$data->image}}">
            </div> 
            <div>
               <label>New Image</label>
               <input type="file" name="image"  >
            </div> 
            <div>
               
               <input style="color:black" type="submit" value="Update">
            </div>  



</form>

<div>
</div> 
   @include("admin.adminscript")
  </body>
  </html>
</body>  

</html>