<?php
    require("Connection.php");
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['AdminLoginId'])){
        header("Location: adminlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid #ccc;
}

th, td {
  padding: 10px;
}

th {
  background-color: #f8f8f8;
  color: #333;
}

tr:nth-child(even) {
  background-color: #f5f5f5;
}

tr:hover {
  background-color: #eaeaea;
}

</style>
    
    
    <div class="navbar">    
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HappyPawsStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminpanel.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addproducts.php">Add Product</a>
        </li>

        
          
          </ul>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
</div> 

<div class="container mt-10">
    <div class="row">
        <div class="col-lg-12">
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay mode</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $query="SELECT * FROM `order_manager`";
        $user_result=mysqli_query($con,$query);
        while($user_fetch= mysqli_fetch_assoc($user_result))
        {
          echo "
            <tr>
               <td>$user_fetch[Order_Id]</td>
               <td>$user_fetch[Full_Name]</td>
                <td>$user_fetch[Phone_No]</td>
                <td>$user_fetch[Address]</td>
                <td>$user_fetch[Pay_Mode]</td>
                <td>
                  <table class='table text-center table-dark'>
                      <thead>
                        <tr>
                          <th scope='col'>Item Name</th>
                          <th scope='col'>Price</th>
                          <th scope='col'>Quantity</th>
                        </tr>
                      </thead>
                      <tbody> 
                  ";
                    $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
                    $order_result=mysqli_query($con,$order_query);
                    while($order_fetch=mysqli_fetch_assoc($order_result))
                    {
                      echo"
                         <tr>
                            <td>$order_fetch[Item_Name]</td>
                            <td>$order_fetch[Price]</td>
                            <td>$order_fetch[Quantity]</td>
              </tr>
            ";
          }
        echo"
               </tbody>
            </table>
          </td>
        </tr>
      ";
    }
?>
      
  </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>