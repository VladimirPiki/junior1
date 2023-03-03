<?php
/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

 
/**
 * This is PHP file is for display data to client side.
 * Requiere_once indicates the require once with class database with new DB() and object to initializes to Data Access Object.
 * And then loop for data to send json data in variable $data to productList.js.
 * Switch is for if have more tables.
 */

$json        =    json_decode(file_get_contents("php://input"));
$table_name    =    $json->table_name;
$data        =    array();
require_once "../lib/class_database.php";
$objDB = new DB();
switch ($table_name) {
    case "product":
        require_once "DAO/productDAO.php";
        $objProduct = new ProductDAO($objDB);
        $results = $objProduct->selectProduct();

        foreach ($results as $row) {
            $data[] = array(
                "id" => $row["id"],
                "name" => $row["name"],
                "price" => $row["price"],
                "attributes" => $row["attributes"],
                "value" => $row["value"]
            );
        }
        echo json_encode($data);
        break;

    default:
        echo "Wrong table";
        break;
}
