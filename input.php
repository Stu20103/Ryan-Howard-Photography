<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <title>RH Photography</title>
</head>
<body>
    <div class="nav">
        <div class="navbar">
            <ul> 
                <li><a class="logo"><img class="logo" src="images/Rhlogo.jpg" alt="Logo" ></a></li>
                <li><a class="navbartext" href="index.html">Home</a></li>
                <li><a class="navbartext" href="photos.html">Photos</a></li>
                <li><a class="navbartext" href="contact.html">Contact</a></li>
                <li><a class="last" href="about.html">About</a></li>
            </ul>    
        </div>
    </div>
    <!-- backstretch -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="./js/jquery.backstretch.min.js"></script>
    <script src="./js/contact.js"></script>
    <div class="text">
        <h1>Contact Ryan</h1>
        <form method ="POST" action="insertDB.php" class ="cf">
            <label for="input-name">Name</label>
            <input type ="text" minlength="2" name="name" required placeholder="Name" id="input-name">
            <br>
            <label for="input-email">Email</label>
            <input type ="email" required name="email" required placeholder="Email" id="input-email">
            <br>
            <label for="input-message">Message</label>
			<textarea name="message" required placeholder="Message"  id="input-message"> </textarea>   
            <br>
           <input type="submit" name="submit" value="Submit"  id="input-submit">
      </form>
    </div>
</body>
<script>
    $("#commentForm").validate();   
</script>   