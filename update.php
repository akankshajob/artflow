<?php include("Connection.php") ?>

<?php 

   session_start();
   
   if(!isset($_SESSION['AdminLoginId']))
   {
    header("location:adminlogin.php");
   }
   ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Artflow</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style2.css">

   <!-- Java Scripts -->

 
  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

 <div class="header">
    
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
   <button type="submit"  class="btn btn-outline-warning" name="Logout">LOG OUT</button>
</form>
 </div>
 

    
 
    
 <!-- Add Product -->
 

 <form method="POST"  enctype="multipart/form-data" >
 <div class="mb-3">
  
 </div>

 </div>


  

  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" required  name="name" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" required  name="price" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Image  ( jpg , png and jpeg only )</label> 
    <input type="file" class="form-control" required  name="image" >
  </div>

  <button type="submit" class="btn btn-primary" required  name="submit">Submit</button>
</form>


<?php 
       
              $id= $_GET['updateid'];
                if(isset($_POST['submit']))
                 {
                
                $name = $_POST['name'];
                $price = $_POST['price'];
                $image = $_FILES['image']['name'];
              
            
                 $file_extension = pathinfo($image,PATHINFO_EXTENSION);
                 $filename = time().'.'.$file_extension;
    
                  $query = "UPDATE `product` SET `name`='$name',`price`='$price',`image`='$filename' WHERE `id`='$id'";
                 $result = mysqli_query($con,$query);
                if($result)
                {
           
                    move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$filename);
                    $_SESSION['AdminLoginId']="product updated";
                   
                    header('Location:addproducts.php');
           
                }
                else
                {
                     $_SESSION['AdminLoginId']="error in updating product";
                     header('Location:addproducts.php');
           
                }

                }   
           
           
                
                

                

               
        
       

            
        
?>   
  


 



 <!-- logout -->
      
    <?php 
      if(isset($_POST['Logout'])){
        session_destroy();
      
      }
    ?>
  </body>
  </html>
