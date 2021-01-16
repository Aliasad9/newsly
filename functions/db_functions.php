<?php

class DBClass
{

    public function getAllNews($pdo)
    {
        $stmt = $pdo->query('SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name FROM 
                    news JOIN category ON news.category_id = category.id ORDER BY news.created_at DESC;');
        return $stmt->fetchAll();
    }

    public function searchByTag($pdo, $tag)
    {
        $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name
                    FROM news JOIN category ON news.category_id = category.id WHERE news.tags LIKE %:tag% 
                    ORDER BY news.created_at DESC;';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['tag' => $tag]);
        $news = $stmt->fetchAll();
        return $news;
    }

    public function getSubCategoryBasedNews($pdo, $subCategory, $limit = 0)
    {
        if ($limit == 0) {
            $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name, 
                    sub_category.sub_name AS sub_name FROM news JOIN category ON news.category_id = category.id 
                    JOIN sub_category ON news.sub_category_id = sub_category.id
                    WHERE sub_category.sub_name = :subCategoryName
                    ORDER BY created_at DESC; ';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['subCategoryName' => $subCategory]);
            $news = $stmt->fetchAll();
            return $news;
        } else {
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name, 
                    sub_category.sub_name AS sub_name FROM news JOIN category ON news.category_id = category.id 
                    JOIN sub_category ON news.sub_category_id = sub_category.id
                    WHERE sub_category.sub_name = ? 
                    ORDER BY news.created_at DESC LIMIT ?; ';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$subCategory, $limit]);
            $news = $stmt->fetchAll();
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
            return $news;
        }
    }

    public function getCategoryBasedNews($pdo, $categoryName, $limit = 0)
    {
        if ($limit == 0) {
            $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name FROM 
                    news JOIN category ON news.category_id = category.id WHERE category.name = :categoryName 
                    ORDER BY created_at DESC; ';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['categoryName' => $categoryName]);
            $news = $stmt->fetchAll();
            return $news;
        } else {
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name FROM 
                    news JOIN category ON news.category_id = category.id WHERE category.name = ? 
                    ORDER BY news.created_at DESC LIMIT ?; ';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$categoryName, $limit]);
            $news = $stmt->fetchAll();
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
            return $news;
        }
    }

    public function getNewsById($pdo, $id)
    {
        $sql = 'SELECT news.id AS n_id, news.title AS title, news.content AS content, 
                    news.created_at AS created_at, news.author_name AS author_name, news.author_image 
                    AS author_image, news.author_info AS author_info, news.cover_image AS cover_image, 
                    news.image_caption AS image_caption, news.tags AS tags, category.name AS name
                    FROM news JOIN category ON news.category_id = category.id WHERE news.id= :id;';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $news = $stmt->fetch();
        return $news;
    }

    public function addNewsArticle($pdo, $title, $author_name, $author_info,
                                   $author_image, $cover_image, $image_caption,
                                   $content, $sub_category_id, $category_id, $tags)
    {
        try {
            $sql = 'INSERT INTO news(title, author_name, author_info, author_image, 
                 cover_image, image_caption, content,sub_category_id, category_id, tags) 
                 VALUES(?,?, ?, ?,?, ?, ?, ?, ?,?);';
            $stmt = $pdo->prepare($sql);
            if ($stmt) {
                try {
                    $stmt->execute([$title, $author_name, $author_info,
                        $author_image, $cover_image, $image_caption,
                        $content, $sub_category_id, $category_id, $tags]);
                    $stmt->closeCursor();
                    return true;
                } catch (Exception $exception) {
                    echo $exception;
                    return false;
                }

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

    public function getCategories($pdo)
    {
        $stmt = $pdo->query('SELECT * FROM category;');
        return $stmt->fetchAll();
    }

    public function getSubCategories($pdo, $categoryId)
    {
        $sql = 'SELECT category.id AS category_id, category.name AS category_name, 
                sub_category.sub_name AS sub_category_name, sub_category.id AS 
                sub_category_id FROM category JOIN sub_category ON 
                sub_category.category_id = category.id WHERE sub_category.category_id= :id;';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $categoryId]);
        $categories = $stmt->fetchAll();
        return $categories;
    }

    public function addContactUs($pdo, $subject, $email, $content)
    {
        try {
            $sql = 'INSERT INTO contact_us( subject,email, content) VALUES(?,?, ?);';
            $stmt = $pdo->prepare($sql);
            if ($stmt) {
                try {
                    $stmt->execute([$subject, $email, $content]);
                    $stmt->closeCursor();
                    return true;
                } catch (Exception $exception) {
                    echo $exception;
                    return false;
                }
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