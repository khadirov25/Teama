<!-- Portfolio Project Content Part ==================================================
================================================== -->
<div class="blankSeparator"></div>
  <? if($pages):?>
  <?php foreach($pages as $news): ?>

<div class="container portfolio">
  <div class="two_third">

      <img src="images/java/<?=$news['img']?>" alt="" />

  </div>

  <div class="one_third lastcolumn">
    <h2><?=$news['title']?></h2>
    <p><?=$news['description']?></p>
    <p class="portfolio"> <a href="?view=single_page&id=<?=$news['id']?>">Visit Website</a></p>
  </div>
</div>
    <?php endforeach; ?>
    <?php else: ?>
        <p>Crash in connection to DB</p>
<?php endif; ?> 
<!-- Portfolio Pagination ==================================================
================================================== -->

<!-- end centerContainer -->

<div class="blankSeparator1"></div>
