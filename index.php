<?php include("Connection.php") ?>
<?php include("header.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>
<body>



    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 60rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/van Gogh.jpg" class="card-img-top" style="max-width: 100%; height: 200px;">
                         <div class="card-body text-center" >
                         <h5 class="card-title">Starry Night</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Starry Night">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/garden-at-sainte-adresse.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">Garden at Sainte-Adresse</h5>
                         <p class="card-text">Price: Rs.4500</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Garden at Sainte-Adresse">
                         <input type="hidden" name="Price" value="4500">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/Johannes_Vermeer.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">Girl with a Pearl Earring</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Girl with a Pearl Earring">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/the milkmade.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">The Milkmaid</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="The Milkmaid">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/the-persistence-of-memory-1931.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">The Persistence of Memory</h5>
                         <p class="card-text">Price: Rs.4500</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="The Persistence of Memory">
                         <input type="hidden" name="Price" value="4500">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/sunflowers.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">Sunflower</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Sunflower">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/DORA.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">Portrait of Dora Maar</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Portrait of Dora Maar">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                     <div class="card" style="width: 18rem; margin-top: 58%; width: 300px; height: 350px;">
                         <img src="images/autumn-landscape.jpg" class="card-img-top" style="max-width: 100%; height: 200px;" >
                         <div class="card-body text-center" >
                         <h5 class="card-title">Autumn Landscape</h5>
                         <p class="card-text">Price: Rs.4000</p>
                         <button type="submit" name="Add_To_Cart" class="btn btn-primary" style="background-color:black;">Add To Cart</a></button>
                         <input type="hidden" name="Item_Name" value="Autumn Landscape">
                         <input type="hidden" name="Price" value="4000">

                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>