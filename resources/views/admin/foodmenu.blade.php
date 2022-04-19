<!DOCTYPE html>
<html>
<head>
    <title>Cuisine</title>
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
       <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
           @csrf
           <div>
               <label>Title</label>
               <input type="text" name="title" placeholder="Write a title" required>
            </div> 
            <div>
               <label>Price</label>
               <input type="num" name="price" placeholder="Price" required>
            </div>   
            <div>
               <label>Image</label>
               <input type="file" name="image"  required>
            </div>   
            <div>
               <label>Description</label>
               <input type="text" name="description" placeholder="Describe" required>
            </div>  
            <div>
               
               <input style="color:black" type="submit" value="Save">
            </div>  



</form>

<div>

<table bgcolor='lightblue', border='2px'>
<tr >
<th style='padding:70px'>Cuisine</th>
<th style='padding:70px'>Price</th>
<th style='padding:70px'>Description</th>
<th style='padding:70px'>Image</th>
<th style='padding:70px'>Delete</th>
<th style='padding:70px'>Update</th>



</tr>
@foreach ($data as $data)
<tr align="center">
   <td>{{$data->title}}</td>
   <td>{{$data->price}}</td>
   <td>{{$data->description}}</td>
   <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
   <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
   <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
</tr>
@endforeach
</table>


</div>
       
</div>
</div>
   @include("admin.adminscript")
  </body>
  </html>
</body>  

</html>