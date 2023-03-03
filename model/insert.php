<?php
/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/**
 * This is PHP file is for insert data from client side.
 * Requiere_once indicates the require once with class database with new DB() and object to initializes in Data Access Object, and then $json is variable for all input data from client side(addProduct.js).
 * And then setters data to DAO with function insertProduct().
 * Switch is for if have more tables.
 */

$json=json_decode(file_get_contents("php://input"));
$table_name = $json[0]->table_name;
require_once "../lib/class_database.php";
$objDB = new DB();
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
