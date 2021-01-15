<!DOCTYPE html>
<html lang="en">
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once('../../functions/db_functions.php');
    include_once('../../config/config.php');
    $db_instance = new DBClass();
    $result = $db_instance->getNewsById($pdo, $id);
    if ($result){
        $title = $result->title;//TODO: replace it with news name
        include_once('../../inc/header.php');
    }else{
        header('Location: ../../index.php');
    }
} else {
    header('Location: ../../index.php');
}


?>
<body>
<div class="container">
    <?php
    include_once('../../inc/navbar.html')
    ?>

    <!-- Big Featured Card -->
    <div class="mb-4 mt-3 text-white rounded bg-dark main-article-card"
         style="background-image: url(<?php echo "../../assets/" . $result->cover_image ?>)"></div>

    <p class="text-muted fst-italic"><?php echo $result->image_caption; ?></p>

    <!-- Article Header -->
    <div class="article-header">
        <h1 class="display-5">
            <?php
            echo $result->title
            ?>
        </h1>
    </div>

    <!-- Author Info -->
    <div class="author-info row mt-5">
        <div class="info-container row mx-2">
            <div class="col-6 author-img"
                 style="background-image: url(<?php echo "../../assets/" . $result->author_image ?>)"></div>
            <div
                    class="col-6 author-details-sm d-flex flex-column justify-content-center"
            >
                <p class="fw-bold my-0 author-name"><?php echo $result->author_name; ?></p>
                <p class="text-muted my-0">
                    Published on <span class="fw-bold"><?php
                        include_once('../../functions/utils.php');
                        echo getFormattedDateTime($result->created_at);
                        ?></span>
                </p>
            </div>
        </div>
    </div>

    <hr size="3" class="mt-3"/>

    <!-- Tag -->
    <p class="fst-italic fw-bold fs-6 my-1">
        Category: <span class="text-success"><?php echo $result->name?></span>
    </p>
    <!-- Article Content -->
    <div class="content my-4">
        <?php
        $htmlContent =json_decode($result->content, true)['data'];
        echo $htmlContent;
        ?>

    </div>

    <!-- More From Sports -->
    <div class="row mb-4">
        <div
                class="section-heading d-flex justify-content-between align-items-center py-4"
        >
            <h3 class="font-italic">More From Sports</h3>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <img
                        src="../../assets/sports-image-2.jpg"
                        class="card-img-top"
                        alt="..."
                />
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nostrum laboriosam consectetur distinctio qui nulla sint iure
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
                <img
                        src="../../assets/sports-image-3.jpg"
                        class="card-img-top"
                        alt="..."
                />
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-warning">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nostrum laboriosam consectetur distinctio qui nulla sint iure
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
                <img
                        src="../../assets/sports-image-5.jpg"
                        class="card-img-top"
                        alt="..."
                />
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-primary">Design</strong>
                    <h5 class="card-title">Card title</h5>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nostrum laboriosam consectetur distinctio qui nulla sint iure
                        corrupti. Libero, architecto eveniet.
                    </p>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../../inc/footer.html') ?>

</body>
</html>
