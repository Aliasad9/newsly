<!DOCTYPE html>

<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
}

include_once('../functions/db_functions.php');
include_once('../config/config.php');

$db_instance = new DBClass();
$rows = $db_instance->getContactUs($pdo);
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Bootstrap News Website Theme" />
    <title>Pending Requests</title>

    <!-- Bootstrap core CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />

    <meta name="theme-color" content="#7952b3" />

    <!-- Bootstrap core CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />
    <!-- Custom styles for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
        rel="stylesheet"
    />

    <!-- Font Awesome Icons -->
    <script
        src="https://kit.fontawesome.com/1e5964ee8c.js"
        crossorigin="anonymous"
    ></script>
</head>
<body>
<?php include_once ('../inc/admin_navbar.html')?>

    <div class="container my-4">
        <p class="display-6 pt-3">
            <i class="fas fa-envelope-open-text"></i
            ><span class="px-3">Pending Requests</span>
        </p>

        <div class="categories-section my-5">

            <?php foreach ($rows as $row):?>

            <div class="card bg-light my-3">
                <div class="card-body row align-items-center">
                    <div class="content col-md-9">
                        <h5 class="card-title">

                            <?php echo $row->subject?>
                        </h5>
                        <p class="card-text text-muted">
                            <span class="text-dark">From:</span>
                            <?php echo $row->email?>
                        </p>
                        <a
                            class="btn btn-sm btn-outline-primary me-2"
                            href="pending_requests_details.php?id=<?php echo $row->id?>"

                            >View Details</a
                        >
                    </div>
                    <div
                        class="col-md-3 d-flex justify-content-md-end justify-content-start mt-md-0 mt-3"
                    >
                        <p class="card-text text-muted">

                            <?php
                            include_once('../functions/utils.php');
                            echo getFormattedDateTime($row->created_at);
                            ?>

                        </p>
                    </div>
                </div>
            </div>

            <?php endforeach;?>


        </div>
    </div>
</body>
