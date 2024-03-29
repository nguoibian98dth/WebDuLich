<?php
session_start(); //start session
include ("connection.php"); //include config file
 
//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
    session_destroy();
    header('Location:'.$return_url);
}
 
//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
    $id=$_GET['id'];

    
    //limit quantity for single product

 
    //MySqli query - get details of item from db using product code
    $sql4 = "SELECT ID ,ADULT_PRICE FROM `thongtinchitiettour` WHERE ID='$id'";
    $results= $connect->query($sql4);
    $product_name = "";
    $product_code = $id;
    $price = "";

    
    if ($results) { //we have the product info
        
        //prepare array for the session variable
        $new_product = array(array('name'=>$product_name, 'code'=>$product_code, 'price'=>$price));
        
        if(isset($_SESSION["products"])) //if we have the session
        {
            $found = false; //set found item to false
            
            foreach ($_SESSION["products"] as $cart_itm) //loop through session array
            {
                if($cart_itm['ID'] == $product_code){ //the item exist in array
 
                    $product[] = array('name'=>$cart_itm["NAME"], 'code'=>$cart_itm["ID"], 'price'=>$cart_itm["ADULT_PRICE"]);
                    $found = true;
                }else{
                    //item doesn't exist in the list, just retrive old info and prepare array for session var
                    $product[] = array('name'=>$cart_itm["NAME"], 'code'=>$cart_itm["ID"], 'price'=>$cart_itm["ADULT_PRICE"]);
                }
            }
            
            if($found == false) //we didn't find item in array
            {
                //add new user item in array
                $_SESSION["products"] = array_merge($product, $new_product);
            }else{
                //found user item in array list, and increased the quantity
                $_SESSION["products"] = $product;
            }
            
        }else{
            //create a new session var if does not exist
            $_SESSION["products"] = $new_product;
        }
        
    }
    
    //redirect back to original page
}
 
//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["products"]))
{
    $product_code   = $_GET["removep"]; //get the product code to remove
    $return_url     = base64_decode($_GET["return_url"]); //get return url
 
    
    foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
    {
        if($cart_itm["code"]!=$product_code){ //item does,t exist in the list
            $product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
        }
        
        //create a new product list for cart
        $_SESSION["products"] = $product;
    }
    
    //redirect back to original page
    header('Location:'.$return_url);
}