<div class="container">
  <div class="blankSeparator"></div>
  <!-- Contact Sidebar ==================================================
================================================== -->
 <h2 style="color:green;  ">
   <?php
    if(isset($_SESSION['reg']['res'])){
        echo $_SESSION['reg']['res'];
        unset($_SESSION['reg']);
    }
    ?>
 </h2>         
  <!-- one_third ends here -->
  <div class="two_third lastcolumn contact1">
    <div id="contactForm">
      <h2>Registration</h2>
      <div class="sepContainer"></div>
                <div class="authform">
                <?php if(!$_SESSION['auth']['user']): ?>
                <form method="post" action="">
                    <label style="color: blue;">Логин: </label><br />
                    <input type="text" name="login" id="login" /><br />
                    <label style="color: blue;">Пароль: </label><br />
                    <input type="password" name="pass" id="pass" /><br /><br />     
                     <input type="checkbox" name="remember" id="remember"/>
                    <input type="submit" name="auth" value="Войти" />
              
                    <p class="link"><a href="javascript:void(0);">Забыли?</a></p>
                    <p class="link"><a href="?view=reg">Регистрация</a></p>
                </form>
                <?php
                    if(isset($_SESSION['auth']['error'])){
                        echo '<div class="error">' .$_SESSION['auth']['error']. '</div>';
                        unset($_SESSION['auth']);
                    }
                ?>
                <?php else:?>

                    <p>Добро пожаловать <br><?=htmlspecialchars($_SESSION['auth']['user'])?></p>
                    <img src="images/ava/40.jpg" alt="" style="height: 150px; width: 150px;">
                    <a href="?do=logout">Выход</a>
                <?php endif; ?>
            </div> <!-- .authform -->   
    </div>
    <!-- end contactForm --> 
  </div>
</div>
<div class="blankSeparator2"></div>
