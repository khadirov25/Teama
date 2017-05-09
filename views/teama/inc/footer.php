<!--Footer ==================================================
================================================== -->
<div id="footer">
  <div class="container footer">
    <div class="one_fourth">
      <h3>Latest Tweets</h3>
      <div id="tweets">
                <form style="border:none; list-style-type: none;" method="get">
            <input type="hidden" name="view" value="search" />
      <li><input type="text" name="search" id="quickquery" placeholder="Find?" /></li>
        <script type="text/javascript">
           //<![CDATA[
            placeholderSetup('quickquery');
            //]]>SELECT title
                    FROM home_news
                        WHERE MATCH(title) AGAINST('{$search}*' IN BOOLEAN MODE)
        </script>
      <li><input type="submit" value="Search..." /></li>


    </form> 
    <a href="http://s11.flagcounter.com/more/IUm"><img src="http://s11.flagcounter.com/count2/IUm/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
      </div>
    </div>
    <div class="one_fourth">
      <h3>list of projects</h3>
      <ul>
        <li class="lines"><a href="#" title="">I_P web site</a></li>
        <li class="lines"><a href="#" class="">I_P web site</a></li>
        <li class="lines"><a href="#" class="">I_P web site</a></li>
        <li class="lines"><a href="#" class=""> I_P web site</a></li>
        <li class="lines"><a href="#" class="">I_P web site</a></li>
      </ul>
    </div>
    <div class="one_fourth">
      <h3>Archive</h3>
      <ul>
        <li class="lines"><a href="#" class=""> May 7th</a></li>
        <li class="lines"><a href="#" class="">May 7th</a></li>
        <li class="lines"><a href="#" class="">May 7th</a></li>
        <li class="lines"><a href="#" class="">May 7th</a></li>
        <li class="lines"><a href="#" class="">May 7th</a></li>
      </ul>
    </div>
    <div class="one_fourth lastcolumn">
      <h3>About </h3>
      <p>The team memebers </p>
      <p>Visit <a href="?view=about" rel="nofollow">About us</a> find more interesting things.</p>
    </div>
  </div>
  <!-- container ends here --> 
</div>
<!-- footer ends here --> 
<!-- Copyright ==================================================
================================================== -->

<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<script src="js/validate.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 

<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</head>
</body>
</html>