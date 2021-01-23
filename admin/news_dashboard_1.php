<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
}
?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Bootstrap News Website Theme"/>
    <title>News Dashboard</title>

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
    </div>
</nav>
<div class="container my-4">
    <p class="card-title display-6 pt-3">
        <i class="fas fa-cubes"></i
        ><span class="px-3">News Categories</span>
    </p>
    <p>Select a category to access all news articles for that category.</p>
    <div class="categories-section my-5">
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Politics</h5>
                <p class="card-text">
                    News related to all currrent political events and more
                    from around the world.
                </p>
                <a href="./news_dashboard_2.php?category=politics">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Fashion</h5>
                <p class="card-text">
                    All fashion related news and latest trends from the
                    fashion industry.
                </p>
                <a href="./news_dashboard_2.php?category=fashion">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Sports</h5>
                <p class="card-text">
                    Latest scores and highlights from your favorite players
                    and sports.
                </p>
                <a href="./news_dashboard_2.php?category=sports">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Music</h5>
                <p class="card-text">
                    See what is new in the music industry, record labels,
                    albums, and more!
                </p>
                <a href="./news_dashboard_2.php?category=music">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Weather</h5>
                <p class="card-text">
                    All weather related news and forecast for the current
                    month including weather patterns and storm warnings.
                </p>
                <a href="./news_dashboard_2.php?category=weather">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Technology</h5>
                <p class="card-text">
                    See the latest product launches and catch the newset
                    trends in cutting-edge technology.
                </p>
                <a href="./news_dashboard_2.php?category=technology">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Business</h5>
                <p class="card-text">
                    All business related news and latest trends from the
                    industry.
                </p>
                <a href="./news_dashboard_2.php?category=business">View All Posts</a>
            </div>
        </div>
        <div class="card bg-light my-3">
            <div class="card-body">
                <h5 class="card-title">Entertainment</h5>
                <p class="card-text">
                    See what is new from the entertainment industry and your
                    favorite stars.
                </p>
                <a href="./news_dashboard_2.php?category=entertainment">View All Posts</a>
            </div>
        </div>
    </div>
</div>
</body>
<script>

    window.localStorage.removeItem('author-name');
    window.localStorage.removeItem('author-info');
    window.localStorage.removeItem('title');
    window.localStorage.removeItem('cover-image-caption');

    window.localStorage.removeItem('cover-image');
    window.localStorage.removeItem('author-image');
    window.localStorage.removeItem('tag-list');
    window.localStorage.removeItem('content');
    window.localStorage.removeItem('sub-category');
    window.localStorage.removeItem('category');


</script>