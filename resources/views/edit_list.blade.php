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
table,form{
   margin-top:50px;
background-color:white!important;
padding:40px;
}
.conatiner{
padding:30px;
text-align:center;
}

</style>

   </head>
<body class="antialiased">
   <div class="conatiner">
      <div class="text-right">
<a href="Create" class="btn btn-success">Back</a>
      </div>
    
<form action="edit/{{$todo_arr->name}}" >
<input type="text"  name="name"value='{{$todo_arr->name}}' placeholder="Enter New List" class="form-control">
<input type="submit" value="save" class="btn btn-success">


</form>
   </div>
 
</body>
</html>