<?php include("Connection.php") ?>

<?php 

   session_start();
   
   if(!isset($_SESSION['AdminLoginId']))
   {
    header("location:adminlogin.php");
   }
   ?>

<?php 
        if(isset($_POST['addproduct']))
        {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            $categorie1=$_POST['Categories'];
            
                    $file_extension = pathinfo($image,PATHINFO_EXTENSION);
                    $filename = time().'.'.$file_extension;
            
                    $query = "INSERT INTO `product`(`name`, `price`, `image`) VALUES ('$name','$price','$filename')";
                    $result = mysqli_query($con,$query);
                        if($result)
                        {
                   
                            move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$filename);
                            $_SESSION['AdminLoginId']="product added";
                            
                            header('Location:index.php');
                   
                        }
                        else
                        {
                             $_SESSION['AdminLoginId']="error in adding product";
                             header('Location:addproducts.php');
                   
                        }
                
            }   
            else
            {
                $_SESSION['AdminLoginId']="Select category";
                header('Location:addproducts.php');
            }

            
        
?>   