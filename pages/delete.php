<?php
    include_once('connection.php');
            $product_name ="";
            $product_category ="";
            $product_image ="";
            $date="";

            if(isset($_GET['delete_id'])){
                $id = $_GET['delete_id'];
                $query = "DELETE FROM new_products WHERE id='$id'";
                $db=mysqli_connect("localhost","root", "","customers");
                $result=mysqli_query($db,$query);
        
                if(($result)){
                    echo "<script>alert('Delete successfully')</script>";
                    echo "<script>window.open('admin.php','_self')</script>";
       
                }else{
                    echo "<script>alert('Can not delete')</script>";
                    
                }
            }

?>