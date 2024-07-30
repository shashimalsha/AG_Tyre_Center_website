<?php
include_once('connection.php');

if(isset($_GET['update_id'])){
    $id=$_GET['update_id'];
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST['update_product'])){
            // if (isset($_POST['name']) && isset($_POST['category']) && isset($_POST['image'])) {
            //     //$productId = $_POST['id'];
            //     $newName = $_POST['new_name'];
            //     $newCategory = $_POST['new_category'];
            //     $newImage = $_POST['new_image'];

            //     $sql = "UPDATE new_products SET name=?, category=?, image=? WHERE id=?";

            //     if ($conn->query($sql) === TRUE) {
            //         echo "Product updated successfully!";
            //         echo "<script>window.open('admin.php','_self')</script>";
            //     } else {
            //         echo "Error updating product: " . $conn->error;
            //     }
            // } else {
            //     echo "Incomplete data submitted.";
            // }
            $newName = $_POST['new_name'];
             $newCategory = $_POST['new_category'];
            $newImage = $_POST['new_image'];

            $sql="UPDATE new_products SET name='".$newName."',category='".$newCategory."',image='".$newImage."' WHERE id=$id";
            $db = mysqli_connect("localhost", "root", "", "customers");
            $results=mysqli_query($db,$sql);
            if ($results) {
                     echo "Product updated successfully!";
                    echo "<script>window.open('admin.php','_self')</script>";
                } else {
                    echo "Incomplete data submitted.";
                }
        }
}


// if (isset($_GET['id'])) {
//     $productId = $_GET['id'];
//     $sql = "SELECT * FROM new_products WHERE id=$productId";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//     }
// }
?>

    
             


<html>
    <head>
        <title>update page</title>

        <!--font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <!--bootstrap link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

        <!--css file link-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    
        <!--contact section starts-->
        <section class="contact" id="contact">
            
            <h1 class="heading">Update Product</h1>
            <div class="container">
            <div class="admin_product_form_container">

            <form   method="post" >
            
            
                <span>Product Name :</span>
                <input type="text" name="new_name" placeholder="enter product name" id="new_name" class="box" >
                <span>Product Category( tire, battery, tube) :</span>
                <input type="text" name="new_category" placeholder="enter product Category" id="new_category" class="box" >
                <span>Date :</span>
                <input type="datetime-local" name="date" class="box">
                <span>product Image :</span>
                <input type="file" name="new_image" placeholder="add product image" accept="image/png, image/jpg, image/jpeg" id="new_image" class="box" >
                               
                <input type="submit" value="UPDATE PRODUCT" name="update_product"  class="link-btn">                
            </form>
</div>

</section>
        <!--contact section ends-->


        <script src="js.js"></script>
    </body>
</html>