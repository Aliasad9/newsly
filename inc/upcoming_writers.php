<!-- Upcoming writers -->
<?php
include_once('../functions/db_functions.php');
include_once('../config/config.php');

$db_instance = new DBClass();
$news_article = $db_instance->getCategoryBasedNewsR($pdo, $category, 2);
?>
<div class="row my-4">
  <div class="col-md-8">
    <h3 class="pb-4 my-4 font-italic border-bottom">Upcoming Writers</h3>

    <div class="row">
        <?php foreach ($news_article as $news):?>
      <div class="col-md-6">
        <div class="card mb-4">
          <img
            src="../assets/<?php echo $news->cover_image?>"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h3 class="card-title"><?php echo $news->title?></h3>

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
        <?php endforeach;?>

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
