<?php
require_once'connection.php';

$sql= " SELECT * FROM new_products";
$all_product = $conn->query($sql);

?>

<html>
<head>
    <title>ag tyre</title>


    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--bootstrap link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!--css file link-->
    <link rel="stylesheet" href="style.css">
    <style>
        .productline{
    margin: 5rem;
}

.productline .box-container{
    /* max-width: 1500px; */
    width: 95%;
    display: flex;
        flex-wrap: nowrap; /* Prevent boxes from wrapping */
        overflow-x: auto; 
    /* display: grid;
    grid-template-columns: repeat(4, 1fr);*/
    gap: 1.5rem;
            margin: 40px; 
     
}

.productline .box-container .box{
    /* padding: 3rem 2rem; */
    background: var(--white);
    outline: var(--outline);
    outline-offset: -1rem;
    text-align: center;
    box-shadow: var(--box-shadow);
    margin: 1.5rem;
   
    
}


.productline .box-container .box:hover{
    outline: var(--outline);
    outline-offset: 0rem; 
    outline-width: .2rem;
    outline-color: var(--black);     
}

.productline .box-container .box img{
    margin: 1rem 0;
    height: 20rem;
}

.productline .box-container .box h3{
    font-size: 1rem;
    line-height: 1.8;
    color: var(--black);
}
    </style>
</head>
<body>
    <?php
        include_once('pricing.php');
    
    ?>

      <!--header section starts-->
      <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="" class="logo">AG<span>Tyre.</span></a>
                <nav class="nav">
                    <a href="home.html">home</a>
                    <a href="about.html">about</a>
                    <a href="service.html">services</a>
                    <a href="contact.html">contact</a>
                    <a href="pricing.html">pricing</a>
                    <a href="contact.html" class="link-btn">contact</a>
                </nav>  
            </div>
        </div>

    </header>
    <!--header section ends-->


    <!--inhead section starts-->

    <section class="inhead">
 
   
        
        <div class="container">
            <div class="row align-items-center justify-content-between"></div>    
        </div>       
    </section>
    <!--inhead section ends-->



            <!--brandslider section starts-->
            <section class="brands">
                <div class="logo-slider">
                    <div class="slide">
                    <img src="CEAT_logo-removebg-preview.png" alt="">
                    <img src="dsi3-removebg-preview.png" alt="">
                    <img src="mrf2-removebg-preview.png" alt="">
                    <img src="lucas2-removebg-preview.png" alt="">
                    <img src="exide2-removebg-preview.png" alt="">
                    </div>
                </div>            
            </section>
            <!--brandslider section ends-->

  <!--header section starts-->
  <header class="header1">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            
            <nav class="nav">
                <a href="#tire">Tire</a>
                <a href="#battery">Battery</a>  
                <a href="#tube">Tube</a>  
            </nav>  
        </div>
    </div>

</header>
<!--header section ends-->  

    <!--tire section starts-->
    <section class="tire" id="tire">
    <section class="productline">
        <div class="box-container">
        <?php
        while($row=mysqli_fetch_assoc($all_product)){
            $image=$row['image'];
            $name=$row['name'];

        echo "
                <div class='box '>
                    <img src='uploaded_img/$image' alt=''>
                    <h3>$name</h3>
                </div>
        
        ";
        ?>
        
       
        <?php
        }
        ?>
            
            </div>
    </section>
   
        
    <!--tire section ends-->


                       
                      
                      

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




            <script>
                $(document).ready(function(){
                    $(".button").click(function(){
                        var value =$(this).attr(data-filter);
                        if(value=="all"){
                            $(".filter").show("100");
                        }
                        else{
                            $(".filter").not("."+value).hide("1000");
                            $(".filter").filter("."+value).show("1000");
                        }
                        $("ul .button").click(function(){
                             $(this).addClass('active').siblings().removeClass('active');
                        })
                    })
                })
            </script>


            
    <!--js file link-->
    <script src="js.js"></script>
    
   
</body>
</html>

<!-- <div class="col-md-3 box-container">
            <div class="box">
                <img src="<?php // echo $row ["image"]; ?>" alt="">
                <h3><?php //echo $row ['name']; ?></h3>
                
            </div> -->