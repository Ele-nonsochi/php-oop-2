<?php

    require_once  "./data/UserList.php";
    require_once "./class/User.php";
    require_once "./class/UserPrime.php";
    require_once "./data/ProductsList.php";
    require_once "./class/Product.php";
    require_once "./class/ProductType.php";


    foreach ($users as $key => $user) {

        if ($user["prime"] === true) {
            $singleUser = new userPrime($user);
        }else {
            $singleUser = new User($user);
        }
        var_dump($singleUser);
    }

    foreach ($products as $key => $product) {
        if ($product["type"] === "home") {
            $singleProduct = new ProductType($product);
        }
        else{
            $singleProduct = new Product($product);
        }
        var_dump($singleProduct);
    }

    $singleUser->pushCart($product);

    var_dump("test push" , $singleUser)




?> 