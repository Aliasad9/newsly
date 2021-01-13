<!DOCTYPE html>
<html lang="en">
<?php
$title="Newsly";
include_once('inc/header.php');
?>
  <body>
    <div class="container">
      <!-- Header -->
      <header class="news-header py-4">
        <div class="row flex-nowrap justify-content-center align-items-center">
          <div class="col-4 text-center">
            <a class="news-header-logo text-dark" href="./index.php">Newsly</a>
          </div>
        </div>
      </header>

      <!-- Navbar -->
      <div class="nav-scroller py-2 mb-3">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 link-secondary" href="#">Politics</a>
          <a class="p-2 link-secondary" href="#">Fashion</a>
          <a class="p-2 link-secondary" href="./pages/sports_page.php"
            >Sports</a
          >
          <a class="p-2 link-secondary" href="#">Music</a>
          <a class="p-2 link-secondary" href="#">Weather</a>
          <a class="p-2 link-secondary" href="#">Technology</a>
          <a class="p-2 link-secondary" href="#">Business</a>
          <a class="p-2 link-secondary" href="#">Entertainment</a>
          <!-- <a class="p-2 link-secondary" href="#">Science</a>
          <a class="p-2 link-secondary" href="#">Health</a>
          <a class="p-2 link-secondary" href="#">Style</a>
          <a class="p-2 link-secondary" href="#">Travel</a> -->
        </nav>
      </div>
    </div>

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

    <!-- Footer -->
    <footer class="container-fluid px-5 py-5 footer">
      <div class="row footer-container">
        <div class="col-12 col-md">
          <span class="display-6">Newsly</span>
          <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Categories</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Politics</a></li>
            <li><a class="link-secondary" href="#">Fashion</a></li>
            <li><a class="link-secondary" href="#">Sports</a></li>
            <li><a class="link-secondary" href="#">Music</a></li>
            <li><a class="link-secondary" href="#">Weather</a></li>
            <li><a class="link-secondary" href="#">Technology</a></li>
            <li><a class="link-secondary" href="#">Business</a></li>
            <li><a class="link-secondary" href="#">Entertainment</a></li>
          </ul>
        </div>

        <div class="col-6 col-md">
          <h5>Developers</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Fahad</a></li>
            <li><a class="link-secondary" href="#">Ali</a></li>
            <li><a class="link-secondary" href="#">Ahmed</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Team</a></li>
            <li><a class="link-secondary" href="#">About</a></li>
            <li><a class="link-secondary" href="#">Privacy</a></li>
            <li><a class="link-secondary" href="#">Terms</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Social</h5>
          <ol class="list-unstyled">
            <li><a class="link-secondary" href="#">GitHub</a></li>
            <li><a class="link-secondary" href="#">Twitter</a></li>
            <li><a class="link-secondary" href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </footer>
  </body>
</html>
