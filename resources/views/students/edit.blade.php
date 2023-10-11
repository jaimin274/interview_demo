<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Edit Page </title>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>    
<body> 
    <div class="container">
    <center> <h1> Student Edit Form </h1> </center>   
    <form method="post" action="{{ url('update/'. $data->id) }}">
        @csrf  
        <div class="container">   
            <label>Name : </label>   
            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{$data->name}}" required>  
            
            <label>Email : </label>   
            <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{$data->email}}" required>  
            
            <label>Phone number : </label>   
            <input type="text" class="form-control" placeholder="Enter Phone number" name="phone" value="{{$data->phone}}" required>  

            <label>Subject 1 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 1" name="sub1" value="{{$data->sub1}}" required> 
            
            <label>Subject 2 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 2" name="sub2" value="{{$data->sub2}}" required> 

            <label>Subject 3 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 3" name="sub3" value="{{$data->sub3}}" required> 

            
            <input type="submit" class="btn btn-primary mt-4" name="submit">   
           
        </div>   
    </form>  
    </div>   
       
</body>     
</html>  