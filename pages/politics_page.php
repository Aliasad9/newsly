<!DOCTYPE html>
<html lang="en">
<?php
$title = "Politics";
include_once('../inc/header.php');
?>

<body>
<div class="container">
    <?php
    include_once('../inc/navbar.html')
    ?>
    <main class="container">

        <!-- TODO: Dynamically add background image -->
        <?php
        include_once('../functions/db_functions.php');
        include_once('../config/config.php');
        $db_instance = new DBClass();
        $news_article = $db_instance->getCategorySubCategory($pdo, 'politics', 'featured', 1);
        include_once('../inc/featured_card.php');
        $world_news = $db_instance->getCategorySubCategory($pdo, 'politics', 'world', 4);
        $latest_news = $db_instance->getCategorySubCategory($pdo, 'politics', 'latest', 7);

        $all_news = $db_instance->getCategoryBasedNews($pdo, 'politics', 6);

        ?>

        <!-- Latest Articles used as Latest-->
        <div class="row mt-4">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Latest News</h3>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <?php for ($x = 0; $x < 3; $x++): ?>
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <img src="../assets/<?php echo $latest_news[$x]->cover_image ?>" class="card-img-top"
                                     alt="..."/>
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-success"><?php echo $latest_news[$x]->name ?></strong>
                                    <h5 class="card-title"><?php echo $latest_news[$x]->title ?></h5>
                                    <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                        echo getFormattedDateTime($latest_news[$x]->created_at); ?></div>
                                    <p class="card-text">
                                        <?php

                                        $htmlContent = json_decode($latest_news[$x]->content, true)['data'];
                                        echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "...";
                                        ?>
                                    </p>
                                    <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $latest_news[$x]->n_id; ?>"
                                       class="card-link">Read More</a>
                                </div>
                                <div class="card-body"></div>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
            <div class="row col-lg-4 col-md-12 px-0 mx-0">
                <?php for ($x = 3; $x < count($latest_news); $x++): ?>

                <div class="col-lg-12 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $latest_news[$x]->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $latest_news[$x]->name ?></strong>
                            <h5 class="card-title"><?php echo $latest_news[$x]->title ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($latest_news[$x]->created_at); ?></div>
                            <p class="card-text">
                                <?php

                                $htmlContent = json_decode($latest_news[$x]->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "...";
                                ?>
                            </p>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $latest_news[$x]->n_id; ?>" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>


            </div>
        </div>

        <!-- World Articles -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">World News</h3>
            </div>
            <?php foreach ($world_news as $n): ?>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $n->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $n->name ?></strong>
                            <h5 class="card-title"><?php echo $n->title ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($n->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($n->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                            </p>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $n->n_id; ?>"
                               class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

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
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "...";
                                ?>
                            </p>
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

        $category = "politics";

        include_once('../inc/upcoming_writers.php')
        ?>
    </main>
</div>
<?php include_once('../inc/footer.html') ?>
</body>

</html>