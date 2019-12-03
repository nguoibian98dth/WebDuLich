<html> 
<head></head>
<body>
    <div class="products">
        <?php
//current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        include ("connection.php");
        $results = $connect->query("SELECT * FROM thongtinchitiettour ORDER BY ID ASC");
        if ($results) {
        //output results from database

            foreach ($results as $tour) {
                # code...

                echo '<div class="products">';
                echo '<form method="post" action="cardUpdate.php?id='.$tour['ID'].'">';
                echo '<div class="product-thumb"><img src="images/'.$tour['IMAGE'].'"></div>';
                echo '<div class="product-content"><h3>'.$tour['NAME'].'</h3>';
                echo '<div class="product-info">Price '.$tour['ADULT_PRICE'].' <button class="add_to_cart">Add To Cart</button></div>';
                echo '</div>';
                echo '<input type="hidden" name="product_code" value="'.$tour['ID'].'" />';
                echo '<input type="hidden" name="type" value="add" />';
                echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                echo '</form>';
                echo '</div>';
            }

        }
        ?>
    </div><div class="shopping-cart">
        <h2>Your Shopping Cart</h2>
        <?php
        if(isset($_SESSION["products"]))
        {
            $total = 0;
            echo '<ol>';
            foreach ($_SESSION["products"] as $cart_itm)
            {
                echo '<li class="cart-itm">';
                echo '<span class="remove-itm"><a href="cardUpdate.php?id='.$cart_itm['ID'].'">;</a></span>';
                echo '<h3>'.$cart_itm["NAME"].'</h3>';
                echo '<div class="p-code">P code : '.$cart_itm["ID"].'</div>';
                echo '<div class="p-price">Price :'.$cart_itm["ADULT_PRICE"].'</div>';
                echo '</li>';
                $subtotal = ($cart_itm["ADULT_PRICE"];
                $total = ($total + $subtotal);
            }
            echo '</ol>';
            echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="viewCart.php">Check-out!</a></span>';
            echo '<span class="empty-cart"><a href="cardUpdate.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
        }else{
            echo 'Your Cart is empty';
        }
        ?>
    </div>
</body>
</html>
