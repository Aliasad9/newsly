<?php

include_once('../functions/utils.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors


    function getEmptyFields()
    {
        $fieldsList = [];
        if (!isset($_POST['author-name']) || ($_POST['author-name'] == '')) {
            array_push($fieldsList, "author-name=0");
        }
        if (!isset($_POST['author-info']) || ($_POST['author-info'] == '')) {
            array_push($fieldsList, "author-info=0");
        }
        if (!isset($_FILES['author-image']) && $_FILES['author-image']["error"] == 0) {
            array_push($fieldsList, "author-image=0");
        }
        if (!isset($_POST['title']) || ($_POST['title'] == '')) {
            array_push($fieldsList, "title=0");
        }
        if (!isset($_POST['cover-image-caption']) || ($_POST['cover-image-caption'] == '')) {
            array_push($fieldsList, "cover-image-caption=0");
        }
        if (!isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
            array_push($fieldsList, "photo=0");
        }
        if (!isset($_POST['category']) || ($_POST['category'] == '')) {
            array_push($fieldsList, "category=0");
        }
        return $fieldsList;

    }

    $fields = getEmptyFields();
    if (count($fields) > 0) {
        header('Location: ./create_article_form_1.php?' . join('&', $fields));

    } else {
        $cover_image = handle_photo("photo");
        $author_image = handle_photo("author-image");
        echo "<script>"."window.localStorage.setItem('cover-image', ".$cover_image.");</script>";
        echo "<script>"."window.localStorage.setItem('cover-image', ".$author_image.");</script>";

    }


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
    <form method="POST" action="submit.php" onsubmit="return saveForm()">
        <div class="mb-3">
            <label for="editor" class="form-label"
            >Write your Content</label
            >

            <textarea name="content" id="editor"> </textarea>
            <?php if (isset($_GET['content'])): ?>
                <div class="text-danger">
                    Field cannot be empty
                </div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Sub-Category</label>
            <select class="form-select" aria-label="sub-category" name="sub-category" id="sub-category">
                <?php
                include_once('../functions/db_functions.php');
                include_once('../config/config.php');
                $db_instance = new DBClass();

                if (isset($_POST['category'])) {
                    $rows = $db_instance->getSubCategories($pdo, $_POST['category']);
                        echo "post";
                } else {
                    $rows = $db_instance->getSubCategories($pdo, $_GET['category']);
                    echo "get";
                }
                ?>
                <?php foreach ($rows as $row): ?>
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
            <?php if (isset($_GET['tag-list'])): ?>
                <div class="text-danger">
                    Field cannot be empty
                </div>
            <?php endif; ?>

        </div>
        <input hidden type="text" class="form-control" name="title" id="title"/>
        <input hidden type="text" class="form-control" name="author-image" id="author-image"
               value="<?php

                   echo "<script>window.localStorage.getItem('author-image');</script>";

               ?>"/>
        <input hidden type="text" class="form-control" name="author-name" id="author-name"
        />
        <input hidden type="text" class="form-control" name="author-info" id="author-info"
        />
        <input hidden type="text" class="form-control" name="cover-image" id="cover-image"
               value="<?php

                   echo "<script>window.localStorage.getItem('cover-image');</script>";

               ?>"/>
        <input hidden type="text" class="form-control" name="image-caption" id="image-caption"
        />
        <input hidden type="text" class="form-control" name="category" id="category"
        />

        <button type="submit" class="btn btn-primary">
            Create Article
        </button>
    </form>
</div>

<!-- Create CKEditor in textarea -->
<script>
    let editor;
    ClassicEditor.create(document.querySelector("#editor"), {

        removePlugins: [
            "Link",
            "ImageUpload",
            "Table",
            "TableToolbar",
            "MediaEmbed"
        ],
        toolbar: [
            "Heading",
            "bold",
            "italic",
            "bulletedList",
            "numberedList",
            "Indent",
            "blockQuote"
        ]
    }).then(newEditor => {
        editor = newEditor;
        editor.data.set(window.localStorage.getItem('content'));
    }).catch(error => {
        console.error(error);
    });

    console.log(
        ClassicEditor.builtinPlugins.map(plugin => plugin.pluginName)
    );
    document.getElementById("author-name").value = window.localStorage.getItem('author-name');
    document.getElementById("author-info").value = window.localStorage.getItem('author-info');
    document.getElementById("title").value = window.localStorage.getItem('title');
    document.getElementById("image-caption").value = window.localStorage.getItem('cover-image-caption');
    document.getElementById("tag-list").value = window.localStorage.getItem('tag-list');
    document.getElementById("sub-category").value = window.localStorage.getItem('sub-category');
    document.getElementById("category").value = window.localStorage.getItem('category');


    function saveForm() {
        window.localStorage.setItem('cover-image', document.getElementById('cover-image').value);
        window.localStorage.setItem('author-image', document.getElementById('author-image').value);
        window.localStorage.setItem('tag-list', document.getElementById('tag-list').value);
        window.localStorage.setItem('content', editor.getData());
        window.localStorage.setItem('sub-category', document.getElementById('sub-category').value);
        return true;
    }
</script>

</body>
