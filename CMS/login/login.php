<!-----------------
   
CMSHeroes - Login page
   
------------------>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <!-- Login stylesheet link -->
    
    <link rel="stylesheet" href="assets/css/login.css">
    
    <!-- Website icon link -->
    
    <link rel="icon" href="assets/img/icon/favicon.ico">
    
</head>

<body>
    <img class="headerBar" src="../assets/img/header/headerBar.png" />
    <div class="navbar">
        <ul>
            <li class="active">
                <a href="https://www.google.com" class="not-active"> <br></a>
            </li>
            <li>
                <a href="https://www.google.com" class="not-active"></a>
            </li>
            <li>
                <a href="https://www.google.com" class="not-active"></a>
            </li>
            <li>
                <a href="https://www.google.com" class="not-active"></a>
            </li>
        </ul>
    </div>
    <div class="login-form">
        <form method="POST" action="login.php">
            <div class="form-input">
                <input class="email" type="text" name="email" placeholder="email:">
            </div>
            <div class="form-password">
                <input class="password" type="password" name="password" placeholder="password:">
            </div>
            <input type="submit" name="login_btn" value="login" class="btn_login"><br/>
        </form>
    </div>
    <a href="about.php">
        <img class="headerMenuIcon1" src="../assets/img/header/mainMenu1.png"/>
        <img class="expander1" src="../assets/img/header/expand_white.png"/>
    </a>
    
    
    <a href="forum.php">
        <img class="headerMenuIcon2" src="../assets/img/header/mainMenu2.png"/>
        <img class="expander2" src="../assets/img/header/expand_white.png"/>
    </a>
    
    <a href="heroCreation.php">
        <img class="headerMenuIcon3" src="../assets/img/header/mainMenu3.png"/>
        <img class="expander3" src="../assets/img/header/expand_white.png"/>
    </a>
    
    <img class="headerLogo" src="../assets/img/header/headerLogo.png" />
    
    <img class="headerImage" src="../assets/img/header/headerBg.png" />
    
    <a href="../index.php">
       
        <img class="playNow_btn" src="../assets/img/header/playNow_bg.png">
    
    </a>
    
    <img class="speechBubble" src="../assets/img/registration/speechBubble3.png" />
    
    <img class="infoIcon" src="../assets/img/common/infoIcon.png" />
    
    <img class="wood_planks" src="../assets/img/registration/wood_planks.jpg" />
    
    <img class="background-form" src="../assets/img/registration/background-form.png" />
    
    <img class="bodyBg" src="../assets/img/background/siteBg.jpg" />
    
    <img class="bodyBg2" src="../assets/img/background/siteBg.jpg" />
    
    <img class="endbodyBar" src="../assets/img/footer/endbodyBar.png" />
    
    <img class="footerBar" src="../assets/img/footer/footerBar.png" />
    
    <img class="footerCopyrights" src="../assets/img/footer/footerCopyrights.PNG" />
    
    <img class="containerBox" src="../assets/img/common/containerbox.jpg" />
    
    <img class="containerboxBottom" src="../assets/img/common/containerboxBottom.jpg" />
</body>
<?php
    session_start();
    
        /* DATABASE CONNECT CREDENTIALS */
    
        $conn = mysqli_connect("localhost","root","","test_heroes");
        
            if(isset($_POST['login_btn']))
            {
                /* If you press the login button the site remembers your email and password for further queries */
                
                $email = ($_POST['email']);

                $password = ($_POST['password']);

                $password = md5($password); 

                $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";

                $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result)==1)
            {
                
                /* If the query gives atleast one result, the user logs in */
                
                $_SESSION['email'] = $email;
                
                $_SESSION['password'] = $password;
                
                $_SESSION['name']=$name;
                
                header("location:../index.php");
            }
            else
            {
                
                /* Warns the user that the account doesn't exist */
                
                $message = "Oops! There is no account with these login credentials!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                
            }
                
                
            }
?>
<?php
    
    
            if(isset($_POST['register_btn']))
            {
                $username = ($_POST['username']);
                
                $email = ($_POST['email']);
                
                $password = ($_POST['password']);
                
                $password2 = ($_POST['password2']);  
                
            if($password == $password2)
            {           
                $password = md5($password); 
                
                $query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
                
                mysqli_query($conn, $query);  
                
                
                $_SESSION['username'] = $username;
                
                $_SESSION['email'] = $email;
                
                header("location:../index.php");  
            }
            else
            {
                 echo "<script type='text/javascript'>alert('Oops! Looks like you haven't filled everything in yet!');</script>";
                 unset($_SESSION['message']); 
            }
                
            }

?>
    <div class="container">
        <img src="img/avatar_login_panel3.png"/>
            <form method="POST" action="login.php">

                <img class="reg-player-icon" src="../assets/img/icon/profileIcon.png"/>
                <div class="form-input">
                    <input type="text" name="username" class="username-reg" placeholder="Hero name" required>
                </div>
                <div class="form-input">
      
                    <input type="text" name="email" class="email-reg" placeholder="Email adress" required>
                </div>
                <div class="form-input">
              
                    <input type="password" name="password" class="password-reg" placeholder="Choose a password" required>
                </div>
                <div class="form-input">
                 
                    <input type="password" name="password2" class="password2-reg" placeholder="Confirm your password" required>
                </div>
               <input type="submit" name="register_btn" class="btn_register" value="Register"/><br/>
            </form>
        </div>
        
<footer>
    <p class="copyrightText">
       
        <!-- Copyright mark bottom -->
        
        &copy; 2017 ReVerb.it - CMSHeroes
    </p>
</footer>

</html>

<!-----------------
   
CMSHeroes - Login page
   
------------------>