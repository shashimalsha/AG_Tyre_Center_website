<?php
            include_once('connection.php');
           
            if(isset($_POST['submit'])){
           // if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email =$_POST['email'];
                $password =$_POST['password']; 

                $select = "SELECT *FROM register_detail WHERE email = '$email' && password='$password' ";

                //$sql = "INSERT INTO register_detail  (name, email, number, date, password) VALUES ('$name', '$email', '$number', '$date', '$password')";
                $db=mysqli_connect("localhost","root", "","customers");
                $result=mysqli_query($db,$select);
                if(mysqli_num_rows($result)>0){
                    echo "<script>alert('login successfully')</script>";
                    echo "<script>window.open('homepage.html','_self')</script>";
                }else{
                    echo "<script>alert('check your password and name')</script>";
                    
                }
            }
        
?>


<html>
    <head>
        <title>login</title>
         <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--bootstrap link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!--css file link-->
        <link rel="stylesheet" href="style.css">

    </head>
    <body>

    <!--login section starts-->
        <section class="contact" id="contact">
            <img src="contact.jpg" alt="">
            <h1 class="heading">Login</h1>

       
            <form action="" method="post">
                <span>Your email :</span>
                <input type="email" name="email" placeholder="enter your email" class="box">
                <span>Your password :</span>
                <input type="password" name="password" placeholder="enter your password" class="box">
                
                <P>if you haven't an account <a href="register.html">Register Now</a>
                </P>
                <input type="submit" value="login" name="submit" class="link-btn">
            </form>
        </section>
       </div>
       
    </section>
    <!--login section ends-->
        
    </body>
</html>