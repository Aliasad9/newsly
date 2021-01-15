<?php

if (isset($_POST['content'])){
    include_once('../functions/db_functions.php');
    include_once('../config/config.php');
    $db_instance = new DBClass();
    $authorName = $_POST['author-name'];
    $authorInfo = $_POST['author-info'];
    $authorImage = $_POST['author-image'];

    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    $subCategory = $_POST['sub-category'];
    $tagListStr = $_POST['tag-list'];
    $coverImage = $_POST['cover-image'];
    $imageCaption = $_POST['image-caption'];
    $tagsList= explode(",",$tagListStr);
    $tagsJson = json_encode($tagsList);
    $contentJson = "{\"data\":\"$content\"}";

    $status = $db_instance->addNewsArticle($pdo, $title, $authorName,$authorInfo, $authorImage, $coverImage, $imageCaption, $contentJson, $category,"{\"tags\": $tagsJson}");
    if($status){
        echo "Success";
    }
    else{
        echo "LPC";
    }
}
?>