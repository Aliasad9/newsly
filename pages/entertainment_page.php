<!DOCTYPE html>
<html lang="en">
<?php
$title = "Entertainment";
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
        $news_article = $db_instance->getCategorySubCategory($pdo, 'entertainment', 'featured', 1);
        include_once('../inc/featured_card.php');
        $hollywood_news = $db_instance->getCategorySubCategory($pdo, 'entertainment', 'hollywood', 4);
        $blockbuster_news = $db_instance->getCategorySubCategory($pdo, 'entertainment', 'blockbuster', 4);
        $all_news = $db_instance->getCategoryBasedNews($pdo, 'entertainment', 7);

        ?>

        <!-- Hollywood -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Best of Hollywood</h3>
            </div>
            <?php foreach ($hollywood_news as $n): ?>
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
                            <?php foreach (getTagsList($n->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $n->n_id; ?>"
                               class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>


        <!-- Blockbuster -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Blockbuster Movies</h3>
            </div>
            <?php foreach ($blockbuster_news as $n): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/<?php echo $n->cover_image ?>" class="card-img-top" alt="..."/>
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary"><?php echo $n->name ?></strong>
                            <h5 class="card-title"><?php echo $n->title ?></h5>
                            <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                echo getFormattedDateTime($n->created_at); ?></div>
                            <p class="card-text">
                                <?php $htmlContent = json_decode($n->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 120) . "..."; ?>
                            </p>
                            <?php foreach (getTagsList($n->tags) as $t) : ?>

                                <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                            <?php endforeach; ?>
                        </div>

                        <div class="card-body">
                            <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $n->n_id; ?>"
                               class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- All Stories -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">All Stories</h3>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card mb-4">
                    <img src="../assets/<?php echo $all_news[0]->cover_image; ?>" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $all_news[0]->name; ?></strong>
                        <h5 class="card-title"><?php echo $all_news[0]->title; ?></h5>
                        <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                            echo getFormattedDateTime($all_news[0]->created_at); ?></div>
                        <p class="card-text">
                            <?php $htmlContent = json_decode($all_news[0]->content, true)['data'];
                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 120) . "..."; ?>
                        </p>
                        <?php foreach (getTagsList($all_news[0]->tags) as $t) : ?>

                            <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                        <?php endforeach; ?>
                    </div>

                    <div class="card-body">
                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $all_news[0]->n_id; ?>"
                           class="card-link">Read More</a>
                    </div>
                </div>
            </div>

            <?php for ($x = 0; $x <= count($all_news) - 1; $x++): ?>
                <?php if ($x != 0): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $all_news[$x]->cover_image; ?>" class="card-img-top" alt="..."/>
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary"><?php echo $all_news[$x]->name; ?></strong>
                                <h5 class="card-title"><?php echo $all_news[$x]->title; ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($all_news[$x]->created_at); ?></div>
                                <p class="card-text">
                                    <?php $htmlContent = json_decode($all_news[$x]->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 120) . "..."; ?>
                                </p>
                                <?php foreach (getTagsList($all_news[$x]->tags) as $t) : ?>

                                    <a href="./all_tag_posts_page.php?tag=<?php echo $t; ?>" class="text-muted fst-italic text-decoration-none me-1">#<?php echo $t ?></a>

                                <?php endforeach; ?>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $all_news[$x]->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <?php

        $category = "entertainment";


        include_once('../inc/upcoming_writers.php')
        ?>
    </main>
</div>

<?php include_once('../inc/footer.html') ?>

</body>

</html>