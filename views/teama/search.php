


<h3 class="aziz">Result of search</h3>
<div class="blankSeparator"></div>
<div class="container">
  <div class="info">
    <? if($main):?>
  <?php foreach($main as $item): ?>
    <div class="one_third">
      <h2><?=$item['title'];?></h2>
      <p><?=$item['description'];?></p>
      <a href="?view=singleblog&id=<?=$item['id']?>" title="" class="buttonhome">Read more...</a> 
    </div>
    <?php endforeach; ?>
    <?php else: ?>
        <p>Crash in connection to DB</p>
<?php endif; ?> 
  </div>
</div>

<div class="product-table">
  <h2><a href="<?=PATH?>product/<?=$result_search[$i]['goods_id']?>"><?=$result_search[$i]['name']?></a></h2>
<div class="product-table-img-main">
    <div class="product-table-img">
    <a href="<?=PATH?>product/<?=$result_search[$i]['goods_id']?>"><img src="<?=PRODUCTIMG?><?=$result_search[$i]['img']?>" alt="" width="64" /></a>
    <div> <!-- Иконки -->
            <?php if($result_search[$i]['hits']) echo '<img src="' .TEMPLATE. 'images/ico-cat-lider.png" alt="лидеры продаж" />'; ?>
            <?php if($result_search[$i]['new']) echo '<img src="' .TEMPLATE. 'images/ico-cat-new.png" alt="новинка" />'; ?>
            <?php if($result_search[$i]['sale']) echo '<img src="' .TEMPLATE. 'images/ico-cat-sale.png" alt="распродажа" />'; ?>              
    </div> <!-- Иконки -->
  </div> <!-- .product-table-img -->
</div> <!-- .product-table-img-main -->
  <p class="cat-table-more"><a href="<?=PATH?>product/<?=$result_search[$i]['goods_id']?>">подробнее...</a></p>
  <p>Цена :  <span><?=$result_search[$i]['price']?></span></p>
  <a href="<?=PATH?>addtocart/<?=$result_search[$i]['goods_id']?>"><img class="addtocard-index" src="<?=TEMPLATE?>images/addcard-table.jpg" alt="Добавить в корзину" /></a>
</div> <!-- .product-table -->
