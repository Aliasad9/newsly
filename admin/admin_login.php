<?php
session_start();
if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $eMessage = '<label>Email field cannot be empty</label>';
    } else if (empty($_POST["password"])) {
        $pMessage = '<label>Password field cannot be empty</label>';
    } else {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        include_once('../functions/db_functions.php');
        include_once('../config/config.php');

        $db_instance = new DBClass();
        $is_valid = $db_instance->getUser($pdo, $email, $password);

        if ($is_valid) {

            $_SESSION['email'] = $email;
            header("location: ./login_success.php");
        } else {
            $pMessage = "Invalid Credentials";
        }
    }
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Bootstrap News Website Theme" />
    <title>Login to Account</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

    <meta name="theme-color" content="#7952b3" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/1e5964ee8c.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="../admin/create_article_form_1.php"><i class="px-2 fas fa-pencil-alt"></i>Write an
                            Article</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn btn-outline-danger btn-sm" aria-current="page" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="card" style="max-width: 32rem; margin: auto;">
            <div class="card-body">
                <p class="card-title display-6 pt-3">
                    <i class="fas fa-sign-in-alt"></i><span class="px-3">Log In</span>
                </p>
                <form method="POST" class="py-3" action="./admin_login.php">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" />
                        <?php
                        if (isset($eMessage)) {
                            echo '<label class="text-danger">' . $eMessage . '</label>';
                        }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>

                        <input type="password" class="form-control" name="password" id="password" />
                        <?php
                        if (isset($pMessage)) {
                            echo '<label class="text-danger">' . $pMessage . '</label>';
                        }
                        ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Log In
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>