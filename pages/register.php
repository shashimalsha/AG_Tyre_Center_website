<?php
            include_once('connection.php');
            $name ="";
            $email ="";
            $number ="";
            $date ="";
            $password ="";
if(isset($_POST['submit'])){
           // if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name =$_POST['name'];
                $email =$_POST['email'];
                $number =$_POST['number'];
                $date =$_POST['date'];
                $password =$_POST['password']; 
            
            // else if(empty($name) || empty($email) || empty($number) || empty($date) || empty($password)){
            //     $errorMessage = " all the feilds are required";
            // }else{
                $sql = "INSERT INTO register_detail  (name, email, number, date, password) VALUES ('$name', '$email', '$number', '$date', '$password')";
                // $result = $conn->query($sql);
                // if(!$result){
                //     $errorMessage = "Invalid query" . $conn->error;
                // }else{
                //     $successMessage = "Registered successfully";
                //     $name = "";
                //     $email = "";
                //     $number = "";
                //     $date = "";
                //     $password = "";
                // }

                $db=mysqli_connect("localhost","root", "","customers");
                $result=mysqli_query($db,$sql);
                if($result){
                    echo "<script>alert('Details cannot be inserted')</script>";
                }else{
                    echo "<script>alert('Registered successfully')</script>";
                    echo "<script>window.open('homepage.html','_self')</script>";
                }
            }
        
?>

<html>
    <head>
        <title>register</title>

        <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--bootstrap link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!--css file link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--contact section starts-->
        <section class="contact" id="contact">
            <img src="contact.jpg" alt="">
            <h1 class="heading">Register</h1>


            <form method="post">
            
            
                <span>Your name :</span>
                <input type="text" name="name" id="name" placeholder="enter your name" class="box" value="<?php echo $name; ?>">
                <span>Your email :</span>
                <input type="email" name="email" id="email" placeholder="enter your email" class="box" value="<?php echo $email; ?>">
                <span>Your number :</span>
                <input type="text" name="number" id="number" placeholder="enter your number" class="box" value="<?php echo $number; ?>">
                <span>Date :</span>
                <input type="datetime-local" name="date" id="date" class="box" value="<?php echo $date; ?>">
                <span>Your password :</span>
                <input type="text" name="password" id="password" placeholder="create password" class="box" value="<?php echo $password; ?>">
                
                <P>if you have an account <a href="login.html">Login Now</a></P>
                <input type="submit" value="Register" name="submit" onclick="return register()" class="link-btn">
            </form>
        </section>
        <!--contact section ends-->

      
    </body>   
</html>