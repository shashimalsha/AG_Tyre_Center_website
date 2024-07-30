<?php
    include_once('connection.php');
            $product_name ="";
            $product_category ="";
            $product_image ="";
            $date="";

            

            if(isset($_POST['add_product'])){
                
                     $product_name = $_POST['product_name'];
                     $product_category = $_POST['Category'];
                     $date = $_POST['date'];                   
                     
                     $product_image = $_FILES['product_image']['name'];
                     $temp_image=$_FILES['product_image']['tmp_name'];
                     move_uploaded_file($temp_image, "uploaded_img/$product_image");
                     //$product_image_folder = 'uploaded_img/'.$product_image;

                    
                    if(empty($product_name) || empty($product_category) || empty($product_image)){
                        echo "<script>alert('please fill out all')</script>";
                    }else{
                     $sql = "INSERT INTO new_products  (name, category, image, date) VALUES ('$product_name', '$product_category', '$product_image', '$date')";
                     $db=mysqli_connect("localhost","root", "","customers");
                     $result=mysqli_query($db,$sql);
                     if($result){
                         echo "<script>alert('product added successfully')</script>";
                     }else{
                         echo "<script>alert('product can not be added successfully..!')</script>";
                         echo "<script>window.open('homepage.html','_self')</script>";
                     }
                    }
            }

            
           
            
           
            
             
?>

<html>
    <head>
        <title>admin page</title>

        <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--bootstrap link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

        <!--css file link-->
        <link rel="stylesheet" href="style.css">
        <style>
            .imge{
                height: 50px;
                width: 50px;
            }
        </style>
    </head>
    <body>

    
        <!--contact section starts-->
        <section class="contact" id="contact">
            
            <h1 class="heading">Add Product</h1>
            <div class="container">
            <div class="admin_product_form_container">

            <form  action= "" method="post" enctype="multipart/form-data"  >
            
            
                <span>Product Name :</span>
                <input type="text" name="product_name" placeholder="enter product name" id="product_name" class="box" >
                <span>Product Category( tire, battery, tube) :</span>
                <input type="text" name="Category" placeholder="enter product Category" id="Category" class="box" >
                <span>Date :</span>
                <input type="datetime-local" name="date" class="box">
                <span>product Image :</span>
                <input type="file" name="product_image" placeholder="add product image" accept="image/png, image/jpg, image/jpeg" id="product_image" class="box" >
                               
                <input type="submit" value="ADD PRODUCT" name="add_product"  class="link-btn">                
            </form>
</div>
            

        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <td>product image</td>
                        <td>product name</td>
                        <td>product category</td>
                        <td colspan="2">action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $sql = "SELECT * FROM new_products";
                        $db=mysqli_connect("localhost","root", "","customers");
                        $result=mysqli_query($db,$sql); 

                        while($row = $result->fetch_assoc()){
                            $product_id=$row['id'];
                            $img=$row['image'];
                            $name=$row['name'];
                            $category=$row['category']; ?>
                            <tr>
                                    <td>
                                        <!-- <img src="uploaded_img/<?php ?>" alt="" class="imge w-50" > -->
                                        <?php echo $img;?>
                                    </td>
                                    <td><?php echo $name;?></td>
                                    <td><?php echo $category;?></td>
                                    <td>   

                                        <a class='link-btn' href='update.php?update_id=<?php echo $product_id;?>'>Update</a>
                                        <a class='readmore-btn' name='delete' href='delete.php?delete_id=<?php echo $product_id;?>'>Delete</a>
                                      
                                    </td>
                                </tr> 

                        <?php
                        }   


                    
                    ?>
                </tbody>

            </table>


        </div>
</div>
             

   
        </section>
        <!--contact section ends-->


        <script src="js.js"></script>
    </body>
</html>