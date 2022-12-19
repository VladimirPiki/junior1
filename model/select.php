<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */


$json        =    json_decode(file_get_contents("php://input"));
$table_name    =    $json->table_name;
$data        =    array();

require_once "../lib/class_database.php";
$objDB = new DB();

//OBICNO PHP$table_name = "product";

switch ($table_name) {
    case "product":
        require_once "DAO/productDAO.php";

        $objProduct = new ProductDAO($objDB);

        $results = $objProduct->selectProduct();

        //var_dump($results);

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
