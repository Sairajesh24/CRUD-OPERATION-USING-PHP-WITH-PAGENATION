<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id ";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud operation</title>
</head>

<body>

    <div class="container my-5">
        <h3 class="text-center mb-4">Update User Details</h3>
        <form method="post">

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"
                    value=<?php echo $name; ?>>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"
                    value=<?php echo $email; ?>>
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile number" name="mobile"
                    autocomplete="off" value=<?php echo $mobile; ?>>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password"
                    autocomplete="off" value=<?php echo $password; ?>>
            </div>

            <button style="margin-top:10px" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>