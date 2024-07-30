<html>
    <head>
        <title> admin update page</title>
        <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--bootstrap link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

        <!--css file link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php 
        if(isset($message)){
            foreach($message as $message){
                echo '<span class="message">'.$message.'</span>';
            }
        }
    ?>

    <section class="contact">
    <h1 class="heading">Update Product</h1>
    <div class="container">
            <div class="admin_product_form_container centerd">

                <form  action= "<?php $_SEVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">


                    <span>Product Name :</span>
                    <input type="text" name="procuct_name" placeholder="enter product name" id="product_name" class="box" required>
                    <span>Product Category( tire, battery, tube) :</span>
                    <input type="text" name="Category" placeholder="enter product Category" id="Category" class="box" required>
                    <span>Date :</span>
                    <input type="datetime-local" name="date" class="box">
                    <span>product Image :</span>
                    <input type="file" name="product_image" placeholder="add product image" accept="image/png, image/jpg, image/jpeg" id="product_image" class="box" required>   
                    <input type="submit" value="UPDATE PRODUCT" name="submit"  class="link-btn">
                    <a href="admin.php" class="link-btn"> Go Back</a>

                    
                </form>
            </div>

    </div>
    </section>
        
    </body>
</html>