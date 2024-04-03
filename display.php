<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        .container {
            margin-top: 50px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .pagination {
            margin-top: 20px;
        }

        .page-link {
            color: #007bff;
        }

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-link:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>CRUD OPERATION</h1>
        <button class="btn btn-primary mb-3"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Pagination variables
                $results_per_page = 5;
                $sql = "SELECT * FROM `crud`";
                $result = mysqli_query($con, $sql);
                $num_rows = mysqli_num_rows($result);
                $num_pages = ceil($num_rows / $results_per_page);

                // Check if page number is set, otherwise default to page 1
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $start = ($page - 1) * $results_per_page;

                // Fetch data for the current page
                $sql .= " LIMIT $start, $results_per_page";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $mobile = $row['mobile'];
                    $password = $row["password"];
                    echo '
                    <tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>   
                    <td><button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '"class="text-light">Delete</a></button>
                    </td>
                    </tr>
                    ';
                }
                ?>

            </tbody>
        </table>

        <!-- Pagination links -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                // Previous page link
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
                }

                // Page numbers
                for ($i = 1; $i <= $num_pages; $i++) {
                    echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                }

                // Next page link
                if ($page < $num_pages) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</body>

</html>