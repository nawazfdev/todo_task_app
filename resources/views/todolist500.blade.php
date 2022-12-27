<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
   body{
      background-color:black!important;


   }
table{
   margin-top:10px;
background-color:white!important;

}

</style>

   </head>
<body class="antialiased">
   <div class="conatiner">
      <div class="text-right">
<a href="Create" class="btn btn-success"> Create New List</a>
      </div>


   </div>
<table class="table">
 <tr>
 <td>id</td>
    <td>Name</td>
 <td>Created At</td>
    <td>Action</td>
    </tr> 
 
 @foreach($todo_arr as $td)
 <tr>
   <td>{{$td->id}}</td>
   <td>{{$td->Name}}</td>
   <td>{{$td->created_at}}</td>
   <td><a href="delete/{{$td->id}}">Delete</a> | <a href="edit/{{$td->id}}">Edit</a> </td>
 </tr>
 @endforeach
</table>
</body>
</html>