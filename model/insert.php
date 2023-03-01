<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

$json=json_decode(file_get_contents("php://input"));
//var_dump($json);
$table_name = $json[0]->table_name; // ova e pred da pocnam da gi pram drugite 2tabeli
require_once "../lib/class_database.php";
$objDB = new DB();
//$table_name = "product";
switch ($table_name) {
    case "product":
        require_once "DAO/productDAO.php";

        $objProduct = new ProductDAO($objDB);

        $objProduct->setId($json[0]->id);
        $objProduct->setName($json[0]->name);
        $objProduct->setPrice($json[0]->price);
        $objProduct->setAttributes($json[0]->attributes);
        $objProduct->setValue($json[0]->value);

        $objProduct->insertProduct();
        break;

    default:
        echo "Wrong table";
        break;
}
