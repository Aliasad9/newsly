<!DOCTYPE html>
<html lang="en">
<?php
$title = "Newsly";
include_once('inc/header.php');
?>


<body>

    <div class="container">
        <?php
        include_once('./inc/navbar.html');
        ?>
        <?php
        include_once('functions/db_functions.php');
        include_once('config/config.php');

        $db_instance = new DBClass();
        $rows = $db_instance->getSubCategoryBasedNewsR($pdo, 'trending', 3);
        $politics_news = $db_instance->getCategoryBasedNews($pdo, 'politics', 3);
        $fashion_news = $db_instance->getCategoryBasedNews($pdo, 'fashion', 3);
        $sports_news = $db_instance->getCategoryBasedNews($pdo, 'sports', 3);
        $music_news = $db_instance->getCategoryBasedNews($pdo, 'music', 3);
        $weather_news = $db_instance->getCategoryBasedNews($pdo, 'weather', 3);
        $tech_news = $db_instance->getCategoryBasedNews($pdo, 'technology', 3);
        $business_news = $db_instance->getCategoryBasedNews($pdo, 'business', 3);
        $entertainment_news = $db_instance->getCategoryBasedNews($pdo, 'entertainment', 3);
        $featured = $db_instance->getSubCategoryBasedNewsR($pdo, 'featured', 1);
        $random_category = $db_instance->getCategoriesR($pdo);

        ?>
        <main class="container">
            <!-- Big Featured Card -->
            <?php foreach ($featured as $news) : ?>
                <div style="background-image: url(<?php echo "/newsly/assets/" . $news->cover_image ?>);" class="text-white rounded-3 bg-dark main-news-card ">
                    <div class="wrapper p-4 p-md-5 d-flex align-items-center rounded-3">
                        <div class="col-md-6 px-0">
                            <h1 class="display-4 font-italic">
                                <?php echo substr($news->title, 0, 40) . "..." ?>
                            </h1>
                            <p class="lead my-3">

                                <?php
                                include_once('./functions/utils.php');
                                $htmlContent = json_decode($news->content, true)['data'];
                                echo substr(getUnformattedTextFromHtml($htmlContent), 0, 100) . "...";
                                ?>
                            </p>
                            <p class="lead mb-0">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id; ?>" class="text-white fw-bold">Continue reading...</a>
                            </p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
            <!-- Trending Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Trending Stories</h3>
                </div>



                <?php foreach ($rows as $row) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $row->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $row->name; ?></strong>
                                <h5 class="card-title"><?php echo $row->title; ?></h5>
                                <div class="mb-1 text-muted">
                                    <?php
                                    include_once('./functions/utils.php');
                                    echo getFormattedDateTime($row->created_at);
                                    ?>
                                </div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($row->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150);
                                    ?>
                                </p>
                            </div>
                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $row->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Politics Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Politics</h3>
                    <a href="./pages/politics_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>


                <?php foreach ($politics_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>


            </div>

            <!-- Fashion Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Fashion</h3>
                    <a href="./pages/fashion_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($fashion_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>

            <!-- Sports Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Sports</h3>
                    <a href="./pages/sports_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($sports_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Music Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Music</h3>
                    <a href="./pages/music_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($music_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>


                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>

            <!-- Weather Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Weather</h3>
                    <a href="./pages/weather_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>

                </div>
                <?php foreach ($weather_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Technology Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Tech News</h3>
                    <a href="./pages/technology_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($tech_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>


            <!-- Business Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Business</h3>
                    <a href="./pages/business_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($business_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>




            </div>

            <!-- Entertainment Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4 flex-wrap">
                    <h3 class="font-italic">Entertainment</h3>
                    <a href="./pages/entertainment_page.php" class="fw-bold">
                        <h6>More Stories</h6>
                    </a>
                </div>

                <?php foreach ($entertainment_news as $a_news) : ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="./assets/<?php echo $a_news->cover_image ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $a_news->name ?></strong>
                                <h5 class="card-title"><?php echo $a_news->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('./functions/utils.php');
                                                                echo getFormattedDateTime($a_news->created_at); ?></div>
                                <p class="card-text">
                                    <?php

                                    $htmlContent = json_decode($a_news->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "...";
                                    ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $a_news->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <?php
            include_once('./functions/db_functions.php');
            include_once('./config/config.php');

            $db_instance = new DBClass();
            $news_article = $db_instance->getCategoryBasedNewsR($pdo, $random_category->name, 2);
            ?>
            <div class="row my-4">
                <div class="col-md-8">
                    <h3 class="pb-4 my-4 font-italic border-bottom">Upcoming Writers</h3>

                    <div class="row">
                        <?php foreach ($news_article as $news) : ?>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <img src="./assets/<?php echo $news->cover_image ?>" class="card-img-top" alt="..." />
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $news->title ?></h3>

                                        <p class="card-text">
                                            <?php $htmlContent = json_decode($news->content, true)['data'];
                                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 150) . "..."; ?>
                                        </p>
                                    </div>

                                    <div class="card-body">
                                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id; ?>" class="card-link">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="font-italic">About</h4>
                        <p class="mb-0">
                            Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis
                            consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed
                            consectetur.
                        </p>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">More Categories</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a class="link-primary" href="/newsly/pages/politics_page.php">Politics</a></li>
                            <li><a class="link-primary" href="/newsly/pages/fashion_page.php">Fashion</a></li>
                            <li><a class="link-primary" href="/newsly/pages/sports_page.php">Sports</a></li>
                            <li><a class="link-primary" href="/newsly/pages/music_page.php">Music</a></li>
                            <li><a class="link-primary" href="/newsly/pages/weather_page.php">Weather</a></li>
                            <li><a class="link-primary" href="/newsly/pages/technology_page.php">Technology</a></li>
                            <li><a class="link-primary" href="/newsly/pages/business_page.php">Business</a></li>
                            <li><a class="link-primary" href="/newsly/pages/entertainment_page.php">Entertainment</a></li>
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="font-italic">Find Us on Social!</h4>
                        <ol class="list-unstyled">
                            <li><a href="https://github.com/codewithfahad/newsly">GitHub</a></li>
                            <li><a  href="/newsly/pages/contact_us.php">Contact Us</a></li>
                            <li><a  href="/newsly/pages/advertise_with_us.php">Advertise With Us</a></li>
                        </ol>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <?php include_once('inc/footer.html') ?>
</body>

</html>