<?php
include 'connect.php';

$errors = array(); // Initialize an array to store validation errors

if (isset($_POST['submit'])) {
    // Validate name
    $name = $_POST['name'];
    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Only letters and white space allowed in name";
    }

    // Validate email
    $email = $_POST['email'];
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate mobile number
    $mobile = $_POST['mobile'];
    if (empty($mobile)) {
        $errors[] = "Mobile number is required";
    } elseif (!preg_match("/^\d{10}$/", $mobile)) {
        $errors[] = "Invalid mobile number format";
    }

    // Validate password
    $password = $_POST['password'];
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    // If no validation errors, proceed with insertion
    if (empty($errors)) {
        $sql = "INSERT INTO `crud` (name, email, mobile, password) 
                VALUES ('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location:display.php');
            exit(); // Stop further execution
        } else {
            $errors[] = mysqli_error($con);
        }
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
        <h3 class="text-center mb-4">ADD User Details</h3>
        <form method="post">

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <p>
                            <?php echo $error; ?>
                        </p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name"
                    value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email"
                    value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile number" name="mobile"
                    value="<?php echo isset($_POST['mobile']) ? $_POST['mobile'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button style="margin-top:10px" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>