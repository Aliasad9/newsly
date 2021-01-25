<script>
    function clearMemory() {
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


    }

</script>
<?php

include_once('../functions/utils.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors


    function getEmptyFields()
    {
        $fieldsList = [];
        if (!isset($_POST['content']) || ($_POST['content'] == '')) {
            array_push($fieldsList, "content=0");
        }
        if (!isset($_POST['sub-category']) || ($_POST['sub-category'] == '')) {
            array_push($fieldsList, "sub-category=0");
        }

        if (!isset($_POST['tag-list']) || ($_POST['tag-list'] == '')) {
            array_push($fieldsList, "tag-list=0");
        }

        return $fieldsList;

    }

    $fields = getEmptyFields();
    if (count($fields) > 0) {
        header('Location: ./create_article_form_2.php?' . join('&', $fields) . "&category=" . $_POST['category']);

    } else {
        echo "<script>clearMemory();</script>";
        submitData();
    }


}

function submitData()
{
    include_once('../functions/db_functions.php');
    include_once('../config/config.php');
    $db_instance = new DBClass();
    $authorName = htmlspecialchars($_POST['author-name']);
    $authorInfo = htmlspecialchars($_POST['author-info']);
    $authorImage = htmlspecialchars($_POST['author-image']);

    $title = htmlspecialchars($_POST['title']);
    $content = addcslashes($_POST['content'], '"');
    $category = htmlspecialchars($_POST['category']);

    $subCategory = htmlspecialchars($_POST['sub-category']);
    $tagListStr = htmlspecialchars($_POST['tag-list']);
    $coverImage = htmlspecialchars($_POST['cover-image']);
    $imageCaption = htmlspecialchars($_POST['image-caption']);
    $tagsList = explode(",", $tagListStr);
    $tagsJson = json_encode($tagsList);
    $contentJson = "{\"data\":\"$content\"}";

    $status = $db_instance->addNewsArticle($pdo, $title, $authorName, $authorInfo, $authorImage,
        $coverImage, $imageCaption, $contentJson, $subCategory, $category, "{\"tags\": $tagsJson}");
    if ($status) {
        header('location: ./news_dashboard_1.php?news=create');

    } else {
        echo "LPC";
    }
}

?>

