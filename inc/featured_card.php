<?php foreach ($news_article as $news):?>
<div
  class="mb-4 text-white rounded-3 bg-dark main-sports-card" style="background-image: url(<?php echo "../assets/".$news->cover_image?>)"
>
  <div class="wrapper rounded-3 p-4 p-md-5 d-flex align-items-end">
    <div class="col-md-6 px-0">

      <h1 class="display-4 font-italic"><?php echo substr($news->title, 0, 50)."...";?></h1>
      <p class="lead my-3">
        <?php
        include_once ('../functions/utils.php');
        $htmlContent =json_decode($news->content, true)['data'];
        echo substr(getUnformattedTextFromHtml($htmlContent), 0, 200). "...";
        ?>
      </p>
      <p class="lead mb-0">
        <a href="/newsly/pages/layouts/article_page_layout.php?id=<?php echo $news->n_id;?>" class="text-white fw-bold">Continue reading...</a>
      </p>
    </div>
  </div>
</div>
<?php endforeach;?>