<!DOCTYPE html>

<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
}

include_once('../functions/db_functions.php');
include_once('../config/config.php');

$db_instance = new DBClass();

if (!isset($_GET['id'])) {
    header('Location: ./pending_requests.php');
}
$row = $db_instance->getContactUsById($pdo, htmlspecialchars($_GET['id']));
if ($row == false) {
    header('Location: ./pending_requests.php');

}

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Bootstrap News Website Theme" />
    <title>Request Details</title>

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
    <p class="card-title display-6 pt-3">
        <i class="fas fa-envelope-open-text"></i
        ><span class="px-3">Request Details</span>
    </p>

        <div class="categories-section my-5">
            <div class="card bg-light my-3">
                <div class="card-body row align-items-top">
                    <div class="content col-md-9">
                        <h4 class="card-title">

                            <span class="text-dark fw-normal"><?php echo $row->subject;?></span>

                        </h4>
                        <h6 class="card-title pt-2 pb-3">
                            From:
                            <span class="text-muted fw-normal"

                                ><?php echo $row->email;?></span

                            >
                        </h6>
                        <h6 class="card-title">
                            Message:
                        </h6>
                        <p>

                            <?php echo $row->content;?>

                        </p>
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
        </div>
    </div>
</body>
