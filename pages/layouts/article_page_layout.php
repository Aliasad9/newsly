<!DOCTYPE html>
<html lang="en">
<?php
$title="News Article";//TODO: replace it with news name
include_once('../../inc/header.php');
?>
  <body>
    <div class="container">
      <!-- Header -->
      <header class="news-header py-4">
        <div class="row flex-nowrap justify-content-center align-items-center">
          <div class="col-4 text-center">
            <a class="news-header-logo text-dark" href="../../index.php"
              >Newsly</a
            >
          </div>
        </div>
      </header>

      <!-- Navbar -->
      <div class="nav-scroller py-2 mb-3">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 link-secondary" href="#">Politics</a>
          <a class="p-2 link-secondary" href="#">Fashion</a>
          <a class="p-2 link-secondary" href="#">Sports</a>
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

      <!-- Big Featured Card -->
      <div class="mb-4 mt-3 text-white rounded bg-dark main-article-card"></div>

      <p class="text-muted fst-italic">
        Scenes from the Camp Nou as Messi lights up the atmosphere.
      </p>

      <!-- Article Header -->
      <div class="article-header">
        <h1 class="display-5">
          Messi scores 4 past Neuer to give the Catalans a crucial 5-0 win over
          Bayern
        </h1>
      </div>

      <!-- Author Info -->
      <div class="author-info row mt-5">
        <div class="info-container row mx-2">
          <div class="col-6 author-img"></div>
          <div
            class="col-6 author-details-sm d-flex flex-column justify-content-center"
          >
            <p class="fw-bold my-0 author-name">John Doe</p>
            <p class="text-muted my-0">
              Published on <span class="fw-bold">Jan 9, 2021</span>
            </p>
          </div>
        </div>
      </div>

      <hr size="3" class="mt-3" />

      <!-- Tag -->
      <p class="fst-italic fw-bold fs-6 my-1">
        Category: <span class="text-success">Sports</span>
      </p>
      <!-- Article Content -->
      <div class="content my-4">
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium
          at deleniti quam asperiores, ducimus recusandae? Fuga cumque molestiae
          consequuntur, dolores quidem dolorem ratione adipisci ex sit non unde
          nisi aliquid, quod facere? Debitis voluptas iure minus fugiat dolores
          a blanditiis optio perspiciatis dolorum beatae. Nihil quasi veritatis
          aspernatur repellendus a molestiae deleniti eligendi neque est facilis
          nemo, eveniet aliquid, magnam nulla illo perspiciatis similique. Sunt
          voluptatum atque libero tempora iste assumenda commodi, dolorum
          debitis quam eaque temporibus mollitia delectus laboriosam! Recusandae
          quis ratione, porro natus temporibus corporis voluptates cum. Ducimus
          assumenda similique distinctio eligendi. Assumenda numquam optio
          officia natus consectetur aspernatur fuga officiis, est hic,
          repellendus neque quidem mollitia. Illo animi sit quia blanditiis
          dolore, laudantium eum quae neque in.
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium
          at deleniti quam asperiores, ducimus recusandae? Fuga cumque molestiae
          consequuntur, dolores quidem dolorem ratione adipisci ex sit non unde
          nisi aliquid, quod facere? Debitis voluptas iure minus fugiat dolores
          a blanditiis optio perspiciatis dolorum beatae. Nihil quasi veritatis
          aspernatur repellendus a molestiae deleniti eligendi neque est facilis
          nemo, eveniet aliquid, magnam nulla illo perspiciatis similique. Sunt
          voluptatum atque libero tempora iste assumenda commodi, dolorum
          debitis quam eaque temporibus mollitia delectus laboriosam! Recusandae
          quis ratione, porro natus temporibus corporis voluptates cum. Ducimus
          assumenda similique distinctio eligendi. Assumenda numquam optio
          officia natus consectetur aspernatur fuga officiis, est hic,
          repellendus neque quidem mollitia. Illo animi sit quia blanditiis
          dolore, laudantium eum quae neque in.
        </p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat
          accusantium autem, nobis possimus ducimus dolore vel, sed rem
          inventore modi harum amet cum, cupiditate consequatur magni nisi
          impedit veniam nam rerum saepe provident. Tempore placeat eligendi
          earum quae, accusantium, cum adipisci perspiciatis at nisi illo
          accusamus a iusto tenetur alias voluptate modi magni dolorem quasi
          molestias consectetur fugiat ut nostrum! Dolores blanditiis eaque est
          nisi veniam autem, optio tempora beatae aspernatur sed? Vel hic soluta
          adipisci corrupti ratione voluptatem laborum error odit eum repellat
          eaque officia, fuga at non perferendis, blanditiis nulla. Atque
          consequatur a voluptate numquam blanditiis sit quas.
        </p>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis
          asperiores maxime tempore commodi mollitia! Quo veniam fugit atque,
          aliquid quidem corporis dolor accusantium voluptates pariatur facere,
          repellat quas ipsum ut, assumenda dolores! Assumenda exercitationem
          debitis voluptatem fugit. Eos sint qui dolores laboriosam impedit
          aperiam id, suscipit quas aut, autem fugiat! Omnis perferendis quae
          quas quod voluptatem excepturi reiciendis nobis earum non sunt esse
          debitis animi eos officiis, minima labore totam ullam voluptatum
          accusamus. Placeat adipisci ut, reprehenderit sapiente architecto
          veritatis!
        </p>
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
