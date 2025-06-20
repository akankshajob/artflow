<?php include("header.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artflow CART</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <br>
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <br>
        <h1>MY CART</h1>
      </div>
      <div class="col-lg-8">
        <table class="table table-dark table-hover" style="margin-top:10%">
          <thead>
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
  </thead>
  <tbody class="text-center">
  <?php
    if(isset($_SESSION['cart']))
    {
      foreach($_SESSION['cart'] as $key => $value)
      {
        $sr=$key+1;
        echo"
          <tr>
            <td>$sr</td>
            <td>$value[Item_Name]</td>
            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
            <td>
            <form action='manage_cart.php' method='POST'>
              <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'></td>
              <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
            </form>
            <td class='itotal'></td>
            <td>
              <form action='manage_cart.php' method='POST'>
                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
              </form>
            </td>
          </tr>
        ";
      }
    }
  ?>
   
</tbody>
</table>
</div>

    <div class="col-lg-3">
        <div classs="border bg-light rounded p-4 " style="margin-top:25%; border: 9px;">
          <h4>Grand Total:</h4>
          <br>
            <h5 class="text-right" id="gtotal" ></h5>
            <br>
            <?php
              if(isset($_SESSION['cart']) && count ($_SESSION['cart'])>0)
              {
            ?>
              <form action="purchase.php" method="POST">
                <h3>FILL UP YOUR PERSONAL DETAILS </h3>
                <div class="form-group">
                  <label>Full Name</label>
                  <input pattern="[a-zA-Z].{1,}" oninvalid="setCustomValidity('Please enter on alphabets only. ')" type="text" name="full_name" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Phone number</label>
                  <input pattern="[1-9]{1}[0-9]{9}" type="text" name="phone_no" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required>
                </div>
                <div class="form-check">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                               Cash On Delivery
                           </label> 
                    </div>
                          <br>
                          <button class="btn btn-primary btn-block" name="purchase">Make Purchase
                          </button>
              </form> 
              <?php
              }
              ?>
            </div>
        </div>
     </div>
  </div>
<script>

  var gt=0;
  var iprice=document.getElementsByClassName('iprice');
  var iquantity=document.getElementsByClassName('iquantity'); 
  var itotal=document.getElementsByClassName('itotal'); 
  var gtotal=document.getElementById('gtotal');

  function subTotal()
  {
    d=0;
    for(i=0;i<iprice.length;i++)
    {
      itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
      gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }
  subTotal();

</script>
</body>
</html>