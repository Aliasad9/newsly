<?php

include_once ('../functions/utils.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors


    $cover_image = handle_photo("photo");
    $author_image = handle_photo("author-image");
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

    <!-- CKEditor CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin</a>
    </div>
</nav>

<div class="container my-4">
    <div class="header mb-4">
        <p class="display-6">Write a New Article (2/2)</p>
    </div>
    <form method="POST" action="submit.php">
        <div class="mb-3">
            <label for="editor" class="form-label"
            >Write your Content</label
            >

            <textarea name="content" id="editor"> </textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Sub-Category</label>
            <select class="form-select" aria-label="sub-category" name="sub-category">
                <?php
                if (isset($_POST['category'])) {
                    include_once('../functions/db_functions.php');
                    include_once('../config/config.php');
                    $db_instance = new DBClass();
                    $rows = $db_instance->getSubCategories($pdo, $_POST['category']);
                } else {
                    //TODO: revert back to previous form
                }
                ?>
                <?php foreach ($rows as $row): ?>
                    <?php echo $row->id; ?>
                    <?php echo $row->name; ?>
                    <option selected
                            value=<?php echo $row->sub_category_id; ?>><?php echo $row->sub_category_name; ?></option>
                <?php endforeach; ?>

            </select>
            <div class="form-text">
                Select a sub-category for your article.
            </div>
        </div>
        <div class="mb-3">
            <label for="tag-list" class="form-label">Tag List</label>
            <input type="text" class="form-control" name="tag-list" id="tag-list"/>
            <div class="form-text">
                Write upto 4 comma-separated tags.
            </div>

        </div>
        <input hidden type="text" class="form-control" name="title" id="title" value="<?php echo $_POST['title']; ?>"/>
        <input hidden type="text" class="form-control" name="author-image" id="author-image"
               value="<?php echo $author_image; ?>"/>
        <input hidden type="text" class="form-control" name="author-name" id="author-name"
               value="<?php echo $_POST['author-name']; ?>"/>
        <input hidden type="text" class="form-control" name="author-info" id="author-info"
               value="<?php echo $_POST['author-info']; ?>"/>
        <input hidden type="text" class="form-control" name="cover-image" id="cover-image"
               value="<?php echo $cover_image; ?>"/>
        <input hidden type="text" class="form-control" name="image-caption" id="image-caption"
               value="<?php echo $_POST['cover-image-caption'] ?>"/>
        <input hidden type="text" class="form-control" name="category" id="category"
               value="<?php echo $_POST['category'] ?>"/>

        <!--            TODO: get previous form data and pass forward-->
        <button type="submit" class="btn btn-primary">
            Create Article
        </button>
    </form>
</div>

<!-- Create CKEditor in textarea -->
<script>
    ClassicEditor.create(document.querySelector("#editor")).catch(error => {
        console.error(error);
    });
</script>
</body>
