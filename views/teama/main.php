<!-- Home Content Part - Slider ==================================================
================================================== -->
<h3 class="aziz">News</h3>
<!-- Home Content Part - Box One ==================================================
================================================== -->
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
<!-- container ends here --> 
<!-- Home Content Part - Box Two ==================================================
================================================== -->
<div class="container clients">
  <div class="sepContainer"></div>
  <h2>Our Clients</h2>
<div class="one_sixth"> <img src="images/img1.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/img2.png" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/img3.jpg" alt=""/> </div>
  <!-- end one_sixth -->
 <div class="one_sixth"> <img src="images/img.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth"> <img src="images/img5.jpg" alt=""/> </div>
  <!-- end one_sixth -->
  <div class="one_sixth lastcolumn"> <img src="images/client6.jpg" alt=""/> </div>
  <!-- end one_sixth lastCol --> 
</div>
<!-- end container --> 
<!-- Home Content Part - Box Three ==================================================
================================================== -->
<div class="container boxthree">
  <div class="sepContainer1"><!-- --></div>
  <div class="blankSeparator"></div>
  <div class="one_third">
    <section class="boxthreeleft"> <img src="images/8.png" alt=""/>
      <h3>Railway system</h3>
      <p>As group work, we developed railway system by using web languages.</p>
      <!-- <a class ="simple" href="#">+ Learn more</a> </section> -->
  </div>
  <!-- one-third column ends here -->
  <div class="one_third">
    <section class="boxthreecenter"> <img src="images/9.png" alt=""/>
      <h3>Tasking System</h3>
      <p>In third semester,from Java programing course ,We developed University tasking system.By using system, the potensial of working system can be improved .the program was found one of top tens in sophomore students of IUT.</p>
      <!-- <a class ="simple" href="#">+ Learn more</a> </section> -->
  </div>
  <!-- one-third column ends here -->
  <div class="one_third lastcolumn">
    <section class="boxthreeright"> <img src="images/3.jpg" alt=""/>
      <h3>Online Tech Shop</h3>
      <p> we developed  this tech shop web site .The aim website was to recieve online requests from customers and to show the prices .They would even sell their phones by  registration. The prices and any data inserted by admin</p>
      <!-- <a class ="simple" href="#">+ Learn more</a> </section> -->
  </div>
  <!-- one-third column ends here --> 
</div>
<!-- container ends here -->
<div class="blankSeparator1"></div>