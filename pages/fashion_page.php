<!DOCTYPE html>
<html lang="en">
<?php
$title = "Fashion";
include_once('../inc/header.php');
?>

<body>
    <div class="container">
        <?php
        include_once('../inc/navbar.html')
        ?>
        <main class="container">
            <?php
            include_once('../functions/db_functions.php');
            include_once('../config/config.php');

            $db_instance = new DBClass();
            $news_article = $db_instance->getCategorySubCategory($pdo, 'fashion', 'featured', 1);
            include_once('../inc/featured_card.php');


            $designer_news = $db_instance->getCategorySubCategory($pdo, 'fashion', 'designers', 4);
            $trending_news = $db_instance->getCategorySubCategory($pdo, 'fashion', 'trending', 4);
            $all_news = $db_instance->getCategoryBasedNews($pdo, 'fashion',6);

            ?>

            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Trending Fashions</h3>
                </div>
                <?php foreach ($trending_news as $news):?>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $news->cover_image?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $news->name?></strong>
                            <h5 class="card-title"><?php echo $news->title?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($news->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($news->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($news->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <!-- Best Articles -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Fashion Across the Globe</h3>
                </div>
                <?php foreach ($designer_news as $news):?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $news->cover_image?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $news->name?></strong>
                            <h5 class="card-title"><?php echo $news->title?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($news->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($news->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($news->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id; ?>"  class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <!-- All Stories Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">All Stories</h3>
                </div>

                <?php foreach ($all_news as $a_news): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..."/>
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150)."...";
                                    ?>
                                </p>
                                <?php foreach (getTagsList($a_news->tags) as $t) : ?>

                                    <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                                <?php endforeach; ?>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>"
                                   class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <?php
            $category = "fashion";
            include_once('../inc/upcoming_writers.php')
            ?>
        </main>
    </div>

    <?php include_once('../inc/footer.html') ?>
</body>

</html>