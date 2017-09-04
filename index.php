<!-----------------
   
CMSHeroes - Index page
   
------------------>
    

<?php

    /* To remember your email, password */

    session_start();

    /* DATABASE CONNECT CREDENTIALS */

    $conn = mysqli_connect("localhost","root","","test_heroes");
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <!-- Main stylesheet link -->
    
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- Website icon link -->
    
    <link rel="icon" href="assets/img/icon/favicon.ico">
    
</head>

<body>
   
    <!-- Logout button -->
    
    <a href="login/logout.php" name="logout">
        <p class="logout_button">LOGOUT</p>
    </a>
    
    <img class="headerBar" src="assets/img/header/headerBar.png" />
    
    <img class="insideheaderBar" src="assets/img/header/insideheaderBar.jpg"/>
    
    <img class="profileIcon" src="assets/img/icon/profileIcon.png" />
    
    <div class="navbar">
        <ul>
            <li class="active">
                <a href="main.php" class="not-active"></a>
            </li>
            <li>
                <a href="https://www.google.com" class="not-active"></a>
            </li>
            <li>
                <a href="https://www.google.com" class="not-active"></a>
            </li>
            <li>
                <a href="#about" class="not-active"></a>
            </li>
        </ul>
    </div>
    
    <a href="about.php">
        <img class="headerMenuIcon1" src="assets/img/header/mainMenu1.png"/>
        <img class="expander1" src="assets/img/header/expand_white.png"/>
    </a>
    
    
    <a href="forum.php">
        <img class="headerMenuIcon2" src="assets/img/header/mainMenu2.png"/>
        <img class="expander2" src="assets/img/header/expand_white.png"/>
    </a>
    
    <a href="heroCreation.php">
        <img class="headerMenuIcon3" src="assets/img/header/mainMenu3.png"/>
        <img class="expander3" src="assets/img/header/expand_white.png"/>
    </a>
    
    <img class="headerLogo" src="assets/img/header/headerLogo.png" />
    
    <img class="headerImage" src="assets/img/header/headerBg.png" />
    
    <a href="index.php">
       
        <img class="playNow_btn" src="assets/img/header/playNow_bg.png">
    
    </a>
    
    <img class="bodyBg" src="assets/img/background/siteBg.jpg" />
    
    <img class="bodyBg2" src="assets/img/background/siteBg.jpg" />
    
    <img class="containerBox" src="assets/img/common/containerbox.jpg" />
    
    <img class="containerboxBottom" src="assets/img/common/containerboxBottom.jpg" />
    
    <img class="endbodyBar" src="assets/img/footer/endbodyBar.png" />
    
    <img class="footerBar" src="assets/img/footer/footerBar.png" />
    
    <img class="footerCopyrights" src="assets/img/footer/footerCopyrights.PNG" />
</body>
<?php 
    
    /* Remembers the session email, and searches for the username. */
    
    $email = $_SESSION['email'];
    
    $query = "SELECT username FROM users WHERE email = '$email'";

    $result = mysqli_query($conn,$query);

    if ($result = $conn->query($query)) 
    {
        while ($row = $result->fetch_row())
        {
            
            $username = implode($row);
            $user_name = ucfirst($username);
    
            echo ("<p class='username'>". $user_name . "</p>");
        }
    }
    
    
    if (!isset($_SESSION['email']))
    {
        
    /* If the user is not logged in you cannot view the index */
        
    header("location:login/login.php");
    }
    
    /* If the user is logged in you will be able to see the email in a paragraph */
    
    if (isset($_SESSION['email']))
    {
        $email_adress = $_SESSION['email'];
        echo ("<p class='email'>". $email_adress . "</p>");

    }


?>
<footer>
    <p class="copyrightText">
       
        <!-- Copyright mark bottom -->
        
        &copy; 2017 ReVerb.it - CMSHeroes
    </p>
</footer>

</html>

<!-----------------
   
CMSHeroes - Index page
   
------------------>

