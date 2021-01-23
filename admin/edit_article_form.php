<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./admin_login.php");
} else {
    if (isset($_POST['n_id'])) {
        $news_id = $_POST['n_id'];
        include_once('../config/config.php');
        include_once('../functions/db_functions.php');
        $db_instance = new DBClass();
        $old = $db_instance->getNewsById($pdo, $news_id);
        $content = addcslashes($_POST['content'], '"');
        $contentJson = "{\"data\":\"$content\"}";
        if (!isset($_FILES['photo'])) {
            $new = $db_instance->updateNewsArticle(
                    $pdo,
                    $news_id,
                    htmlspecialchars($_POST['title']),
                    $old->cover_image,
                    htmlspecialchars($_POST['cover-image-caption']),
                    $contentJson
            );
            if($new){
                header('location: ./news_dashboard_1.php');
            }

        }else{

            include_once('../functions/utils.php');
            $cover_image = handle_photo("photo");
            $new = $db_instance->updateNewsArticle($pdo,
                $news_id,
                htmlspecialchars($_POST['title']),
                $cover_image,
                htmlspecialchars($_POST['cover-image-caption']),
                $contentJson
            );
            if($new){
                header('location: ./news_dashboard_1.php');

            }

        }

    } else if (isset($_GET['id'])) {
        $news_id = $_GET['id'];
        include_once('../config/config.php');
        include_once('../functions/db_functions.php');
        $db_instance = new DBClass();
        $result = $db_instance->getNewsById($pdo, $news_id);


    } else {
        echo "<script>history.back();</script>";

    }
}
?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Bootstrap News Website Theme"/>
    <title>Edit Article</title>

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
        <p class="display-6">Edit Your Article</p>
    </div>
    <div hidden id="content">
        <?php echo json_decode($result->content, true)['data'] ?>
    </div>


    <form method="POST" action="./edit_article_form.php" enctype="multipart/form-data" >
        <input hidden name="n_id" value="<?php echo $result->n_id ?>"/>

        <div class="mb-3">

            <label for="title" class="form-label">Title</label>
            <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    value="<?php echo $result->title; ?>"
            />
            <div class="form-text">
                Choose a title which represents the article.
            </div>
        </div>

        <div class="mb-3">
            <label for="editor" class="form-label">Your Content</label>

            <textarea name="content" id="editor"> </textarea>
            <div class="form-text">
                Update content here.
            </div>
        </div>

        <div class="mb-3">
            <label for="fileSelect" class="form-label">Update Cover Image</label>
            <input
                    class="form-control "
                    type="file"
                    name="photo"
                    id="fileSelect"
            />

            <div class="form-text">
                Selected Image:<a href="../assets/<?php echo $result->cover_image ?>"
                                  download><?php echo $result->cover_image ?> </a><br>
                Only image formats(.png, .jpg, .bmp) are acceptable. (5MB or
                less)
            </div>
        </div>
        <div class="mb-3">
            <label for="cover-image-caption" class="form-label"
            >Image Caption</label
            >

            <input
                    type="text"
                    class="form-control"
                    name="cover-image-caption"
                    id="cover-image-caption"
                    value="<?php
                    echo $result->image_caption
                    ?>"
            />
            <div class="form-text">
                Choose caption displayed under cover image.
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            Save Article
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
        editor.data.set(document.getElementById('content').innerHTML);
    }).catch(error => {
        console.error(error);
    });

    console.log(
        ClassicEditor.builtinPlugins.map(plugin => plugin.pluginName)
    );
</script>
</body>
