<!DOCTYPE html>
<html lang="en">
<?php
$title = "Business";
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
            $news_article = $db_instance->getCategorySubCategory($pdo, 'business', 'featured', 1);
            include_once('../inc/featured_card.php');
            $world_news = $db_instance->getCategorySubCategory($pdo, 'business', 'world', 4);
            $wall_street_news = $db_instance->getCategorySubCategory($pdo, 'business', 'Wall Street', 3);
            $all_news = $db_instance->getCategoryBasedNews($pdo, 'business',6);

            ?>


            <!-- Wall Street -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">The Wall Street</h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $wall_street_news[0]->cover_image?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $wall_street_news[0]->name?></strong>
                            <h5 class="card-title"><?php echo $wall_street_news[0]->title?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($wall_street_news[0]->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($wall_street_news[0]->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($wall_street_news[0]->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $wall_street_news[0]->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php for ($x = 0; $x <= count($wall_street_news) - 1; $x++): ?>
                <?php if ($x != 0): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $wall_street_news[$x]->cover_image; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $wall_street_news[$x]->name; ?></strong>
                            <h5 class="card-title"><?php echo $wall_street_news[$x]->title; ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($wall_street_news[$x]->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($wall_street_news[$x]->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($wall_street_news[$x]->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $wall_street_news[$x]->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                    <?php endif; ?>
                <?php endfor; ?>


            </div>

            <!-- World Economy -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">World Economy</h3>
                </div>
                <?php foreach ($world_news as $news):?>
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
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
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

            <!-- All Stories Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">All Stories</h3>
                </div>
                <?php foreach ($all_news as $a_news):?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $a_news->cover_image?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name?></strong>
                            <h5 class="card-title"><?php echo $a_news->title?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($a_news->created_at); ?></div>
                            <p class="card-text">

                                <?php $htmlContent = json_decode($a_news->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($a_news->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>



            <?php

            $category = "business";


            include_once('../inc/upcoming_writers.php')
            ?>
        </main>
    </div>

    <?php include_once('../inc/footer.html') ?>

</body>

</html>