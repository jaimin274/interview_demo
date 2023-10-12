<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
<title> Add Page </title>  
   
</head>    
<body> 
    <div class="container">
    <center> <h1> Student Add Form </h1> </center>   
    <form method="post" action="{{ url('/add_subject') }}">
        @csrf  
        <div class="container">   
            <label>Name : </label>   
            <select class="form-control dropdown" name="student_id" id="student">
                <option></option>
            </select>
            
            <label>Subject 1 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 1" name="sub1" required> 
            
            <label>Subject 2 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 2" name="sub2" required> 

            <label>Subject 3 : </label>   
            <input type="text" class="form-control" placeholder="Enter Subject 3" name="sub3" required> 

            <input type="submit" class="btn btn-primary mt-4" name="submit">   
           
        </div>   
    </form> 

    </div>   
        
</body>     
</html> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $.ajax({
        url: "{{ route('getdata')}} ",
        type: 'get',
        dataType: 'json',
        success: function(response){
            console.log(response);
     
            var len = 0;
            if(response['data'] != null){
                len = response['data'].length;
            }

            if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                    console.log(response['data'][i].id);
                    var id = response['data'][i].id;
                    var name = response['data'][i].name;

                    var option = "<option class='divider' value='"+id+"'>"+name+"</option>";

                    $("#student").append(option); 
                }
            }
     
        }
    });
});
</script>