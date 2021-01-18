<!DOCTYPE html>
<html lang="en">
<?php
$title = "Music";
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
        $news_article = $db_instance->getCategorySubCategory($pdo, 'music', 'featured', 1);
        include_once('../inc/featured_card.php');
        $trending_news = $db_instance->getCategorySubCategory($pdo, 'music', 'trending', 3);
        $hip_hop_news = $db_instance->getCategorySubCategory($pdo, 'music', 'Hip Hop', 3);
        $classical_news = $db_instance->getCategorySubCategory($pdo, 'music', 'Classical', 3);


        ?>


        <!-- Trending Music -->
        <div class="row mt-4">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Trending in Music</h3>
            </div>
            <?php for ($x = 0; $x <= 1; $x++): ?>
                <?php if ($x == 0): ?>
                    <div class="big-card col-lg-8 col-md-12">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $trending_news[$x]->cover_image; ?>" class="card-img-top"
                                 alt="..."/>
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success"><?php echo $trending_news[$x]->name; ?></strong>
                                <h5 class="card-title"><?php echo $trending_news[$x]->title; ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($trending_news[$x]->created_at); ?></div>
                                <p class="card-text">
                                    <?php $htmlContent = json_decode($trending_news[$x]->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 500) . "..."; ?>
                                </p>
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $trending_news[$x]->n_id; ?>"
                                   class="card-link">Read More</a>
                            </div>
                            <div class="card-body"></div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
            <div class="row col-lg-4 col-md-12 px-0 mx-0">
                <?php for ($x = 0; $x <= count($trending_news) - 1; $x++): ?>
                    <?php if ($x != 0): ?>
                        <div class="col-lg-12 col-md-6 mb-3">
                            <div class="card mb-4">
                                <img src="../assets/<?php echo $trending_news[$x]->cover_image; ?>" class="card-img-top"
                                     alt="..."/>
                                <div class="card-body">
                                    <strong class="d-inline-block mb-2 text-success"><?php echo $trending_news[$x]->name; ?></strong>
                                    <h5 class="card-title"><?php echo $trending_news[$x]->title; ?></h5>
                                    <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                        echo getFormattedDateTime($trending_news[$x]->created_at); ?></div>
                                    <p class="card-text">
                                        <?php $htmlContent = json_decode($trending_news[$x]->content, true)['data'];
                                        echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                                    </p>
                                </div>

                                <div class="card-body">
                                    <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $trending_news[$x]->n_id; ?>"
                                       class="card-link">Read More</a>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Classical -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Classical Music</h3>
            </div>
            <?php foreach ($classical_news as $c_news):?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/<?php echo $c_news->cover_image?>" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success"><?php echo $c_news->name?></strong>
                        <h5 class="card-title"><?php echo $c_news->title?></h5>
                        <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                            echo getFormattedDateTime($c_news->created_at); ?></div>
                        <p class="card-text">
                            <?php $htmlContent = json_decode($c_news->content, true)['data'];
                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $c_news->n_id; ?>" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>


        <!-- Hip Hop -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">Hip Hop</h3>
            </div>


            <div class="col-lg-6 col-md-6">
                <div class="card mb-4">
                    <img src="../assets/<?php echo $hip_hop_news[0]->cover_image ?>" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary"><?php echo $hip_hop_news[0]->name ?></strong>
                        <h5 class="card-title"><?php echo $hip_hop_news[0]->title ?></h5>
                        <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                            echo getFormattedDateTime($hip_hop_news[0]->created_at); ?></div>
                        <p class="card-text">
                            <?php $htmlContent = json_decode($hip_hop_news[0]->content, true)['data'];
                            echo substr(getUnformattedTextFromHtml($htmlContent), 0, 250) . "..."; ?>
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $hip_hop_news[0]->n_id; ?>"
                           class="card-link">Read More</a>
                    </div>
                </div>
            </div>

            <?php for ($x = 0; $x <= count($hip_hop_news) - 1; $x++): ?>
                <?php if ($x != 0): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card mb-4">
                            <img src="../assets/<?php echo $hip_hop_news[$x]->cover_image ?>" class="card-img-top" alt="..."/>
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary"><?php echo $hip_hop_news[$x]->name ?></strong>
                                <h5 class="card-title"><?php echo $hip_hop_news[$x]->title ?></h5>
                                <div class="mb-1 text-muted"><?php include_once('../functions/utils.php');
                                    echo getFormattedDateTime($hip_hop_news[$x]->created_at); ?></div>
                                <p class="card-text">
                                    <?php $htmlContent = json_decode($hip_hop_news[$x]->content, true)['data'];
                                    echo substr(getUnformattedTextFromHtml($htmlContent), 0, 400) . "..."; ?>
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $hip_hop_news[$x]->n_id; ?>" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endfor; ?>


        </div>

        <!-- All Stories Section -->
        <div class="row mb-2">
            <div class="section-heading d-flex justify-content-between align-items-center py-4">
                <h3 class="font-italic">All Stories</h3>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/music-image-2.jpg" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h5 class="card-title">Card title</h5>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Nostrum laboriosam
                            consectetur distinctio qui nulla sint iure
                            corrupti. Libero, architecto eveniet.
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="#" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/music-image-3.jpg" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-warning">Design</strong>
                        <h5 class="card-title">Card title</h5>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Nostrum laboriosam
                            consectetur distinctio qui nulla sint iure
                            corrupti. Libero, architecto eveniet.
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="#" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="../assets/music-image-5.jpg" class="card-img-top" alt="..."/>
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-primary">Design</strong>
                        <h5 class="card-title">Card title</h5>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="card-text">
                            Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Nostrum laboriosam
                            consectetur distinctio qui nulla sint iure
                            corrupti. Libero, architecto eveniet.
                        </p>
                    </div>

                    <div class="card-body">
                        <a href="#" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once('../inc/upcoming_writers.html')
        ?>
    </main>
</div>

<?php include_once('../inc/footer.html') ?>
</body>

</html>