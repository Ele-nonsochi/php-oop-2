<?php

$users = [
    [
        "firstName" => "Tim",
        "lastName" => "Burton",
        "payments" => [
            [
                "type" => "paypal",
                "number" => 001
            ],
            [
                "type" => "credit card",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "title" => "Christmas Party",
                "type" => "dresses",
                "price" => 40,
            ],
            
        ],
        "prime" => true,
        "discount" => 0
    ],
    [
        "firstName" => "John",
        "lastName" => "Smith",
        "payments" => [
            [
                "type" => "paypal",
                "number" => 001
            ],
            [
                "type" => "credit card",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "product"=> "accesories",
                "price" => "20"
            ],
            [
                "product"=> "sale",
                "price" => "30"
            ],
        ],
        "prime" => false,
        "discount" => 0
        
    ],
    [
        "firstName" => "Jude",
        "lastName" => "Law",
        "payments" => [
            [
                "type" => "credit card",
                "number" => 001
            ],
            [
                "type" => "paypal",
                "number" => 002
            ],

        ],
        "cart" => [
            [
                "product"=> "clothes",
                "price" => "50"
            ],
            [
                "product"=> "accesories",
                "price" => "30"
            ],
        ],
        "prime" => true,
        "discount" => 0
    ],
]

?>