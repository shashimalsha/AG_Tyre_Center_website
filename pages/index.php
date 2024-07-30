
<html>
<head>
    <title>ag tyre</title>


    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="boostrap-5.0.2-dist/css/boostrap.min.css">

    <!--css file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <!--header section starts-->
     <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">AG<span>Tyre.</span></a>
                <nav class="nav">
                <a href="" onclick="loginclick()"  class="link-btn">Log In</a>
                </nav>
            </div>
        </div>

    </header>
    <!--header section ends-->
 
    <!--home section starts-->
    
   <section class="home" id="home">
        <div class="container">
            
            <video autoplay loop muted plays-inline class="homevideo">
                <source src="homevideo.mp4" type="video/mp4">
            </video>
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Get Your Tires Right!</h3>
                    <p>Your tires are our first priority. AG Tire center treats your tires with utmost care and precision. Our experienced technicians offer their valued services and educate our clients about their tires. We offer high quality tyres (tires), batteries and accessories from well renowned and premium brands. Discover our commitment towards delivering the best possible solutions for your needs.</p>
                    <a href="login.php" class="link-btn" onclick="loginclick()">Get started</a>
                </div>
            </div>
        </div>
    </section>

    <!--home section ends-->

    <!--features section starts-->
    <section class="features">
        <h1 class="heading">Our <span>Features</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="make appointment (2).png" alt="">
                <h3>Take a tour with products</h3>
                <a href="login.php" class="readmore-btn">read more</a>
            </div>

            <div class="box">
                <img src="make appointment (3).png" alt="">
                <h3>Send a message</h3>
                <a href="login.php" class="readmore-btn">read more</a>
            </div>

            <div class="box">
                <img src="make appointment (1).png" alt="">
                <h3>Make a reservation</h3>
                <a href="login.php" class="readmore-btn">read more</a>
            </div>

        </div>

    </section>
        
    <!--features section ends-->

    <!--popular section starts-->
    <section class="popular" id="popular">
        <h1 class="heading">Our <span>Categories</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="tire.png" alt="">
                <h3>Tyre</h3>
                <a href="rlogin.php" class="readmore-btn">read more</a>
            </div>

            <div class="box">
                <img src="exide_battry.png" alt="">
                <h3>Battries</h3>
                <a href="login.php" class="readmore-btn">read more</a>
            </div>

            <div class="box">
                <img src="tube2.jfif" alt="">
                <h3>Tubes</h3>
                <a href="login.php" class="readmore-btn">read more</a>
            </div>

        </div>
                                
    </section>
    <!--popular section ends-->

        <!--footer section starts-->
        <section class="footer">
            <div class=" container">
                <div class="row">
                <div class="footer-col">
                    <h4>Phone number</h4>
                    <ul>
                        <li><a href="#">0762955912</a></li>
                        <li><a href="#">0773523983</a></li>
                    </ul>
                </div>
    
                <div class="footer-col">
                    <h4>Our address</h4>
                    <ul>
                        <li><a href="#">No:100 Kandy Road, Danowita,SriLanka</a></li>   
                    </ul>
                </div>
    
                <div class="footer-col">
                    <h4>Opening hours</h4>
                    <ul>
                        <li><a href="#">8.30am - 6.00pm</a></li>
                    </ul>
                </div>
    
                <div class="footer-col">
                    <h4>E-mail address</h4>
                    <ul>
                        <li><a href="#">shashimalsha2000@gmail.com</a></li>
                    </ul>
                </div>
                </div>
    
            <div class="credit"> @copy; copyright @ <?php echo date('Y'); ?> by <span>shashimalsha</span></div>
    
        </section>
        <!--footer section ends-->

        <script src="js.js"></script>

</body>
</html>