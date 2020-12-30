<?php

   $conn=mysqli_connect('localhost','root','', 'stdcrud');//  mysql connection function
   


   if(isset($_POST['btn'])){

      $sname = $_POST['stdname'];  //collecting value from  form and stored in local  Variable
      $sreg =$_POST['streg'];
   
       
      if(!empty($sname) && !empty($sreg)){

          $query=  "INSERT INTO student(stname,regno) VALUES('$sname','$sreg')";
          
          if($query)
          $create_query=mysqli_query($conn,$query);
           
      }

     
    }
   
   ?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP_CRUD</title>
  </head>
  <body>

  <div class="container m-5 p-4">

  <form action=""  method="Post" class="d-flex justify-content-around">
  
      <input class="form-control" type="text" name="stdname"  placeholder="Enter Your Name :" >

      <input class="form-control" type="number" name="streg"  placeholder="Enter Your regno :" >

     <input type="submit" name="btn" value="send"  class="btn btn success" >

  </form>
      
  </div>





  <div class="cointainer">
     
     <table class="table table-bordered">
     <tr>
     <th>std id</th>
     <th>std name</th>
     <th>reg</th>
     <th></th>
     <th></th>
     
     </tr> 

    
     <?php


$query ="SELECT * FROM student";
$read_q=mysqli_query($conn,$query);

if($read_q->num_rows>0){

   while ($rd =mysqli_fetch_assoc($read_q)){

       $sid=$rd['id'];
       $sn=$rd['stname'];
       $r=$rd['regno'];



       ?>

     <tr>
        <td><?php echo $sid;  ?></td>
        <td><?php echo $sn;  ?></td>
        <td><?php  echo $r;  ?> </td>
        <td></td>
        <td></td>

     </tr>
         <?php }} ?>
     </table>
      
  </div>
       
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
