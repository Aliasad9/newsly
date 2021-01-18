<!DOCTYPE html>
<html lang="en">
<?php
$title = "Posts filtered by Tag";
include_once('../inc/header.php');
?>

<body>
<div class="container">

    <?php
    include_once('../inc/navbar.html');
    include_once('../functions/db_functions.php');
    include_once('../config/config.php');
    $db_class = new DBClass();
    $tag = "%" . $_GET['tag'] . "%";


    $result = $db_class->searchByTag($pdo, $tag);
    ?>


    <main class="container">
        <div class="heading my-5">
            <p class="display-6">Tag:<span class="mx-2 badge rounded-pill bg-primary"><a
                            class="text-white text-decoration-none"><?php echo $_GET['tag']; ?></a></span></p>
        </div>

        <!-- All Stories Section -->

        <div class="row mb-2">
            <?php foreach ($result as $row): ?>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $row->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php $row->name ?></strong>
                            <h5 class="card-title"><?php echo $row->title ?></h5>
                            <div class="mb-1 text-muted">
                                <?php
                                include_once('../functions/utils.php');
                                echo getFormattedDateTime($row->created_at);
                                ?>
                            </div>
                            <p class="card-text">
                                <?php
                                $htmlContent = json_decode($row->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500);
                                ?>
                            </p>
                        </div>
                        <div class="card-body">
                            <?php foreach (getTagsList($row->tags) as $t): ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>"
                                   class="card-link">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>
                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $row->n_id; ?>"
                               class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

    </main>
</div>

<?php include_once('../inc/footer.html') ?>

</body>

</html>