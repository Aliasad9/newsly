<?php

class DBClass
{

    public function getAllNews($pdo)
    {
        $stmt = $pdo->query('SELECT * FROM news JOIN category ON news.category_id = category.id;');
        return $stmt;
    }

    public function getCategoryBasedNews($pdo, $categoryName, $limit = 0)
    {
        if ($limit == 0) {
            $sql = 'SELECT * FROM news JOIN category ON news.category_id = category.id WHERE category.name = :categoryNaame';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['categoryName' => $categoryName]);
            $news = $stmt->fetchAll();
            return $news;
        } else {
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sql = 'SELECT * FROM news JOIN category ON news.category_id = category.id WHERE category.name = ? LIMIT ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$categoryName, $limit]);
            $news = $stmt->fetchAll();
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
            return $news;
        }
    }
    public function getNewsById($pdo, $id){
        $sql = 'SELECT * FROM news JOIN category ON news.category_id = category.id WHERE news.id= :id;';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id'=>$id]);
        $news = $stmt->fetch();
        return $news;
    }
    public function addNewsArticle($pdo, $title, $author_name, $author_info,
                                   $author_image, $cover_image, $image_caption,
                                   $content, $category_id, $tags)
    {
        try {
            $sql = 'INSERT INTO news(title, author_name, author_info, author_image, 
                 cover_image, image_caption, content, category_id, tags) 
                 VALUES(:title,:author_name, :author_info, :author_image, 
                        :cover_image, :image_caption, :content, :category_id, :tags);';
            $stmt = $pdo->prepare($sql);
            if ($stmt) {
                $stmt->execute(['title' => $title, 'author_name' => $author_name, 'author_info' => $author_info,
                    '$author_image' => $author_image, '$cover_image' => $cover_image, '$image_caption' => $image_caption,
                    '$content' => $content, '$category_id' => $category_id, '$tags' => $tags]);
                return true;

            } else {
                return false;
            }

        } catch (Exception $e) {
            $mes = $e->getMessage();
            error_log($mes);
            return false;
        }


    }

    public function updateNewsArticle($pdo, $id, $title, $author_name, $author_info,
                                      $author_image, $cover_image, $image_caption,
                                      $content, $category_id, $tags)
    {
        try {
            $sql = 'UPDATE posts SET title = :title, content = :content, author_name = :author_name, 
                 author_info = :author_info, author_image = :author_image, cover_image = :cover_image, 
                 image_caption = :image_caption, category_id = :category_id, tags = :tags WHERE id=:id;';
            $stmt = $pdo->prepare($sql);
            if ($stmt) {
                $stmt->execute(['id' => $id, 'title' => $title, 'author_name' => $author_name,
                    'author_info' => $author_info, '$author_image' => $author_image,
                    '$cover_image' => $cover_image, '$image_caption' => $image_caption,
                    '$content' => $content, '$category_id' => $category_id, '$tags' => $tags]);
                return true;

            } else {
                return false;
            }

        } catch (Exception $e) {
            $mes = $e->getMessage();
            error_log($mes);
            return false;
        }
    }

    public function deleteNewsById($pdo, $id)
    {
        try {
            $sql = 'DELETE FROM news WHERE id=:id;';
            $stmt = $pdo->prepare($sql);
            if ($stmt) {
                $stmt->execute(['id' => $id]);
                return true;

            } else {
                return false;
            }

        } catch (Exception $e) {
            $mes = $e->getMessage();
            error_log($mes);
            return false;
        }
    }

}

?>