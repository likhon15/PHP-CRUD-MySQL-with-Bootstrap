<?php
include "connect.php";

$id = '';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM `data` WHERE `index`=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        
            $row = mysqli_fetch_assoc($result);
        
    } else {
        echo "Query execution failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <style>
         body{
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
    <br><br>
    <div class="w-50 m-auto">
        <form action="search.php" method="post">
            <label for="id">Username</label>
            <input type="text" name="id" id="id" class="form-control" placeholder="search user by id" value="<?php echo $id; ?>">
            <br>
            <button type="submit" name="submit" class="btn btn-success">search</button>
        </form>
    </div>

    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>Index</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo isset($row['index']) ? $row['index'] : ''; ?></td>
                <td><?php echo isset($row['username']) ? $row['username'] : ''; ?></td>
                <td><?php echo isset($row['fname']) ? $row['fname'] : ''; ?></td>
                <td><?php echo isset($row['lname']) ? $row['lname'] : ''; ?></td>
                <td><?php echo isset($row['phone']) ? $row['phone'] : ''; ?></td>
                <td><?php echo isset($row['address']) ? $row['address'] : ''; ?></td>
                <td><?php echo isset($row['email']) ? $row['email'] : ''; ?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>
