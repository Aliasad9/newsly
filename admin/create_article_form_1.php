<!DOCTYPE html>
<?php session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
}
?>
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Bootstrap News Website Theme"/>

    <title>Create Article</title>

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
    <!-- Custom styles for this template -->
    <link href="/newsly/styles/style.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
    </div>
</nav>
<div class="container my-4">
    <div class="header mb-4">
        <p class="display-6">Write a New Article (1/2)</p>
    </div>
    <form method="POST" action="create_article_form_2.php" enctype="multipart/form-data" onsubmit="return saveForm()">
        <div class="mb-3">
            <label for="author-name" class="form-label">Author Name</label>

            <input type="text" class="form-control" name="author-name" id="author-name" value=""/>
            <?php if (isset($_GET['author-name'])): ?>
                <div class="text-danger">
                    Please enter a valid name
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="author-info" class="form-label">Author Description</label>
            <input type="text" class="form-control" name="author-info" id="author-info"/>
            <?php if (isset($_GET['author-info'])): ?>
                <div class="text-danger">
                    Please enter description about the author
                </div>
            <?php endif; ?>

        </div>
        <div class="mb-3">
            <label for="authorImage" class="form-label">Author Image</label>
            <input class="form-control" type="file" name="author-image" id="authorImage"/>
            <div class="form-text">
                Only image formats(.png, .jpg, .bmp) are acceptable. (5MB or less)
            </div>
            <?php if (isset($_GET['author-image'])): ?>
                <div class="text-danger">
                    Please enter author image.
                </div>
            <?php endif; ?>

        </div>


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title"/>
            <div class="form-text">
                Choose a title which represents the article.
            </div>
            <?php if (isset($_GET['title'])): ?>
                <div class="text-danger">
                    Field cannot be empty
                </div>
            <?php endif; ?>

        </div>
        <div class="mb-3">
            <label for="fileSelect" class="form-label"
            >Cover Image:</label
            >
            <input class="form-control" type="file" name="photo" id="fileSelect"/>
            <div class="form-text">
                Only image formats(.png, .jpg, .bmp) are acceptable. (5MB or less)
            </div>
            <?php if (isset($_GET['photo'])): ?>
                <div class="text-danger">
                    Please choose an image
                </div>
            <?php endif; ?>

        </div>
        <div class="mb-3">
            <label for="cover-image-caption" class="form-label">Image Caption</label>

            <input type="text" class="form-control" name="cover-image-caption" id="cover-image-caption"/>
            <div class="form-text">Choose caption displayed under cover image.</div>
            <?php if (isset($_GET['cover-image-caption'])): ?>
                <div class="text-danger">
                    Field cannot be empty
                </div>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label"> Category</label>
            <select class="form-select" aria-label="category" name="category" id="category">
                <?php

                include_once('../functions/db_functions.php');
                include_once('../config/config.php');
                $db_instance = new DBClass();
                $rows = $db_instance->getCategories($pdo);

                ?>
                <?php foreach ($rows as $row): ?>
                    <option value=<?php echo $row->id; ?>><?php echo $row->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Next Step</button>
    </form>
</div>
<script>
    document.getElementById("author-name").value = window.localStorage.getItem('author-name');
    document.getElementById("author-info").value = window.localStorage.getItem('author-info');
    document.getElementById("title").value = window.localStorage.getItem('title');
    document.getElementById("cover-image-caption").value = window.localStorage.getItem('cover-image-caption');
</script>
<script>
    function saveForm() {
        window.localStorage.setItem('author-name', document.getElementById('author-name').value);
        window.localStorage.setItem('category', document.getElementById('category').value);
        window.localStorage.setItem('author-info', document.getElementById('author-info').value);
        window.localStorage.setItem('title', document.getElementById('title').value);
        window.localStorage.setItem('cover-image-caption', document.getElementById('cover-image-caption').value);
        return true;
    }

</script>
</body>
