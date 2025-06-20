<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtFlow - Home</title>
    
    <script src="https://kit.fontawesome.com/17922330f3.js" crossorigin="anonymous"></script>
    <style media="screen">
       @import url('https://fonts.googleapis.com/css2?family=Allura&family=Josefin+Sans&display=swap');
        /* Reset default browser styles */
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

/* Global styles */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

/* Header styles */
    header {
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px 0;
    }

    header h1 {
        font-size: 50px;
        color: #333;
        font-family: 'Allura', cursive;
    }

    nav ul {
        list-style-type: none;
        text-align: center;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul li a {
        text-decoration: none;
        color: #333;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    nav ul li a:hover {
        color: #777;
    }

/* Hero section styles */
    .hero {
        background-image: url(images/anna-.jpg);
        background-size: cover;
        color: black;
        padding: 100px 0;
    }

    .hero h2 {
        font-size: 48px;
        margin-bottom: 20px;
        color: white;
        font-family: 'Josefin Sans';
        font-style: bold;
    }

    .hero p {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 20px;
        margin-bottom: 30px;
    }

/* Featured section styles */
    .featured {
        background-color: #f9f9f9;
        padding: 50px 0;
    }

    .featured h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

/* About Us section styles */   
    .about-us {
        padding: 50px 0;
    }

    .about-us h2 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .about-us p {
        font-size: 18px;
        margin-bottom: 20px;
    }

/* Footer styles */
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
    }

    footer p {
        font-size: 16px;
        text-align: center;
    }
	.containerr{
		width: 90%;
		padding: 20px;
		margin: 100px auto;	 
		display: flex;
		flex-direction: row;
		justify-content: center;
        
	}
	
	.box{
		width: 250px;
		margin: 0 10px;
		box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
		transition: 1s;

	}
	.box img{
		display: block;
		width:100%;
		border-radius: 5px;
	}
	.box:hover{
		transform: scale(1.3);
		z-index: 2;
	}
    </style>
</head>
</head>
<body>
    <header>
        <div class="container">
            <h1>ArtFlow</h1>
            <nav>
                
                <ul>
                    <li><a href="home.html"> Home </a></li>
                    <li><a href="#" id="aboutLink"> About </a></li>
                    <li><a href="index.php"> Shop </a></li>
                    <li><a href="contact.html"> Contact </a></li>
                    <li><a href="#">(USER) <?php echo $_SESSION['username']; ?> </a></li>
                    <li><a href="register.html"> Sign-up </a></li>
                </ul>
            </nav>
        </div>
        
    </header>

    <section class="hero">
        <div class="container">
            <h2>Discover ArtFlow</h2>
            <hr>
            <br>
            <p>An exclusive online platform to explore and purchase exquisite artwork.</p>
            
        </div>
    </section>
    <br>

    <h2>FEATURED ARTWORKS</h2>
    

    <div class="containerr">
		<div class="box">
			<img src="images/14.jpg">
		</div>
		<div class="box">
			<img src="images/15.jpg">
		</div>
		<div class="box">
			<img src="images/13.jpg">
		</div>
		<div class="box">
			<img src="images/16.jpg">
		</div>
		<div class="box">
			<img src="images/17.jpg">
		</div>

        
	</div>


    <section id="about">
        <div class="container">
            <h2>ABOUT US</h2>
            <p>Welcome to ArtFlow, your premier destination for discovering and acquiring exceptional artwork from talented artists around the globe.</p>
            <p>At ArtFlow, we believe that art has the power to inspire, provoke thought, and enrich lives. Our mission is to connect art lovers with extraordinary pieces that resonate with their unique sensibilities.</p>
            <p>With a curated selection of paintings, sculptures, photography, and more, ArtFlow offers an unparalleled shopping experience tailored to discerning collectors and enthusiasts alike.</p>
            <p>Explore our gallery, immerse yourself in the beauty of art, and embark on a journey of artistic discovery with ArtFlow.</p>
        </div>
    </section>
    <script>
        // Get the link to About Us
        const aboutLink = document.getElementById('aboutLink'); 
        // Get the section about us
        const aboutSection = document.getElementById('about');
      
        // Add event listener to About Us link
        aboutLink.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent default behavior of link click
          aboutSection.scrollIntoView({ behavior: 'smooth' }); // Scroll to about section smoothly
        });
      </script>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 ArtFlow. All rights reserved.</p>
            
    </footer>
</body>
</html>
