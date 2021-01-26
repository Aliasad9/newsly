<!DOCTYPE html>
<html lang="en">
<?php
$title = "Technology";
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
            $news_article = $db_instance->getCategorySubCategory($pdo, 'technology', 'featured', 1);
            include_once('../inc/featured_card.php');
            $giants_news = $db_instance->getCategorySubCategory($pdo, 'technology', 'giants', 4);
            $latest_news = $db_instance->getCategorySubCategory($pdo, 'technology', 'latest', 4);
            $all_news = $db_instance->getCategoryBasedNews($pdo, 'technology',6);

            ?>

            <!-- 4 Column Grid -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Latest Tech News</h3>
                </div>
                <?php foreach ($latest_news as $news):?>
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
                            <a <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <!-- Tech Giants -->
            <div class="row mt-4">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Tech Giants</h3>
                </div>
                <div class="big-card col-lg-12 col-md-12">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $giants_news[0]->cover_image; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $giants_news[0]->name; ?></strong>
                            <h5 class="card-title"><?php echo $giants_news[0]->title; ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($giants_news[0]->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($giants_news[0]->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($giants_news[0]->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $giants_news[0]->n_id; ?>" class="card-link">Read More</a>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="row col-lg-12 col-md-12 px-0 mx-0">
                    <?php for ($x = 0; $x <= count($giants_news) - 1; $x++): ?>
                    <?php if ($x != 0): ?>
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $giants_news[$x]->cover_image; ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $giants_news[$x]->name; ?></strong>
                                <h5 class="card-title"><?php echo $giants_news[$x]->title; ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($giants_news[$x]->created_at); ?></div>
                                <p class="card-text">
                                    <?php $htmlContent = json_decode($giants_news[$x]->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                                </p>
                                <?php foreach (getTagsList($giants_news[$x]->tags) as $t) : ?>

                                    <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                                <?php endforeach; ?>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $giants_news[$x]->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                        <?php endif; ?>
                    <?php endfor; ?>

                </div>
            </div>

            <!-- All Stories -->
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
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500)."...";
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
            $category = "technology";
            include_once('../inc/upcoming_writers.php')
            ?>
        </main>
    </div>

    <?php include_once('../inc/footer.html') ?>
</body>

</html>