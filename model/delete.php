<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

require_once "../lib/class_database.php";

$objDB = new DB();

$table_name="product";

switch($table_name){
    case "product": 
        require_once "DAO/productDAO.php";

        $objProduct = new ProductDAO($objDB);

        $objProduct->setId("B-DIM-RIST");

        $objProduct ->deleteProduct();
    break;

    default:
    echo "Wrong table";
    break;
}
?>