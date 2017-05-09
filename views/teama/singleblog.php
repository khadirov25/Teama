
<!-- Single Blog Content Part ==================================================
================================================== -->
<div class="blankSeparator"></div>
<div class="container singleblog"> 
  <!-- Blog Post ==================================================
================================================== -->
  <div class="two_third">
    <section class="postone">
      <? if($singleblog):?>
      <h2><?=$singleblog['title']?></h2>
      <p class="meta"> <span class="left">Date: <strong><?=$singleblog['date']?></strong></span> <span class="left">posted by <strong><?=$singleblog['author']?></strong></span><span class="left tags">on <a href="#" rel="tag">photography</a>, <a href="#" rel="tag">Artistic</a>, <a href="#" rel="tag">Beauty and Art</a></span> <span class="left comment"> <a href="#" title="">46 Comments</a></span> </p>
      <a href="images/portfolio/bigsize.jpg" class="prettyPhoto[gal]"><img src="<?=$singleblog['img']?>" alt=""/></a>
     <p><?=$singleblog['text']?></p>
   
    </section>
   <?php
    if(isset($_SESSION['res'])){
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    }
    ?>
    <!-- Blog Comments ==================================================
================================================== -->
    <section class="comments">
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
      <h2>Comments</h2>
      <div class="sepContainer2"></div>
      <div class="blankSeparator"></div>
      <div class="boxtwosep"></div>
      <div id="comments">
        <ul id="articleCommentList">
        
           <?php foreach($comment as $item): ?> 
          <li>
            <div class="commentMeta">
              <p><?=$item['date']?></p>
              <img class="user" src="images/socials/dribbble.png" alt="Default user icon" /> </div>
            <!-- end commentMeta -->
            <div class="commentBody">
              <h3><a href="#"><?=$item[author];?></a></h3>
              <p><?=$item['text']?></p>
            <!-- end commentBody --> 
          </li>
          <?php endforeach; ?>

        
        </ul>
      </div>
      <!-- end Comments --> 
    </section>
    <!-- Blog Contact ==================================================
================================================== -->
    <?php if(isset($_SESSION['auth']['user'])): ?>
    <div id="contactForm">
      <h2>Leave a comment</h2>
      <form action="" method="post"  name="contact" id="contact_form">
        <div class="message">
          <label for="message">Your Message:</label>
          <p> Please enter your question</p>
          <textarea id="message" name="text" rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
          <input type="submit" value="Send" id="submit" name="add_comm" class="submit_btn float_l" />
        <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
        </div>
      </form>
    </div>
    <?else:?>
    <p>Не зарегистрованным пользавателям писать комментарии нельзя.</p>
<? endif;?>
    <!-- end contactForm --> 
  </div>



      
  <!-- two_third ends here --> 
  <!-- Blog Sidebar ==================================================
================================================== -->
  <div class="one_third lastcolumn sidebar">
    <section class="first">
      <h3>Which Technologies we can use</h3>
      <div class="boxtwosep"></div>
      <ul class="blogList">
        <li class="activenavigationItem"><a href="http://www.javascript.com" target="_blank">Java-Script</a></li>
        <li class="activenavigationItem"><a href="https://www.w3schools.com/css/css3_intro.asp" target="_blank">Css3</a></li>
        <li class="activenavigationItem">HTML5</li>
        <li class="activenavigationItem">PHP</li>
        <li class="activenavigationItem"><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
        <li class="activenavigationItem"> /li>
        <li class="activenavigationItem">Blog - Active Item</li>
        <li class="activenavigationItem">Blog - Active Item</li>
        <li class="activenavigationItem">Blog - Active Item</li>
      </ul>
    </section>

  </div>
  <!-- one_third ends here --> 
</div>
<!-- container ends here -->

<div class="blankSeparator2"></div>

<?php endif; ?>