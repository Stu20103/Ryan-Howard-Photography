<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <script src="https://kit.fontawesome.com/07306f7f58.js" crossorigin="anonymous"></script>
    <title>RH Photography</title>
</head>
<body>
    <div class="nav">
        <div class="navbar">
            <ul> 
                <li><a class="logo" href="index.html"><img class="logo" src="images/Rhlogo.jpg" alt="Logo" ></a></li>
                <li><a class="navbartext" href="index.html">Home</a></li>
                <li><a class="navbartext" href="photos.html">Photos</a></li>
                <li><a class="navbartext" href="about.html">About</a></li>
                <li><a class="last" href="input.php">Contact</a></li>
            </ul>    
        </div>
        <div id="phone"> 
            <a class="logo" href="index.html"><img class="logo" src="images/Rhlogo.jpg" alt="Logo" ></a>
        <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul class="mobile-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="photos.html">Photos</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="input.html">Contact</a></li>
            </ul>
          </div>
          </div>
    </div>
    <!-- backstretch -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="./js/jquery.backstretch.min.js"></script>
    <script src="./js/contact.js"></script>
    <div class="text">
        <h1>Contact Ryan</h1>
        <p>Ryan's phone number: 0800 83838<br>
            Ryan's email: rhphotography@gmail.com <br>
            Ryan's po box: 565 S. Mason Rd Unit #391 Katy, TX 77450
        </p>
        <form method ="POST" action="insertDB.php">
            <label for="input-name">Name:</label>
            <input type ="text" minlength="2" name="name" required placeholder="Name" id="input-name">                        
            <a href="./index.html"><img class="formLogo" src="./Images/cirgo.png"></a>
            <br>
            <label for="input-email">Email :</label>
            <input type ="email" required name="email" required placeholder="Email" id="input-email">            
            <br>
            <label for="input-message">Message:</label>
			<textarea name="message" required placeholder="Message"  id="input-message"> </textarea>   
            <br>
           <input type="submit" name="submit" value="Submit"  id="input-submit">
      </form>
    </div>
    <div class ='socials'>
        <div class="media">
            <ul>
                <li><a href="https://m.facebook.com/rhphotography09/photos/?ref=page_internal"><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/__rhphotography/?hl=en"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://github.com/Stu20103/Rh-Photography"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="https://twitter.com/hashtag/rhphotography"><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href="https://www.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
        </div>
    </div>

</body>
<script>
    $("#commentForm").validate();   
</script>   