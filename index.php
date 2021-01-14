<!DOCTYPE html>
<html lang="en">
<?php
$title = "Newsly";
include_once('inc/header.php');
?>
<body>
<div class="container">
    <?php
    include_once('inc/navbar.html');
    ?>

    <main class="container mt-5">
        <!-- Big Featured Card -->
        <div
                class="p-4 p-md-5 mb-4 text-white rounded bg-dark main-news-card d-flex align-items-center"
        >
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">
                    Title of a longer featured news post
                </h1>
                <p class="lead my-3">
                    Multiple lines of text that form the lede, informing new readers
                    quickly and efficiently about what’s most interesting in this post’s
                    contents.
                </p>
                <p class="lead mb-0">
                    <a href="#" class="text-white fw-bold">Continue reading...</a>
                </p>
            </div>
        </div>

        <!-- Trending Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Trending Stories</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <?php
            include_once('functions/db_functions.php');
            include_once('config/config.php');
            $db_instance = new DBClass();
            $rows = $db_instance->getCategoryBasedNews($pdo, 'sports', 3);
            ?>
            <?php foreach ($rows as $row): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img
                                src="/newsly/assets/<?php echo $row->cover_image ?>"
                                class="card-img-top"
                                alt="..."
                        />
                        <div class="card-body">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $row->name; ?></strong>
                            <h5 class="card-title"><?php echo $row->title; ?></h5>
                            <div class="mb-1 text-muted">
                                <?php
                                $str_date = $row->created_at;
                                $date = new DateTime($str_date);
                                echo date_format($date, "M j, Y"); ?>
                            </div>
                            <p class="card-text">
                                <?php echo json_decode($row->content, true)['name']; ?>
                            </p>
                        </div>

                        <div class="card-body">
                            <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Politics Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">TPolitics</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Fashion Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Fashion</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Sports Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Sports</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Music Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Music</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Weather Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Weather</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Technology Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Tech News</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Business Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Business</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Entertainment Section -->
        <div class="row mb-2">
            <div
                    class="section-heading d-flex justify-content-between align-items-center py-4"
            >
                <h3 class="font-italic">Entertainment</h3>
                <a href="#" class="fw-bold"><h6>More Stories</h6></a>
            </div>

            <div class="col-md-4">
                <div class="card mb-4">
                    <img
                            src="./assets/home-image-2.jpg"
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
                            src="./assets/home-image-3.jpg"
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
                            src="./assets/home-image-4.jpg"
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

        <!-- Advertise -->
        <div class="advertise-container mt-4">
            <div class="row mb-2 mt-2 justify-content-center">
                <h3 class="pb-4 font-italic text-white">Advertise With Us</h3>

                <div class="col-md-5">
                    <div class="card mb-4">
                        <img
                                src="./assets/home-image-6.jpg"
                                class="card-img-top img-thumbnail rounded"
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
                <div class="col-md-5">
                    <div class="card mb-4">
                        <img
                                src="./assets/home-image-3.jpg"
                                class="card-img-top img-thumbnail rounded"
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
            </div>
        </div>

        <!-- Upcoming writers -->
        <div class="row my-4">
            <div class="col-md-8">
                <h3 class="pb-4 my-4 font-italic border-bottom">Upcoming Writers</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <img
                                    src="./assets/home-image-4.jpg"
                                    class="card-img-top"
                                    alt="..."
                            />
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>

                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse, saepe a! Enim tenetur in possimus eveniet, qui aliquid
                                    consequatur esse amet a nemo, soluta, sit quasi facilis
                                    recusandae adipisci praesentium? Quaerat optio animi ullam
                                    magnam placeat tempora, voluptatem commodi corporis.
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <img
                                    src="./assets/home-image-7.jpg"
                                    class="card-img-top"
                                    alt="..."
                            />
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Esse, saepe a! Enim tenetur in possimus eveniet, qui aliquid
                                    consequatur esse amet a nemo, soluta, sit quasi facilis
                                    recusandae adipisci praesentium? Quaerat optio animi ullam
                                    magnam placeat tempora, voluptatem commodi corporis.
                                </p>
                            </div>

                            <div class="card-body">
                                <a href="#" class="card-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">
                        Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras
                        mattis consectetur purus sit amet fermentum. Aenean lacinia
                        bibendum nulla sed consectetur.
                    </p>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">More Categories</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a class="link-primary" href="#">Politics</a></li>
                        <li><a class="link-primary" href="#">Fashion</a></li>
                        <li><a class="link-primary" href="#">Sports</a></li>
                        <li><a class="link-primary" href="#">Music</a></li>
                        <li><a class="link-primary" href="#">Weather</a></li>
                        <li><a class="link-primary" href="#">Technology</a></li>
                        <li><a class="link-primary" href="#">Business</a></li>
                        <li><a class="link-primary" href="#">Entertainment</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="font-italic">Find Us on Social!</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </main>
    <!-- /.container -->

    <?php include_once('inc/footer.html') ?>
</body>
</html>
