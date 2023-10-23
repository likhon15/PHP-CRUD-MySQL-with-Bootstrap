<?php
include 'connect.php';

if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];

 $sql = "INSERT INTO `data` (fname, lname, email, username, address, phone) 
        VALUES ('$fname', '$lname', '$email', '$username', '$address', '$phone')";


 if (mysqli_query($con, $sql)) {
  echo 'Submission successful';
 } else {
  echo 'Submission failed: ' . mysqli_error($con);
 }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="style.css">

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

 <style>
  body {
   margin: 50px;
  }
 </style>


</head>

<body>
 <section>
  <div class="d-flex justify-content-around flex-direction-column align-items-center bg-primary w-100 m-auto">
   <div>
    <h1 class="text-white">lkn6dec</h1>
   </div>
   <div>
    <a href="list.php" class="mr-3 text-white">data</a>
    <a href="" class="mr-3 text-white">About</a>
    <a href="" class="mr-3 text-white">Contact</a>
    <a href="" class="mr-3 text-white">Blogs</a>
   </div>
  </div>
 </section>

 <br><br>

 <h1 class="text-center">Form</h1>
 <form method="post" action="add.php" class="w-50 m-auto">

  <div class="row">
   <div class="col"> <!-- Add margin-right (mr-2) -->
    <label for="phone">First name</label>
    <input type="text" name="fname" id="fname" class="form-control mr-3" placeholder="First name here">
   </div>

   <div class="col"> <!-- Add margin-left (ml-2) -->
    <label for="phone">Last Name</label>
    <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name here">
   </div>
  </div>



  <div class="row">
   <div class="col md-cols-12">
    <label for="phone">Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="username here">
   </div>


   <div class="col">
    <label for="phone">Email</label>
    <input type="text" name="email" id="email" class="form-control" placeholder="email here">
   </div>
  </div>




  <div class="">
   <label for="phone">Address</label>
   <input type="text" name="address" id="address" class="form-control" placeholder="address here">
  </div>

  <div class="">
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" class="form-control" placeholder="phone here">
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-success px-4 py-2">save</button>

 </form>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
  integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>