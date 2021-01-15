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
            include_once('../inc/featured_card.html')
            ?>


            <!-- Trending Music -->
            <div class="row mt-4">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Trending in Music</h3>
                </div>
                <div class="big-card col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <img src="../assets/music-image-1.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h5 class="card-title">Card title</h5>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Consequuntur totam fuga, obcaecati provident nam eligendi
                                corrupti laboriosam doloremque eum recusandae voluptatem unde
                                magni voluptate iusto beatae adipisci reiciendis neque fugiat
                                consectetur. Assumenda, temporibus. Eius, dignissimos. Officia
                                fugit ducimus repudiandae? Sapiente, esse quaerat. Labore,
                                perferendis iste explicabo laboriosam unde excepturi cum?
                            </p>
                            <a href="#" class="card-link">Read More</a>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
                <div class="row col-lg-4 col-md-12 px-0 mx-0">
                    <div class="col-lg-12 col-md-6 mb-3">
                        <div class="card mb-4">
                            <img src="../assets/music-image-3.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h5 class="card-title">Card title</h5>
                                <div class="mb-1 text-muted">Nov 11</div>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Nostrum laboriosam consectetur distinctio qui nulla sint
                                    iure corrupti. Libero, architecto eveniet.
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="card mb-4">
                            <img src="../assets/music-image-4.jpg" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success">Design</strong>
                                <h5 class="card-title">Card title</h5>
                                <div class="mb-1 text-muted">Nov 11</div>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Nostrum laboriosam consectetur distinctio qui nulla sint
                                    iure corrupti. Libero, architecto eveniet.
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Classical -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Classical Music</h3>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/music-image-2.jpg" class="card-img-top" alt="..." />
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
                        <img src="../assets/music-image-3.jpg" class="card-img-top" alt="..." />
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
                        <img src="../assets/music-image-5.jpg" class="card-img-top" alt="..." />
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


            <!-- Hip Hop -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">Hip Hop</h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/music-image-2.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary">Sports</strong>
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
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4">
                        <img src="../assets/music-image-3.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary">Sports</strong>
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
                <div class="col-lg-3 col-md-12">
                    <div class="card mb-4">
                        <img src="../assets/music-image-4.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-primary">Sports</strong>
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

            <!-- All Stories Section -->
            <div class="row mb-2">
                <div class="section-heading d-flex justify-content-between align-items-center py-4">
                    <h3 class="font-italic">All Stories</h3>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/music-image-2.jpg" class="card-img-top" alt="..." />
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
                        <img src="../assets/music-image-3.jpg" class="card-img-top" alt="..." />
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
                        <img src="../assets/music-image-5.jpg" class="card-img-top" alt="..." />
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