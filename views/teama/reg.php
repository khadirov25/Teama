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
    <form method="post" action="" enctype="multipart/form-data" >
        <table class="zakaz-data" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td style="color: blue;">*Логин</td>
                <td class="zakaz-inpt"><input type="text" name="login" value="<?=htmlspecialchars($_SESSION['reg']['login'])?>" /></td>
            </tr>
            <tr>
                <td style="color: blue;">*Пароль</td>
                <td  class="zakaz-inpt"><input id="password" type="password" name="pass" /></td>
                <span class="error" id="error_password"> *At least 5 charachters</span>
            </tr>
            <tr>
                <td style="color: blue;">*ФИО</td>
                    <td class="zakaz-inpt"><input  id="username" type="text" name="name" value="<?=htmlspecialchars($_SESSION['reg']['name'])?>" /></td>
                    <span class="error" id="error_username"> *At most 25 charachters</span> 
            </tr>
            <tr>
                <td style="color: blue;">*Е-маил</td>
                <td class="zakaz-inpt"><input id="email"  type="email" name="email" value="<?=htmlspecialchars($_SESSION['reg']['email'])?>" /></td>
                <span class="error" id="error_email"> *Enter a valid email</span> 

            </tr>
            <tr>
                <td style="color: blue;">*Телефон</td>
                <td  class="zakaz-inpt"><input id="phone" type="text" name="phone" placeholder="90-123-4567" value="<?=htmlspecialchars($_SESSION['reg']['phone'])?>" /></td>
                <span class="error" id="error_phone"> *Enter a valid phone number</span>  
            </tr>
            <tr>
                <td style="color: blue;">*Адрес</td>
                <td class="zakaz-inpt"><input type="text" name="address" value="<?=htmlspecialchars($_SESSION['reg']['addres'])?>" /></td>              
            </tr>

                        <tr>
                <td style="color: blue;">*Добавить аватарку</td>
                <td class="zakaz-txt"><input class="input-file uniform_on" name="baseimg" id="fileInput" type="file"></td>
            </tr>

    </table>
        <input type="submit" name="reg" value="Registration" />
    </form> 
    </div>
    <!-- end contactForm --> 
  </div>
</div>

