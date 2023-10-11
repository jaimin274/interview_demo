<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</head>
<body>

<div class="container">
<h1>Student Data</h1> <a href="add_student"  >Add Data</a>

<table class="table table-bordered">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="2">Action</th>
  </tr>
  @foreach($data as $student_data)
  <tr>
    <td>{{$student_data->name}}</td>
    <td>{{$student_data->email}}</td>
    <td>{{$student_data->phone}}</td>
    <td>
        <a href="delete/{{$student_data->id}}" >delete</a> | 
        <a href="edit/{{$student_data->id}}" >edit</a> | 
        <a href="pdf_generate/{{$student_data->id}}" >Pdf</a> 
    </td>
  </tr>
  @endforeach
  
</table>

</div>


</body>
</html>