<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
} else {

    if (isset($_GET['category'])) {
        $categoryName = $_GET['category'];
        include_once('../config/config.php');
        include_once('../functions/db_functions.php');
        $db_instance = new DBClass();
        $result = $db_instance->getCategoryBasedNews($pdo, $categoryName);

    } else {
        header('Location: ./news_dashboard_1.php');
    }
}
?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Bootstrap News Website Theme"/>
    <title><?php echo ucwords($categoryName); ?> Articles</title>

    <!-- Bootstrap core CSS -->
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
            crossorigin="anonymous"
    />

    <meta name="theme-color" content="#7952b3"/>

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
                class="collapse navbar-collapse float-right"
                id="navbarNavDropdown"
        >
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item mx-2">
                    <a
                            class="nav-link"
                            aria-current="page"
                            href="../admin/create_article_form_1.php"
                    ><i class="px-2 fas fa-pencil-alt"></i>Write an
                        Article</a
                    >
                </li>
                <li class="nav-item mx-2">
                    <a
                            class="btn btn-outline-danger btn-sm"
                            aria-current="page"
                            href="#"
                    >Logout</a
                    >
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container my-4">
    <div
            class="header d-flex flex-md-row flex-column justify-content-md-between align-items-md-center"
    >
        <div class="content">
            <p class="card-title display-6 pt-3">
                <i class="far fa-newspaper"></i
                ><span class="px-3"><?php echo ucwords($categoryName); ?> News Articles</span>
            </p>
            <p>Showing all articles published under <?php echo strtolower($categoryName); ?> category.</p>
        </div>
        <div class="button">
            <a href="news_dashboard_1.php">View All Categories</a>
        </div>
    </div>

    <div class="categories-section my-5">
        <?php foreach ($result as $row): ?>
            <div class="card bg-light my-3">
                <div class="card-body row align-items-center">
                    <div class="content col-md-9">
                        <h5 class="card-title">
                            <?php echo $row->title ?>
                        </h5>
                        <p class="card-text text-muted">
                            Published on <?php
                            include_once('../functions/utils.php');
                            echo getFormattedDateTime($row->created_at);
                            ?>
                        </p>
                    </div>
                    <div
                            class="buttons col-md-3 d-flex justify-content-md-end justify-content-start mt-md-0 mt-3"
                    >
                        <a
                                class="btn btn-sm btn-outline-primary me-2"
                                href="./edit_article_form.php?id=<?php echo $row->n_id ?>"
                        >Edit</a
                        >
                        <a
                                class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');"
                                href="./delete_news.php?id=<?php echo $row->n_id ?>"
                        >Delete</a
                        >
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</body>
