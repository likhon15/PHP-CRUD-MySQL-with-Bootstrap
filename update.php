<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $id = $_GET['id']; // Get the ID from the URL
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    // Update the record in the database
    $sql = "UPDATE `data` SET fname = '$fname', lname = '$lname', email = '$email', username = '$username', address = '$address', phone = '$phone' WHERE `index` = $id";

    if (mysqli_query($con, $sql)) {
        header("Location: list.php");
        exit;
    } else {
        echo 'Update failed: ' . mysqli_error($con);
    }
}

// Fetch data for the selected ID
$id = $_GET['id'];
$sql = "SELECT * FROM `data` WHERE `index` = $id LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="d-flex justify-content-around flex-direction-column align-items-center bg-primary w-100 m-auto">
            <div>
                <h1 class="text-white">lkn6dec</h1>
            </div>
            <div>
                <a href="list.php" class="mr-3 text-white">Data</a>
                <a href="" class="mr-3 text-white">About</a>
                <a href="" class="mr-3 text-white">Contact</a>
                <a href="" class="mr-3 text-white">Blogs</a>
            </div>
        </div>
    </section>

    <br><br>

    <h1 class="text-center">Update Form</h1>
    <form method="post" action="update.php?id=<?php echo $id; ?>" class="w-50 m-auto">
        <div class="row">
            <div class="col"> <!-- Add margin-right (mr-2) -->
                <label for="fname">First name</label>
                <input type="text" name="fname" id="fname" class="form-control mr-3" value="<?php echo $row['fname']; ?>">
            </div>

            <div class="col"> <!-- Add margin-left (ml-2) -->
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $row['lname']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col md-cols-12">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username']; ?>">
            </div>

            <div class="col">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>
        </div>

        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?php echo $row['address']; ?>">
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $row['phone']; ?>">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success px-4 py-2">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
