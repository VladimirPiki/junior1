<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

/**
 * This is PHP file is for delete data from client side.
 * Requiere_once indicates the require once with class database with new DB() and object to initializes in Data Access Object, and then $json is variable for all input data from client side(productList.js).
 * And then setters data to DAO with function deleteProduct().
 * Switch is for if have more tables.
 */

require_once "../lib/class_database.php";
$objDB = new DB();
$json        =    json_decode(file_get_contents("php://input"));
$pk_id        =    $json[0]->pk_id;
$table_name = $json[0]->table_name;

switch ($table_name) {
    case "product":
        require_once "DAO/productDAO.php";
        $objProduct = new ProductDAO($objDB);
        $objProduct->setId($pk_id);
        $objProduct->deleteProduct();
        break;

    default:
        echo "Wrong table";
        break;
};
?>