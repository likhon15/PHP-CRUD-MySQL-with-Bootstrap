<?php
include 'connect.php'; // Include the database connection script

// Fetch data from the 'data' table
$sql = "SELECT * FROM data";
$result = mysqli_query($conn,$sql);

if (!$result) {
    die('Query failed: ' . mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5ccb13b2f7.js" crossorigin="anonymous"></script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        body {
             margin: 50px;
        }

    </style>
</head>
<body>

<section>
  <div class="d-flex justify-content-around flex-direction-column align-items-center bg-success w-100 m-auto">
   <div>
    <h1 class="text-white">lkn6dec</h1>
   </div>
   <div>
    <a href="list.php" class="mr-3 text-white">data</a>
    <a href="search.php" class="mr-3 text-white">Search</a>
    <a href="" class="mr-3 text-white">Contact</a>
    <a href="" class="mr-3 text-white">Blogs</a>
   </div>
  </div>
 </section>


    <br>
    <br>
    <a href="add.php" class="btn btn-primary">Add User</a>
    <br>
    <h1>Data List</h1>
    
    <table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
    // Loop through the retrieved data and display it in a table
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['index']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['address']; ?></td>   
            <td><?php echo $row['email']; ?></td>
            <td><a href="update.php?id=<?php echo $row['index'] ;?>" class="text-primary">
            <i class="fa-solid fa-pen-to-square"></i> Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['index'] ;?>" class="text-danger">
            <i class="fa-solid fa-user-minus"></i> Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
  integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
