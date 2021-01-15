<?php

if (isset($_POST['content'])) {
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
        echo "Success";
    } else {
        echo "LPC";
    }
}
?>