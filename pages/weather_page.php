<!DOCTYPE html>
<html lang="en">
<?php
$title = "Weather";
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
        $news_article = $db_instance->getCategorySubCategory($pdo, 'weather', 'featured', 1);
        include_once('../inc/featured_card.php');
        $latest_news = $db_instance->getCategorySubCategory($pdo, 'weather', 'latest', 3);
        $asia_news = $db_instance->getCategorySubCategory($pdo, 'weather', 'asia', 3);
        $all_news = $db_instance->getCategoryBasedNews($pdo, 'weather');
        ?>

        <!-- Latest Forecast -->
        <div class="row mt-4">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Latest Forecast</h3>
            </div>
            <div class="big-card col-lg-8 col-md-12">
                <div class="card mb-4">
                    <img src="../assets/<?php echo $latest_news[0]->cover_image ?>" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success"><?php echo $latest_news[0]->name ?></strong>
                        <h5 class="card-title"><?php echo $latest_news[0]->title ?></h5>
                        <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                            echo getFormattedDateTime($latest_news[0]->created_at); ?></div>
                        <p class="card-text">
                            <?php $htmlContent = json_decode($latest_news[0]->content, true)['data'];
                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "..."; ?>
                        </p>
                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $latest_news[0]->n_id; ?>"
                           class="card-link">Read More</a>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="row col-lg-4 col-md-12 px-0 mx-0">
                <?php for ($x = 1; $x <= count($latest_news) - 1; $x++): ?>

                    <div class="col-lg-12 col-md-6 mb-3">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $latest_news[$x]->cover_image ?>" class="card-img-top"
                                 alt="..."/>
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $latest_news[0]->name ?></strong>
                                <h5 class="card-title"><?php echo $latest_news[$x]->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($latest_news[$x]->created_at); ?></div>
                                <p class="card-text">
                                    <?php $htmlContent = json_decode($latest_news[$x]->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 300) . "..."; ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $latest_news[$x]->n_id; ?>"
                                   class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

            </div>
        </div>

        <!-- South Asia Weather -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">South and Central Asia Weather</h3>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card mb-4">
                    <img src="../assets/<?php echo $asia_news[0]->cover_image ?>" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $asia_news[0]->name ?></strong>
                        <h5 class="card-title"><?php echo $asia_news[0]->title ?></h5>
                        <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                            echo getFormattedDateTime($asia_news[0]->created_at); ?></div>
                        <p class="card-text">
                            <?php $htmlContent = json_decode($asia_news[0]->content, true)['data'];
                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 300) . "..."; ?>
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $asia_news[0]->n_id; ?>"
                           class="card-link">Read More</a>
                    </div>
                </div>
            </div>
            <?php for ($x = 1; $x <= count($asia_news) - 1; $x++): ?>

                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $asia_news[$x]->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $asia_news[$x]->name ?></strong>
                            <h5 class="card-title"><?php echo $asia_news[$x]->title ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($asia_news[$x]->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($asia_news[$x]->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 300) . "..."; ?>
                            </p>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $asia_news[$x]->n_id; ?>"
                               class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>

        <!-- All Weather News -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">All Stories</h3>
            </div>
            <?php foreach ($all_news as $a_news): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $a_news->name ?></strong>
                            <h5 class="card-title"><?php echo $a_news->title ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($a_news->created_at); ?></div>
                            <p class="card-text">
                                <?php

                                $htmlContent = json_decode($a_news->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 200) . "...";
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
        include_once('../inc/upcoming_writers.html')
        ?>
    </main>
</div>

<?php include_once('../inc/footer.html') ?>

</body>

</html>